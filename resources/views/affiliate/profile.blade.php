@extends('layouts.affiliate')

@section('content')

<div class="content">
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium ml-auto">
            تعديل البيانات الشخصية
        </h2>
    </div>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 lg:col-span-12">
            <!-- BEGIN: Form Layout -->
            <div class="intro-y box p-5 ">
                <div class="px-5 sm:px-20 pt-10 border-t border-slate-200/60 dark:border-darkmode-400">

                    <form method="POST" action="{{ myRoute('affiliate.updateprofile') }}" enctype="multipart/form-data">
                        @csrf

                    <div class="py-5 grid grid-cols-12 gap-4 gap-y-5">
                        <div class="intro-y col-span-12 sm:col-span-6">
                            <label for="input-wizard-1" class="form-label">الاسم</label>
                            <input id="input-wizard-1" name="name" value=" {{ Auth::user()->name }}" required type="text" class="form-control" placeholder="اسم المستخدم">
                        </div>

                        <div class="intro-y col-span-12 sm:col-span-6">
                            <label for="input-wizard-3" class="form-label">البريد الالكتروني</label>
                            <input id="input-wizard-3" type="email" class="form-control" name="email" value=" {{ Auth::user()->email }}" required placeholder="البريد الالكتروني">
                        </div>
                        <div class="intro-y col-span-12 sm:col-span-6">
                            <label for="input-wizard-3" class="form-label"> رقم الهاتف</label>
                            <input id="input-wizard-3" type="text" class="form-control" name="phone" value=" {{ Auth::user()->phone }}" required placeholder=" رقم الهاتف  ">
                        </div>
                        <div class="intro-y col-span-12 sm:col-span-6">
                            <label for="input-wizard-3" class="form-label">  الكود</label>
                            <input id="input-wizard-3" type="text" class="form-control" name="code" value=" {{ Auth::user()->code }}" required>
                        </div>

                        <div class="intro-y col-span-12 sm:col-span-6">
                            <label for="input-wizard-3" class="form-label"> كلمه المرور</label>
                            <input id="input-wizard-3" type="password" class="form-control" name="password"  >
                        </div>

                        <div class="intro-y col-span-12 sm:col-span-6">
                            <label for="input-wizard-3" class="form-label">  تأكيد كلمه المرور</label>
                            <input id="input-wizard-3" type="password" class="form-control" name="password_confirmation" >
                        </div>


                        <div class="intro-y col-span-12 sm:col-span-6">
                            <div class="intro-y  col-span-12 sm:col-span-12">
                                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                                    <h2 class="font-medium text-base ml-auto">
                                        صورة الملف الشخصي
                                    </h2>
                                </div>
                                <div id="file-type-validation" class="p-5">
                                    <div class="preview">

                                            <div class="fallback">
                                                <input  type="file" name="image" />
                                            </div>
                                    </div>



                                </div>
                            </div>
                        </div>


                        <div class="intro-y col-span-12 flex items-center justify-center sm:justify-center mt-5">
                            <button class="btn btn-primary w-24 ml-2">حفظ</button>
                        </div>
                    </div>

                </form>
                </div>
            </div>

        </div>
    </div>
</div>


@endsection


@push('js')

<script src="{{ asset('main/js/ckeditor-classic.js')}}"></script>

@endpush
