<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\SiteUser;
use App\Models\Contact;
use App\Models\CustomRequest;
use App\Models\Design;
use App\Models\Tag;

class FrontController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $categories =  Category::active()->get();
        
        $code = request()->query('code', NULL);

        return view('front.index', compact('categories'));
    }
    public function indexCode($code)
    {
        if(SiteUser::whereRaw('code=?',[$code])->first()){
            if(session()->has('affiliate.code'))
                session()->pull('affiliate.code');
            session()->push('affiliate.code',$code);
            return redirect('/');
        }else{
            return redirect('/');
        }

    }

    public function about()
    {
        return view('front.about');
    }


    public function pricing()
    {
        return view('front.pricing');
    }


    public function contact()
    {
        return view('front.contact');
    }


    public function custom()
    {
        return view('front.custom');
    }
    
    public function business()
    {
        return view('front.busi');
    }

    public function business1()
    {
        return view('front.busi1');
    }
    public function templateCode($id,$code)
    {
        $design = Design::active()->whereRaw('id=?',[$id])->first();
        if($design){
        session()->flash('design_id',$id);
        }
        $affiliate = SiteUser::whereRaw('code=?',[$code])->first();
        $params = [];
        if($affiliate){
            $params = ['code'=>$code];
        //session()->flash('code-affiliate',$code);
            if(session()->missing("affiliate.".$design->id,$code))
            session()->push("affiliate.".$design->id,$code);
        }
        return redirect()->route('template');
    }
    public function template()
    {

        $designs = Design::
            when(request()->category_id, function($query){
                $query->where('category_id', request()->category_id);
            })->active()
        ->paginate(28);
            $categories =  Category::active()->get();
        return view('front.template', compact('designs','categories'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function search (Request $request)
    {
        $designs = Design::where('title', 'like', '%' . $request->search . '%')->paginate(28);

        return view('front.template', compact('designs'));
    }



    public function sendcustom(Request $request)
    {

       $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'content' => 'required',
        ]);

         CustomRequest::create($request->all());

         session()->flash('success', 'تم ارسال الطلب بنجاح');

        return redirect()->back();
    }



    public function sendcontact(Request $request)
    {
       $request->validate([
            'name'    => 'required',
            'email'   => 'required',
            'phone'   => 'required',
            'message' => 'required',
            'subject' => 'required',
        ]);

         Contact::create($request->all());

         session()->flash('success', 'تم ارسال الطلب بنجاح');

        return redirect()->back();
    }

}
