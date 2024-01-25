<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tag;
use App\Http\Requests\Dashboard\TagsRequest;

class TagsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $tags = Tag::all();

        return view('admin.tag.index', compact('tags'));
    }
 
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TagsRequest $request)
    {
        $data = $request->validated();

        Tag::create($data);

        Session()->flash('success', 'تم اضافة القسم بنجاح');

        return  myRedirectRoute('dashboard.tag.index');
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
        $tag = Tag::find($id);

        return view('admin.tag.edit', compact('tag'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TagsRequest $request, $id)
    {
        $data = $request->validated();

        $tag = Tag::find($id);

        $tag->update($data);

        Session()->flash('success', 'تم تعديل القسم بنجاح');

        return  myRedirectRoute('dashboard.tag.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tag = Tag::find($id);

        $tag->delete();

        Session()->flash('success', 'تم حذف القسم بنجاح');

        return  myRedirectRoute('dashboard.tag.index');
    }
}
