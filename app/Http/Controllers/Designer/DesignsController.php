<?php

namespace App\Http\Controllers\Designer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tag;
use App\Models\Design;
use App\Models\Category;
use App\Models\SubCategory;

class DesignsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         return view('designer.designs.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(request()->user()->status===0){
            session()->flash('error','لا يمكنك إضافة تصاميم لانك حسابك غير مفعل');
            return redirect()->back();
        }
        $tags = Tag::all();

        $categories = Category::active()->with("subcategories")->get();

       return view('designer.designs.create', compact('tags', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'    => 'required',
            'tags'     => 'required|array',
            'price'    => 'required|numeric',
            'image'    =>"required|image|mimes:jpg,jpeg,png,gif",
            'subcategory_id' => 'required|exists:subcategories,id',
        ]);
        //return dd(request()->all());
        $tags = request()->get('tags');
        $tags = array_map('trim',$tags);
        foreach ($tags as $value) {
           $tagItem = Tag::whereRaw('title=?',[$value])->first();
           if(!$tagItem){
            Tag::create(['title'=>$value]);
           }
        }
        $tags = Tag::whereIn('title',$tags)->get()->pluck('id')->toArray();
       // return dd($tags);
    
        $data =  [
            'title'       => $request->title,
            'price'       => $request->price,
            'designer_id' => auth()->user()->id,
            'subcategory_id' => $request->subcategory_id,
            'category_id' => SubCategory::find($request->subcategory_id)->category_id,
        ];
        $data['images'] = $this->uploadImage($request->image);
        Design::create($data)
        ->tags()->attach($tags);

        session()->flash('success', 'تم اضافة العمل بنجاح');


        return  myRedirectRoute('designer.designs.index');

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
        if(request()->user()->status===0){
            session()->flash('error','لا يمكنك تعديل تصاميم لانك حسابك غير مفعل');
            return redirect()->back();
        }
        $design = Design::findOrFail($id);

        $tags = Tag::all();

        $categories = Category::active()->get();
        $tags_selected = $design->tags->pluck('id')->toArray();
        //return dd($tags_selected);
        return view('designer.designs.edit', compact('design','tags_selected', 'tags', 'categories'));
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
        $design = Design::findOrFail($id);

        $request->validate([
            'title'    => 'required',
            'tags'     => 'required|array',
            'price'    => 'required|numeric',
            'image'    =>"nullable|image|mimes:jpg,jpeg,png,gif",
            'subcategory_id' => 'required|exists:subcategories,id',
        ]);
        $data = [
            'title'       => $request->title,
            'price'       => $request->price,
            'subcategory_id' => $request->subcategory_id,
            'category_id' => SubCategory::find($request->subcategory_id)->category_id,
        ];
        if($request->image)
        $data['images'] = $this->uploadImage($request->image);

        $design->update($data);

        $design->tags()->sync($request->tags);


        session()->flash('success', 'تم تعديل العمل بنجاح');

        return  myRedirectRoute('designer.designs.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $type = 'success';
        $message ='لقد تم حذف التصميم بنجاح';
        $design = Design::find($id);
        if(!$design){
            $type="error";
            $message= "تصميم غير موجود";
        }else{
            if($design->status){
                $type="error";
                $message= "لا يمكن حذف تصميم تم الموافقة عليه";
            }else
            try {
                $design->delete();
            } catch (\Throwable $th) {
                $type = "error";
                $message = $th->getMessage();
            }
        }
        Session()->flash($type,$message);
        return back();
    }
}
