<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Customer;
use App\Models\CustomRequest;
use App\Models\Design;
use App\Models\Payment;
use App\Models\Designer;
use App\Models\SiteUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PDF;
class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $designers = SiteUser::where('is_designer',1)->count();

        $customers = SiteUser::where('is_customer',1)->count();

        $designs = Design::count();

        $profit = Payment::where("status","paid")->sum("amount");

        return view('admin.index', compact('designers', 'customers', 'designs', 'profit'));

    }

    public function profile()
    {
        $user = Auth::user();

        return view('admin.profile.profile', compact('user'));

    }




    public function update(Request $request)
    {
        $user = Auth::user();

     $validated =    $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email,'.$user->id,
         ]);

        if($request->has('image')){

            $validated['image'] = $this->uploadImage($request->image);

        }

        $user->update($validated);

        return redirect()->back()->with('success', 'تم تعديل البيانات بنجاح');
    }


    public function password (Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'password' => 'required|confirmed|min:8',
            'old_password' => 'required',
        ]);

        if (Hash::check($request->old_password, $user->password)) {

            $user->update(['password' => bcrypt($request->password)]);

            return redirect()->back()->with('success', 'تم تعديل كلمة المرور بنجاح');

        } else {

            return redirect()->back()->with('error', 'كلمة لمرور القديمة غي صحيحة');

        }
    }


    public function custom()
    {
         $contacts = CustomRequest::latest()->get();

        return view('admin.custom.custom', compact('contacts'));

    }


    public function createinvoice($id)
    {
         $user = CustomRequest::findOrfail($id);

        return view('admin.custom.create', compact('user'));

    }

    public function newinvoice (Request $request)
    {

        $custom = CustomRequest::findOrfail($request->request_id);

        if(is_null($custom->file)){


        $validated = $request->validate([
            'request_id' => 'required|exists:custom_requests,id',
            'name'       => 'required',
            'price'      => 'required|numeric',
            'qty'        => 'required|numeric',
            'total'      => 'required|numeric',
            'tax'        => 'required|numeric',
            'grand_total'=> 'required|numeric',

        ]);

        $data = $request->all();

        $data['number'] = invoiceNumber();

        $file = 'custom/'.$custom->id.'.pdf';

        $pdf = PDF::loadView('createinvoice', [

            'data' => $data,

        ])->save($file);


        $custom->update([
            'file' =>  asset($file),
        ]);



    }

    return redirect(asset($custom->file));


}



    public function contact()
    {
         $contacts = Contact::latest()->get();

        return view('admin.custom.contact', compact('contacts'));

    }


}
