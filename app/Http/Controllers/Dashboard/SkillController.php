<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Skills;
use App\Http\Requests\Dashboard\SkillRequest;

class SkillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $skills = Skills::all();

        return view('admin.skill.index', compact('skills'));
    }

 

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SkillRequest $request)
    {
        $data = $request->validated();

        Skills::create($data);

        Session()->flash('success', 'تم اضافة المهارة بنجاح');

        return  myRedirectRoute('dashboard.skill.index');
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
         $skill = Skills::findOrFail($id);

        return view('admin.skill.edit', compact('skill'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SkillRequest $request, $id)
    {
        $skill = Skills::findOrFail($id);

        $data = $request->validated();

        $skill->update($data);

        Session()->flash('success', 'تم تعديل المهارة بنجاح');

        return  myRedirectRoute('dashboard.skill.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $skill = Skills::findOrFail($id);

        $skill->delete();

        Session()->flash('success', 'تم حذف المهارة بنجاح');

        return  myRedirectRoute('dashboard.skill.index');
    }
}
