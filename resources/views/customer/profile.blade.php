@extends('layouts.site')

@push('css')

<link rel="stylesheet" href="{{ asset('front/pages/contactus.css')}}">

@endpush

@section('content')

<div class="page-container  " style="margin:0; margin-top:100px; ">

    @include('customer.sidebar')

    <div class="pages ">
        <div class="edit-profile dest active-page" data-page="edit-profile">

            <form action="{{ myRoute('customer.updateprofile') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="edit-img">
                    <div class="pro-img">
                        <div style="width: 100px; height: 100px; margin-left: 20px;position:relative">
                            <div id="profile-img-edit--close" style="display: none" onclick="clearImage('image')" class="img-clear" >X</div>
                        <img id="profile-img-edit" style="width: 100%; height:100%;object-fit:fill"
                            src="{{ displayImage(auth('site_users')->user()->image) }}" alt="">
                        </div>
                        <div>
                            <p style="text-align: right;
    font: normal normal normal 26px GE Flow;
    letter-spacing: 0px;
    color: #124956;
    opacity: 1;
    margin-bottom: 0px;">الصورة الشخصية</p>
                            <p style="text-align: right;
font: normal normal normal 18px GE Flow;
letter-spacing: 0px;
color: #0083A8;
opacity: 1;">إذا كنت ترغب في إضافة او تغيير الصورة الشخصية
                                يرجي اختيار صيغة</p>
                        </div>
                    </div>

                    <div class="import" >
                        <label for="image">إرفاق صورة</label>
                        <input style="height: 45px;
/* UI Properties */
background: #0083A8 0% 0% no-repeat padding-box;
border-radius: 24px;
opacity: 1;" onchange="chooseImage(event,'profile-img-edit','{{ displayImage(auth('site_users')->user()->image)}}')" type="file" id="image" name="image">
                    </div>
                </div>
                <div class="inputs">
                    <div class="input-name">
                        <label for="">اسم المستخدم</label>
                        <input type="text" name="name" required value="{{ auth('site_users')->user()->name }}" >

                    </div>
                    <div class="input-email">
                        <label for="">البريد الالكتروني</label>
                        <input type="email" name="email" required value="{{ auth('site_users')->user()->email }}" id="">
                    </div>
                    <div class="input-number">
                        <label for="">رقم الهاتف  </label>
                        <input type="number" name="phone" required value="{{ auth('site_users')->user()->phone }}" id="">

                    </div>
                    <div class="input-code">
                        <label for=""> كود (اذا كنت مسوق)  </label>
                        <input type="text" name="code"  value="{{ auth('site_users')->user()->code }}" id="">

                    </div>

                </div>
                <div class="form-btns">
                    <button class="change-password">
                        <span style="margin-left: 6px;"> تغيير الرقم السري
                        <svg xmlns="http://www.w3.org/2000/svg" height="16" width="14" viewBox="0 0 448 512" class="icon-svg"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="" d="M144 144v48H304V144c0-44.2-35.8-80-80-80s-80 35.8-80 80zM80 192V144C80 64.5 144.5 0 224 0s144 64.5 144 144v48h16c35.3 0 64 28.7 64 64V448c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V256c0-35.3 28.7-64 64-64H80z"/></svg>
                        </span>
                       
                    </button>
                    <button class="save" type="submit">حفظ التغييرات</button>
                </div>
            </form>
        </div>

    </div>
</div>

@endsection

@push('js')

<script src="{{ asset('front/pages/contactus.js')}}"></script>

@endpush
