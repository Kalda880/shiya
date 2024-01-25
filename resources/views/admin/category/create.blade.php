@extends('layouts.main')

@section('content')

<div class="content">
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium me-auto">
          اضافة قسم جديد
        </h2>
    </div>

    <form method="POST" action="{{ myRoute('dashboard.category.store') }}" enctype="multipart/form-data">
        @csrf

    <div class="grid grid-cols-12 gap-6 mt-5">


        <div class="intro-y col-span-12 lg:col-span-6">

            <div class="intro-y box p-5">


    
                <div class="mt-3">
                    <label for="crud-form-1" class="form-label">عنوان القسم</label>
                    <input id="crud-form-1" type="text" name="title" value="{{ old('title') }}" class="form-control w-full" placeholder="عنوان القسم">
                </div>

 

                <div class="mt-3">
                    <label for="image" class="form-label">صورة القسم</label>
                    <input id="image" type="file" name="image" required  class="form-control w-full"  >
                </div>
                <div class="mt-3">
                    <label for="crud-form-cat-order" class="form-label">ترتيب القسم</label>
                    <input id="crud-form-cat-order" type="text" name="cat_order" value="{{ old('cat_order') }}" class="form-control w-full" placeholder="ترتيب القسم">
                </div>
                <div class="mt-3">
                    <label for="image" class="form-label">حالة القسم</label>
                    <div class="form-check form-switch w-full sm:w-auto sm:ms-auto mt-3 sm:mt-0">
                        <input @if (old('is_active',1)) checked @endif id="is_active"  name="is_active"  class="form-check-input me-0 ms-3" type="checkbox">
                        </div>
                </div>
                <div class="text-right mt-5">
                    <a href="{{ myRoute('dashboard.category.index') }}" type="button" class="btn btn-outline-secondary w-24 mr-1">الغاء</a>
                    <button type="submit" class="btn btn-primary w-24">حفظ</button>
                </div>
            </div>

        </div>


    </div>
</form>
</div>

@endsection
