@extends('layouts.main')

@section('content')

<div class="content">
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium me-auto">
           تعديل المهارة
        </h2>
    </div>

    <form method="POST" action="{{ myRoute('dashboard.skill.update', $skill->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')

    <div class="grid grid-cols-12 gap-6 mt-5">



        <div class="intro-y col-span-12 lg:col-span-6">

            <div class="intro-y box p-5">


                <div class="mt-3">
                    <label for="crud-form-1" class="form-label">عنوان المهارة</label>
                    <input id="crud-form-1" type="text" required name="title" value="{{ $skill->title }}" class="form-control w-full" placeholder="عنوان المهارة">
                </div>

                <div class="text-right mt-5">
                    <a href="{{ myRoute('dashboard.skill.index') }}" type="button" class="btn btn-outline-secondary w-24 mr-1">الغاء</a>
                    <button type="submit" class="btn btn-primary w-24">حفظ</button>
                </div>

            </div>

        </div>


    </div>
</form>
</div>

@endsection
