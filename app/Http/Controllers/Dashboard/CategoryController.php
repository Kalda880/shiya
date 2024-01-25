<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Http\Requests\Dashboard\CategoryRequest;
use Symfony\Component\HttpFoundation\Session\Session;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $categories = Category::all();

        return view('admin.category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryRequest $request)
    {
        $data = $request->validated();

        $data['image'] = $this->uploadImage($request->image);
        $data['is_active'] = request()->has('is_active');
        $data['cat_order'] = request()->has('cat_order')?request('cat_order'):(Category::max('cat_order')+1);
        Category::create($data);

        Session()->flash('success', 'تم اضافة القسم بنجاح');

        return  myRedirectRoute('dashboard.category.index');
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
        $category = Category::find($id);

        return view('admin.category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $rules = [
            'title' => 'required|min:3|max:255|unique:categories,title,'.$id.',id',
            'image' =>'nullable|image|mimes:jpg,jpeg,png,gif',
            'cat_order'=>'required|numeric'
        ];
        
        $validator = \Validator::make($request->all(),$rules);
 
        if ($validator->fails()) {
            return back()
                        ->withErrors($validator)
                        ->withInput();
        }
        $category = Category::find($id);

        $data     = $request->only($category->fillable);
        $data['is_active'] = $request->has('is_active');
        if(request()->hasFile('image')){
                
           $data['image'] = $this->uploadImage($request->image);
    
        }

        $category->update($data);

        Session()->flash('success', 'تم تعديل القسم بنجاح');

        return  myRedirectRoute('dashboard.category.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::find($id);
        try {
            $count = $category->subCategories->count();
            if($count>0){
                Session()->flash('error', 'لا يمكنك حذف هذا القسم لانه يحتوي على اقسام فرعية');

            }else{
                $category->delete();
                Session()->flash('success', 'تم حذف القسم بنجاح');
            }
            

        } catch (\Throwable $th) {
            //throw $th;
            session()->flash('error', $th->getMessage());
        }


        return  myRedirectRoute('dashboard.category.index');
    }
}
