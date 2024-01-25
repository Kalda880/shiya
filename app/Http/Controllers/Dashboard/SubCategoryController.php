<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\SubCategory;
use App\Http\Requests\Dashboard\CategoryRequest;
use Symfony\Component\HttpFoundation\Session\Session;
use Illuminate\Support\Facades\Validator;

class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($cat_id)
    {
        $category = Category::findOrFail($cat_id);

       $items = SubCategory::whereRaw("category_id=?",[$cat_id])->get();

        return view('admin.sub-category.index', compact('items','category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($cat_id)
    {
        $category = Category::findOrFail($cat_id);

        return view('admin.sub-category.create',compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($cat_id)
    {
        $category = Category::findOrFail($cat_id);
        $rules = [
            'name' => 'required|min:3|max:255|unique:subcategories,name,null,id,category_id,'.$category->id,
        ];
        
        $validator = \Validator::make(request()->all(),$rules);
 
        if ($validator->fails()) {
            return back()
                        ->withErrors($validator)
                        ->withInput();
        }
        $model = new SubCategory();

        $data     = request()->only($model->fillable);
        $data['category_id'] = $category->id;
    
        SubCategory::create($data);

        Session()->flash('success', 'تم اضافة فرع القسم بنجاح');

        return myRedirectRoute('dashboard.category.sub-categories.index',['cat_id'=>$cat_id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($cat_id,$id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($cat_id,$id)
    {
        $category = Category::findOrFail($cat_id);

        $item = SubCategory::whereRaw('category_id=?  and id=?',[$cat_id,$id])->firstOrFail();
        return view('admin.sub-category.edit', compact('item','category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($cat_id,$id)
    {
        $category = Category::findOrFail($cat_id);
     
        $rules = [
            'name' => 'required|min:3|max:255|unique:subcategories,name,'.$id.',id,category_id,'.$category->id,
        ];
        
        $validator = \Validator::make(request()->all(),$rules);
 
        if ($validator->fails()) {
            return back()
                        ->withErrors($validator)
                        ->withInput();
        }
        $item = SubCategory::find($id);

        $data['name']     = request('name');

        $item->update($data);

        Session()->flash('success', 'تم تعديل فرع القسم بنجاح');

        return myRedirectRoute('dashboard.category.sub-categories.index',['cat_id'=>$cat_id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($cat_id,$id)
    {
        $item = SubCategory::whereRaw('category_id=?  and id=?',[$cat_id,$id])->firstOrFail();
        try {
           
                $item->delete();
                Session()->flash('success', 'تم حذف فرع القسم بنجاح');

        } catch (\Throwable $th) {
            //throw $th;
            session()->flash('error', $th->getMessage());
        }


        return myRedirectRoute('dashboard.category.sub-categories.index',['cat_id'=>$cat_id]);
    }
}
