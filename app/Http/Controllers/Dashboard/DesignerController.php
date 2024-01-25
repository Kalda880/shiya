<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Dashboard\DesignerRequest;
use App\Models\Designer;
use App\Models\SiteUser;

class DesignerController extends Controller
{
    /*** Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $designers = SiteUser::where('is_designer',1)->latest()->paginate(5);

        return view('admin.designer.index', compact('designers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('admin.designer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DesignerRequest $request)
    {
         $data = $request->validated();

            $data['password'] = bcrypt($request->password);

            if($request->has('image')){

                $data['image'] = $this->uploadImage($request->image);

            }else{

                    $data['image'] = asset('images/default.png');
            }
            $data['role'] = 'designer';
            $data['is_designer'] = true;
            $data['is_customer'] = true;
            SiteUser::create($data);

            session()->flash('success', 'تم اضافة المصمم بنجاح' );

            return  myRedirectRoute('dashboard.designer.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $designer = SiteUser::find($id);
       if($designer){
        $designer->is_designer = false;
        if($designer->role == 'designer')
        $designer->role = 'customer';
        $designer->save();
       }

         session()->flash('success', 'تم حذف المصمم بنجاح' );

        return  myRedirectRoute('dashboard.designer.index');
    }

    public function showFormUpdateStatus($id)
    {
        $designer = SiteUser::where('is_designer',1)->findOrFail($id);
        return view('admin.designer.edit-status',compact('designer'));
    }
    public function updateStatus($id)
    {
        $designer = SiteUser::where('is_designer',1)->findOrFail($id);
        $status = request()->get('status') ==="1";
        //return dd($status,request()->all());
        $designer->designer_status = $status;
        $designer->save();
        if($status)
        session()->flash('success','تم تفعيل حساب المصمم');
        else
        session()->flash('success','تم تعيطل حساب المصمم');
        return  myRedirectRoute('dashboard.designer.index');
    }
}
