@extends('layouts.site')

@section('content')

@push('css')
<link rel="stylesheet" href="{{ asset('front/pages/profile.css?rnd='.\Str::random(30))}}">
@endpush

    <div class="page-contianer">
        <div class="container">
            <div class="first" style="margin-top :100px;">
                        <h2 >هل لديك استفسار او طلب ما ؟</h2>
                        <p >إذا كان لديك بعض الاستفسارات او الطلبات التي تخص
                            مواضع مثل الاشتراكات والدفع والمشاكل التي تواجهك داخل الموقع</p>
                    </div>
            
            <div class="content">
                <div class="content-text">
                    
                    <div class="withBadge">
                        <h2>الدعم عبر واتساب</h2>
                        <p>يمكنك الحصول علي الدعم عبر واتساب, نضمن الرد خلال نصف ساعة في أوقات العمل المُحددة</p>
                      <div class="Badge" style="display: flex !important;
    
    justify-content: flex-end !important;">
                        <a href="https://wa.me/+966553466607" target="_blank" class="badge">
                            
                            التواصل عبر واتساب
                       <span style="margin-right:5px;"><svg xmlns="http://www.w3.org/2000/svg" height="24" width="24" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#ffffff" d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7 .9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z"/></svg>
                            </span>
                        </a>
                      </div>
                    </div>
                    <div class="withBadge">
                        <h2>الدعم عبر التذاكر والإيميل</h2>
                        <p>يمكنك الحصول علي دعم مميز من خلال تذاكر الدعم الفني وأيضًا يمكنك إرسال إيميل مخصص لنا</p>
                        <div style="display: flex !important;
    
    justify-content: flex-end !important;"><button class="badge" >
                            
                            {{trans('messages.email')}}
                        <span style="margin-right:5px;"><svg xmlns="http://www.w3.org/2000/svg" height="24" width="24" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#ffffff" d="M255.4 48.2c.2-.1 .4-.2 .6-.2s.4 .1 .6 .2L460.6 194c2.1 1.5 3.4 3.9 3.4 6.5v13.6L291.5 355.7c-20.7 17-50.4 17-71.1 0L48 214.1V200.5c0-2.6 1.2-5 3.4-6.5L255.4 48.2zM48 276.2L190 392.8c38.4 31.5 93.7 31.5 132 0L464 276.2V456c0 4.4-3.6 8-8 8H56c-4.4 0-8-3.6-8-8V276.2zM256 0c-10.2 0-20.2 3.2-28.5 9.1L23.5 154.9C8.7 165.4 0 182.4 0 200.5V456c0 30.9 25.1 56 56 56H456c30.9 0 56-25.1 56-56V200.5c0-18.1-8.7-35.1-23.4-45.6L284.5 9.1C276.2 3.2 266.2 0 256 0z"/></svg>
                            </span>    
                        </button></div>
                    </div>
                </div><div class="image"><img src="./assets/images/backside.png" alt=""></div>
                
            </div>
            <div class="content-form-contact">

                    <form action="{{ myRoute('sendcontact') }}" method="post">

                        @csrf

                        <div class="inputs-contact">
                            <div class="input-name">
                                <label for="">
                                    اسم العميل او الشركة</label>
                                <input type="text" name="name" required>

                            </div>
                            <div class="input-email">
                                <label for="">البريد الالكتروني</label>
                                <input type="email" name="email" required id="">
                            </div>
                            <div class="input-number">
                                <label for="">رقم الهاتف </label>
                                <input type="number" name="phone" required  id="">

                            </div>
                            <div class="input-name">
                                <label for=""> الموضوع</label>
                                <input type="text" name="subject" required>

                            </div>
                            <div style="width: 100%;" class="input-text">
                                <label for="">الرسالة</label>

                                <textarea name="message" required id=""></textarea>

                            </div>
                            <p style="width: 100%;" class="form-btn">
                                <button type="submit">ارسال</button>
                            </p>

                    </form>
                </div>
        </div>
    </div>
    </div>



@endsection
