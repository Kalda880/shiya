@extends('layouts.main')

@section('content')

<div class="content">
    <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
        <h2 class="flex items-center text-lg font-medium me-auto">
           الملف الشخصي
        </h2>

    </div>
    <div class="grid grid-cols-12 gap-5 mt-5">

        <div class="col-span-12 2xl:col-span-9">
            <div class="box intro-y p-3">
                <ul class="nav nav-pills flex-col md:flex-row" role="tablist">
                    <li id="active-transactions-tab" class="nav-item flex-1" role="presentation">
                        <button class="nav-link w-full flex items-center justify-center !rounded-lg py-3 active" data-tw-toggle="pill" data-tw-target="#active-transactions" type="button" role="tab" aria-controls="active-transactions" aria-selected="true" >
                            <i data-lucide="user" class="w-4 h-4 ml-2"></i> معلومات عامة </button>
                    </li>
                    <li id="password-tab" class="nav-item flex-1" role="presentation">
                        <button class="nav-link w-full flex items-center justify-center !rounded-lg py-3" data-tw-toggle="pill" data-tw-target="#password" type="button" role="tab" aria-selected="false" >
                             <i data-lucide="inbox" class="w-4 h-4 ml-2"></i>  كلمه المرور </button>
                    </li>
                </ul>
            </div>
            <div class="tab-content">

                <div id="active-transactions" class="tab-pane active" role="tabpanel" aria-labelledby="active-transactions-tab">


                        <form method="POST" action="{{ myRoute('dashboard.profile-update') }}" enctype="multipart/form-data">
                            @csrf


                            <div class="intro-y box p-5 mt-5">

                                <div>

                                    <label for="name" class="form-label"> الاسم</label>

                                    <input id="name" type="text" class="form-control w-full" name="name" value="{{ $user->name }}">

                                </div>


                                <div class="mt-3">
                                    <label for="email" class="form-label">البريد الالكتروني </label>
                                    <input id="email" type="email" class="form-control w-full" name="email" value="{{ $user->email }}">
                                </div>

                                <div class="mt-3">
                                    <label for="image" class="form-label">الصورة الشخصية</label>
                                    <input id="image" type="file" required name="image"  class="form-control w-full">
                                </div>


                                <div class="text-right mt-5">

                                    <button type="submit" class="btn btn-primary w-24">حفظ</button>
                                </div>
                            </div>

                        </form>

                </div>


                <div id="password" class="tab-pane" role="tabpanel" aria-labelledby="password-tab">



                        <form method="POST" action="{{ myRoute('dashboard.passwordupdate') }}">
                            @csrf


                            <div class="intro-y box p-5 mt-5">

                                <div>

                                    <label for="name" class="form-label"> كلمه السر الحالية </label>

                                    <input id="name" type="password" class="form-control w-full" name="old_password" autocomplete="new-password">

                                </div>


                                <div class="mt-3">
                                    <label for="passwords" class="form-label">      كلمه المرور </label>
                                    <input id="passwords" type="password" class="form-control w-full" name="password" autocomplete="new-password">
                                </div>

                                <div class="mt-3">
                                    <label for="password_confirmation" class="form-label"> تأكيد كلمه السر </label>
                                    <input id="password_confirmation" type="password" class="form-control w-full" name="password_confirmation" autocomplete="new-password">
                                </div>


                                <div class="text-right mt-5">

                                    <button type="submit" class="btn btn-primary w-24">حفظ</button>
                                </div>
                            </div>

                        </form>

                </div>


            </div>
        </div>

    </div>
</div>

@endsection
