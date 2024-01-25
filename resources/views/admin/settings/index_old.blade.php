@extends('layouts.main')

@section('content')

<div class="content">
    <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
        <h2 class="text-lg font-medium me-auto">
           اعدادات عامة
        </h2>

    </div>


<form method="POST" action="{{ myRoute('dashboard.settings.update', $setting->id) }}">
    @csrf
    @method('PUT')

    <div class="box intro-y p-3 mt-3">

     <ul class="nav nav-pills flex-col md:flex-row" role="tablist">

        <li id="general" class="nav-item flex-1" role="presentation">
            <button class="nav-link w-full py-2 active" data-tw-toggle="pill" data-tw-target="#general" type="button"
            role="tab" aria-controls="general" aria-selected="true" > اعدادات عامة </button>
         </li>


          <li id="social" class="nav-item flex-1" role="presentation">
             <button class="nav-link w-full py-2" data-tw-toggle="pill" data-tw-target="#social"
              type="button" role="tab" aria-controls="social" aria-selected="false" >سوشيال ميديا </button>
         </li>

   </ul>
    </div>

    <div class="grid grid-cols-1 mt-5 intro-y box p-5">

        <div class="tab-content mt-5">

            <div id="general" class="tab-pane leading-relaxed active" role="tabpanel" aria-labelledby="general">

                <div class="mt-3">
                    <label for="title" class="form-label">عنوان الموقع</label>
                    <input id="title" required type="text" name="title" value="{{ $setting->title }}" class="form-control w-full">
                </div>

                <div class="mt-3">
                    <label for="phone" class="form-label">@lang('messages.phone-number')</label>
                    <input id="phone" type="number" name="phone" value="{{ $setting->phone }}" class="form-control w-full">
                </div>

                <div class="mt-3">
                    <label for="email" class="form-label">البريد الالكتروني</label>
                    <input id="email" type="email" name="email" value="{{ $setting->email }}" class="form-control w-full">
                </div>

                <div class="mt-3">
                    <label for="logo" class="form-label">الشعار</label>
                    <input id="logo" type="file" name="logo"   class="form-control w-full">
                </div>

                <div class="mt-3">
                    <label for="favicon" class="form-label">الشعار المصغر</label>
                    <input id="favicon" type="file" name="favicon"  class="form-control w-full">
                </div>

                <div class="mt-3">
                    <label for="footer_logo" class="form-label"> شعار التذيل  </label>
                    <input id="footer_logo" type="file" name="footer_logo"  class="form-control w-full">
                </div>

                <div class="mt-3">
                    <label for="footer_text" class="form-label">نص التذييل</label>
                    <textarea id="footer_text"   name="footer_text"   class="form-control w-full">{{ $setting->footer_text }}</textarea>
                </div>


             </div>




                    <div id="social" class="tab-pane leading-relaxed py-10" role="tabpanel" aria-labelledby="social">


                            <div class="mt-3">
                                <label for="facebook" class="form-label">فيسبوك</label>
                                <input id="facebook" type="text" name="facebook" value="{{ $setting->facebook }}" class="form-control w-full">
                            </div>

                            <div class="mt-3">
                                <label for="twitter" class="form-label">تويتر</label>
                                <input id="twitter" type="text" name="twitter" value="{{ $setting->twitter }}" class="form-control w-full">
                            </div>

                            <div class="mt-3">
                                <label for="instagram" class="form-label">انستجرام</label>
                                <input id="instagram" type="text" name="instagram" value="{{ $setting->instagram }}" class="form-control w-full">
                            </div>


                            <div class="mt-3">
                                <label for="snapchat" class="form-label">سناب شات</label>
                                <input id="snapchat" type="text" name="snapchat" value="{{ $setting->snapchat }}" class="form-control w-full">
                            </div>

                            <div class="mt-3">
                                <label for="linkedin" class="form-label">لينكدان</label>
                                <input id="linkedin" type="text" name="linkedin" value="{{ $setting->linkedin }}" class="form-control w-full">
                            </div>

                    </div>


                <div class="text-right mt-5">
                     <button type="submit" class="btn btn-primary w-24">حفظ</button>
                </div>

          </div>

    </div>

</div>

@endsection

