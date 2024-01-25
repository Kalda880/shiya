@extends('layouts.main')

@section('content')



<div class="content">
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium me-auto">
           اضافة مسوق جديد
        </h2>
    </div>

    <form method="POST" action="{{ myRoute('dashboard.affiliate.store') }}" enctype="multipart/form-data">
        @csrf

    <div class="grid grid-cols-12 gap-6 mt-5">


        <div class="intro-y col-span-12 lg:col-span-6">

            <div class="intro-y box p-5">


                <div class="mt-3">
                    <label for="name" class="form-label">الاسم</label>
                    <input id="name" required type="text" name="name" value="{{ old('name') }}" class="form-control w-full" placeholder="الاسم">
                </div>

                <div class="mt-3">
                    <label for="phone" class="form-label">رقم الهاتف</label>
                    <input id="phone" required type="tel" name="phone" value="{{ old('phone') }}" class="form-control w-full" placeholder="رقم الهاتف">
                </div>

                <div class="mt-3">
                    <label for="email" class="form-label">البريد الالكتروني</label>
                    <input id="email" required type="email" name="email" value="{{ old('email') }}" class="form-control w-full" placeholder="البريد الالكتروني">
                </div>

                <div class="mt-3">
                    <label for="code" class="form-label">  كود المسوق </label>
                    <input id="code" required type="text" value="{{ old('code') }}" name="code" class="form-control w-full">
                </div>

                <div class="mt-3">
                    <label for="password" class="form-label"> كلمه السر </label>
                    <input id="password" required type="password" name="password" class="form-control w-full">
                </div>

                <div class="mt-3">
                    <label for="password_confirmation" class="form-label"> تأكيد كلمه السر</label>
                    <input id="password_confirmation" required type="password" name="password_confirmation" class="form-control w-full">
                </div>


                <div class="mt-3">
                    <label for="image" class="form-label">الصورة الشخصية</label>
                    <input id="image" type="file" required name="image"  class="form-control w-full">
                </div>




                <div class="text-right mt-5">
                    <a href="{{ myRoute('dashboard.affiliate.index') }}" type="button" class="btn btn-outline-secondary w-24 mr-1">الغاء</a>
                    <button type="submit" class="btn btn-primary w-24">حفظ</button>
                </div>

            </div>

        </div>



    </div>
</form>
</div>

@endsection
