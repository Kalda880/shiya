@extends('layouts.site')

@section('content')

@push('css')

<link rel="stylesheet" href="{{ asset('front/pages/pricing.css')}}">
    
@endpush
 
    <section class="Pricing-Banner">
        <img src="{{ asset('images/Group 57093.png')}}" alt="">
        <div class="text">
            <div class="text-contianer">
                <p> لا تفوت الفرصة! </p>
                <p>استفيد بعروضنا الخاصة واحصل علي خصم 50% من الاشتراك</p>
                <p>العرض ساري حتي 27 يناير القادم</p>
            </div>
        </div>
    </section>

  
    <secttion class="Pricing-cards">
        <div class="container">
            <div class="two-cards">
                <div class="first-card card">
                   <div class="card-container">
                    <span style="font-size: 20px;">1 شهر</span><br>
               <div style="display: flex; align-items: center; margin: 10px 0;">
                <span style="font-size: 40px; font-weight: bold;">9.99$</span>
                <span style="font-size: 16px; padding-bottom: 6px;">/شهريــــا</span>
               </div>
                    <span style="font-size: 13px; ">سوف تقوم بدفع 9.99 دولار شهريا</span><br>
                    <p style="font-size: 13px; margin-bottom: 24px;">قد يتم تطبيق ضرائب محلية او ضربية قيمة مضافة محلية</p>
                    <span class="btn-grad">
                        <a style="color: white;" href="">
                            اشترك الأن
                        </a>
                    </span>
                    </div>
                </div>
                <div class="second-card card">
                    <div class="card-container">
                        <span style="font-size: 20px;">12 شهر</span><br>
                   <div style="display: flex; align-items: center; margin: 10px 0;">
                    <span style="font-size: 40px; font-weight: bold;">4.99$</span>
                    <span style="font-size: 16px; padding-bottom: 6px;">/شهريــــا</span>
                   </div>
                        <span style="font-size: 13px; ">سوف تقوم بدفع 59.88 دولار سنوياً</span><br>
                        <p style="font-size: 13px; margin-bottom: 24px;">قد يتم تطبيق ضرائب محلية او ضربية قيمة مضافة محلية</p>
                        <span class="btn-grad">
                            <a style="color: white;" href="">
                                اشترك الأن
                            </a>
                        </span>
                        </div>
                        <div class="badge">
                            القيمة الأفضل
                        </div>
                </div>


            </div>
            <div class="third-card card">
                <div style="overflow-x: auto;">
                    <table>
                        <tr class="head">
                            <th></th>
                            <th>مجاني</th>
                            <th style="color: #e3a512;">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="19.857" height="16.753"
                                        viewBox="2.068 2.227 19.857 16.753">
                                        <path
                                            d="m20.35 5.52-4 2.86c-.53.38-1.29.15-1.52-.46l-1.89-5.04c-.32-.87-1.55-.87-1.87 0l-1.9 5.03c-.23.62-.98.85-1.51.46l-4-2.86c-.8-.56-1.86.23-1.53 1.16l4.16 11.65c.14.4.52.66.94.66h9.53c.42 0 .8-.27.94-.66l4.16-11.65c.34-.93-.72-1.72-1.51-1.15Zm-5.85 9.23h-5c-.41 0-.75-.34-.75-.75s.34-.75.75-.75h5c.41 0 .75.34.75.75s-.34.75-.75.75Z"
                                            fill="#e3a512" fill-rule="evenodd" data-name="Vector" />
                                    </svg>
                                </span>
                                مميز
                            </th>

                        </tr>
                        <tr>
                            <td>قوالب مجانية مميزة</td>
                            <td><span><svg id="tick-circle_bold" data-name="tick-circle/bold"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                        <g id="vuesax_bold_tick-circle" data-name="vuesax/bold/tick-circle">
                                            <g id="tick-circle">
                                                <path id="Vector"
                                                    d="M10,0A10,10,0,1,0,20,10,10.016,10.016,0,0,0,10,0Zm4.78,7.7L9.11,13.37a.748.748,0,0,1-1.06,0L5.22,10.54A.75.75,0,1,1,6.28,9.48l2.3,2.3,5.14-5.14A.75.75,0,0,1,14.78,7.7Z"
                                                    transform="translate(2 2)" fill="#22c694" />
                                                <path id="Vector-2" data-name="Vector" d="M0,0H24V24H0Z"
                                                    transform="translate(24 24) rotate(180)" fill="none" opacity="0" />
                                            </g>
                                        </g>
                                    </svg>
                                </span></td>
                            <td><span><svg id="tick-circle_bold" data-name="tick-circle/bold"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                        <g id="vuesax_bold_tick-circle" data-name="vuesax/bold/tick-circle">
                                            <g id="tick-circle">
                                                <path id="Vector"
                                                    d="M10,0A10,10,0,1,0,20,10,10.016,10.016,0,0,0,10,0Zm4.78,7.7L9.11,13.37a.748.748,0,0,1-1.06,0L5.22,10.54A.75.75,0,1,1,6.28,9.48l2.3,2.3,5.14-5.14A.75.75,0,0,1,14.78,7.7Z"
                                                    transform="translate(2 2)" fill="#22c694" />
                                                <path id="Vector-2" data-name="Vector" d="M0,0H24V24H0Z"
                                                    transform="translate(24 24) rotate(180)" fill="none" opacity="0" />
                                            </g>
                                        </g>
                                    </svg>
                                </span></td>

                        </tr>
                        <tr>
                            <td>احصل علي الالاف القوالب الحصرية المميزة لدينا</td>
                            <td><span><svg id="close-circle_bold" data-name="close-circle/bold"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                        <g id="vuesax_bold_close-circle" data-name="vuesax/bold/close-circle">
                                            <g id="close-circle">
                                                <path id="Vector"
                                                    d="M10,0A10,10,0,1,0,20,10,10.016,10.016,0,0,0,10,0Zm3.36,12.3a.754.754,0,0,1,0,1.06.748.748,0,0,1-1.06,0L10,11.06l-2.3,2.3a.748.748,0,0,1-1.06,0,.754.754,0,0,1,0-1.06L8.94,10,6.64,7.7A.75.75,0,0,1,7.7,6.64L10,8.94l2.3-2.3A.75.75,0,0,1,13.36,7.7L11.06,10Z"
                                                    transform="translate(2 2)" fill="#c7ccd8" />
                                                <path id="Vector-2" data-name="Vector" d="M0,0H24V24H0Z"
                                                    transform="translate(24 24) rotate(180)" fill="none" opacity="0" />
                                            </g>
                                        </g>
                                    </svg>
                                </span></td>
                            <td><span><svg id="tick-circle_bold" data-name="tick-circle/bold"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                        <g id="vuesax_bold_tick-circle" data-name="vuesax/bold/tick-circle">
                                            <g id="tick-circle">
                                                <path id="Vector"
                                                    d="M10,0A10,10,0,1,0,20,10,10.016,10.016,0,0,0,10,0Zm4.78,7.7L9.11,13.37a.748.748,0,0,1-1.06,0L5.22,10.54A.75.75,0,1,1,6.28,9.48l2.3,2.3,5.14-5.14A.75.75,0,0,1,14.78,7.7Z"
                                                    transform="translate(2 2)" fill="#22c694" />
                                                <path id="Vector-2" data-name="Vector" d="M0,0H24V24H0Z"
                                                    transform="translate(24 24) rotate(180)" fill="none" opacity="0" />
                                            </g>
                                        </g>
                                    </svg>
                                </span></td>

                        </tr>
                        <tr>
                            <td>احصل علي الالاف الخلفيات والصور المميزة</td>
                            <td><span><svg id="close-circle_bold" data-name="close-circle/bold"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                        <g id="vuesax_bold_close-circle" data-name="vuesax/bold/close-circle">
                                            <g id="close-circle">
                                                <path id="Vector"
                                                    d="M10,0A10,10,0,1,0,20,10,10.016,10.016,0,0,0,10,0Zm3.36,12.3a.754.754,0,0,1,0,1.06.748.748,0,0,1-1.06,0L10,11.06l-2.3,2.3a.748.748,0,0,1-1.06,0,.754.754,0,0,1,0-1.06L8.94,10,6.64,7.7A.75.75,0,0,1,7.7,6.64L10,8.94l2.3-2.3A.75.75,0,0,1,13.36,7.7L11.06,10Z"
                                                    transform="translate(2 2)" fill="#c7ccd8" />
                                                <path id="Vector-2" data-name="Vector" d="M0,0H24V24H0Z"
                                                    transform="translate(24 24) rotate(180)" fill="none" opacity="0" />
                                            </g>
                                        </g>
                                    </svg>
                                </span></td>
                            <td><span><svg id="tick-circle_bold" data-name="tick-circle/bold"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                        <g id="vuesax_bold_tick-circle" data-name="vuesax/bold/tick-circle">
                                            <g id="tick-circle">
                                                <path id="Vector"
                                                    d="M10,0A10,10,0,1,0,20,10,10.016,10.016,0,0,0,10,0Zm4.78,7.7L9.11,13.37a.748.748,0,0,1-1.06,0L5.22,10.54A.75.75,0,1,1,6.28,9.48l2.3,2.3,5.14-5.14A.75.75,0,0,1,14.78,7.7Z"
                                                    transform="translate(2 2)" fill="#22c694" />
                                                <path id="Vector-2" data-name="Vector" d="M0,0H24V24H0Z"
                                                    transform="translate(24 24) rotate(180)" fill="none" opacity="0" />
                                            </g>
                                        </g>
                                    </svg>
                                </span></td>
                        </tr>
                        <tr>
                            <td>اكثر من 3000 شكل مميز</td>
                            <td><span><svg id="close-circle_bold" data-name="close-circle/bold"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                        <g id="vuesax_bold_close-circle" data-name="vuesax/bold/close-circle">
                                            <g id="close-circle">
                                                <path id="Vector"
                                                    d="M10,0A10,10,0,1,0,20,10,10.016,10.016,0,0,0,10,0Zm3.36,12.3a.754.754,0,0,1,0,1.06.748.748,0,0,1-1.06,0L10,11.06l-2.3,2.3a.748.748,0,0,1-1.06,0,.754.754,0,0,1,0-1.06L8.94,10,6.64,7.7A.75.75,0,0,1,7.7,6.64L10,8.94l2.3-2.3A.75.75,0,0,1,13.36,7.7L11.06,10Z"
                                                    transform="translate(2 2)" fill="#c7ccd8" />
                                                <path id="Vector-2" data-name="Vector" d="M0,0H24V24H0Z"
                                                    transform="translate(24 24) rotate(180)" fill="none" opacity="0" />
                                            </g>
                                        </g>
                                    </svg>
                                </span></td>
                            <td><span><svg id="tick-circle_bold" data-name="tick-circle/bold"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                        <g id="vuesax_bold_tick-circle" data-name="vuesax/bold/tick-circle">
                                            <g id="tick-circle">
                                                <path id="Vector"
                                                    d="M10,0A10,10,0,1,0,20,10,10.016,10.016,0,0,0,10,0Zm4.78,7.7L9.11,13.37a.748.748,0,0,1-1.06,0L5.22,10.54A.75.75,0,1,1,6.28,9.48l2.3,2.3,5.14-5.14A.75.75,0,0,1,14.78,7.7Z"
                                                    transform="translate(2 2)" fill="#22c694" />
                                                <path id="Vector-2" data-name="Vector" d="M0,0H24V24H0Z"
                                                    transform="translate(24 24) rotate(180)" fill="none" opacity="0" />
                                            </g>
                                        </g>
                                    </svg>
                                </span></td>
                        </tr>
                        <tr>
                            <td>تحميل لا محدود من التصميمات</td>
                            <td><span><svg id="close-circle_bold" data-name="close-circle/bold"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                        <g id="vuesax_bold_close-circle" data-name="vuesax/bold/close-circle">
                                            <g id="close-circle">
                                                <path id="Vector"
                                                    d="M10,0A10,10,0,1,0,20,10,10.016,10.016,0,0,0,10,0Zm3.36,12.3a.754.754,0,0,1,0,1.06.748.748,0,0,1-1.06,0L10,11.06l-2.3,2.3a.748.748,0,0,1-1.06,0,.754.754,0,0,1,0-1.06L8.94,10,6.64,7.7A.75.75,0,0,1,7.7,6.64L10,8.94l2.3-2.3A.75.75,0,0,1,13.36,7.7L11.06,10Z"
                                                    transform="translate(2 2)" fill="#c7ccd8" />
                                                <path id="Vector-2" data-name="Vector" d="M0,0H24V24H0Z"
                                                    transform="translate(24 24) rotate(180)" fill="none" opacity="0" />
                                            </g>
                                        </g>
                                    </svg>
                                </span></td>
                            <td><span><svg id="tick-circle_bold" data-name="tick-circle/bold"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                        <g id="vuesax_bold_tick-circle" data-name="vuesax/bold/tick-circle">
                                            <g id="tick-circle">
                                                <path id="Vector"
                                                    d="M10,0A10,10,0,1,0,20,10,10.016,10.016,0,0,0,10,0Zm4.78,7.7L9.11,13.37a.748.748,0,0,1-1.06,0L5.22,10.54A.75.75,0,1,1,6.28,9.48l2.3,2.3,5.14-5.14A.75.75,0,0,1,14.78,7.7Z"
                                                    transform="translate(2 2)" fill="#22c694" />
                                                <path id="Vector-2" data-name="Vector" d="M0,0H24V24H0Z"
                                                    transform="translate(24 24) rotate(180)" fill="none" opacity="0" />
                                            </g>
                                        </g>
                                    </svg>
                                </span></td>
                        </tr>
                        <tr>
                            <td>امكانية مشاركة الملفات اللامحدوده</td>
                            <td><span><svg id="close-circle_bold" data-name="close-circle/bold"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                        <g id="vuesax_bold_close-circle" data-name="vuesax/bold/close-circle">
                                            <g id="close-circle">
                                                <path id="Vector"
                                                    d="M10,0A10,10,0,1,0,20,10,10.016,10.016,0,0,0,10,0Zm3.36,12.3a.754.754,0,0,1,0,1.06.748.748,0,0,1-1.06,0L10,11.06l-2.3,2.3a.748.748,0,0,1-1.06,0,.754.754,0,0,1,0-1.06L8.94,10,6.64,7.7A.75.75,0,0,1,7.7,6.64L10,8.94l2.3-2.3A.75.75,0,0,1,13.36,7.7L11.06,10Z"
                                                    transform="translate(2 2)" fill="#c7ccd8" />
                                                <path id="Vector-2" data-name="Vector" d="M0,0H24V24H0Z"
                                                    transform="translate(24 24) rotate(180)" fill="none" opacity="0" />
                                            </g>
                                        </g>
                                    </svg>
                                </span></td>
                            <td><span><svg id="tick-circle_bold" data-name="tick-circle/bold"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                        <g id="vuesax_bold_tick-circle" data-name="vuesax/bold/tick-circle">
                                            <g id="tick-circle">
                                                <path id="Vector"
                                                    d="M10,0A10,10,0,1,0,20,10,10.016,10.016,0,0,0,10,0Zm4.78,7.7L9.11,13.37a.748.748,0,0,1-1.06,0L5.22,10.54A.75.75,0,1,1,6.28,9.48l2.3,2.3,5.14-5.14A.75.75,0,0,1,14.78,7.7Z"
                                                    transform="translate(2 2)" fill="#22c694" />
                                                <path id="Vector-2" data-name="Vector" d="M0,0H24V24H0Z"
                                                    transform="translate(24 24) rotate(180)" fill="none" opacity="0" />
                                            </g>
                                        </g>
                                    </svg>
                                </span></td>
                        </tr>
                        <tr>
                            <td>حفظ مشاريع لا محدودة</td>
                            <td><span><svg id="close-circle_bold" data-name="close-circle/bold"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                        <g id="vuesax_bold_close-circle" data-name="vuesax/bold/close-circle">
                                            <g id="close-circle">
                                                <path id="Vector"
                                                    d="M10,0A10,10,0,1,0,20,10,10.016,10.016,0,0,0,10,0Zm3.36,12.3a.754.754,0,0,1,0,1.06.748.748,0,0,1-1.06,0L10,11.06l-2.3,2.3a.748.748,0,0,1-1.06,0,.754.754,0,0,1,0-1.06L8.94,10,6.64,7.7A.75.75,0,0,1,7.7,6.64L10,8.94l2.3-2.3A.75.75,0,0,1,13.36,7.7L11.06,10Z"
                                                    transform="translate(2 2)" fill="#c7ccd8" />
                                                <path id="Vector-2" data-name="Vector" d="M0,0H24V24H0Z"
                                                    transform="translate(24 24) rotate(180)" fill="none" opacity="0" />
                                            </g>
                                        </g>
                                    </svg>
                                </span></td>
                            <td><span><svg id="tick-circle_bold" data-name="tick-circle/bold"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                        <g id="vuesax_bold_tick-circle" data-name="vuesax/bold/tick-circle">
                                            <g id="tick-circle">
                                                <path id="Vector"
                                                    d="M10,0A10,10,0,1,0,20,10,10.016,10.016,0,0,0,10,0Zm4.78,7.7L9.11,13.37a.748.748,0,0,1-1.06,0L5.22,10.54A.75.75,0,1,1,6.28,9.48l2.3,2.3,5.14-5.14A.75.75,0,0,1,14.78,7.7Z"
                                                    transform="translate(2 2)" fill="#22c694" />
                                                <path id="Vector-2" data-name="Vector" d="M0,0H24V24H0Z"
                                                    transform="translate(24 24) rotate(180)" fill="none" opacity="0" />
                                            </g>
                                        </g>
                                    </svg>
                                </span></td>
                        </tr>
                        <tr>
                            <td>التصفح بدون اعلانات</td>
                            <td><span><svg id="close-circle_bold" data-name="close-circle/bold"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                        <g id="vuesax_bold_close-circle" data-name="vuesax/bold/close-circle">
                                            <g id="close-circle">
                                                <path id="Vector"
                                                    d="M10,0A10,10,0,1,0,20,10,10.016,10.016,0,0,0,10,0Zm3.36,12.3a.754.754,0,0,1,0,1.06.748.748,0,0,1-1.06,0L10,11.06l-2.3,2.3a.748.748,0,0,1-1.06,0,.754.754,0,0,1,0-1.06L8.94,10,6.64,7.7A.75.75,0,0,1,7.7,6.64L10,8.94l2.3-2.3A.75.75,0,0,1,13.36,7.7L11.06,10Z"
                                                    transform="translate(2 2)" fill="#c7ccd8" />
                                                <path id="Vector-2" data-name="Vector" d="M0,0H24V24H0Z"
                                                    transform="translate(24 24) rotate(180)" fill="none" opacity="0" />
                                            </g>
                                        </g>
                                    </svg>
                                </span></td>
                            <td><span><svg id="tick-circle_bold" data-name="tick-circle/bold"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                        <g id="vuesax_bold_tick-circle" data-name="vuesax/bold/tick-circle">
                                            <g id="tick-circle">
                                                <path id="Vector"
                                                    d="M10,0A10,10,0,1,0,20,10,10.016,10.016,0,0,0,10,0Zm4.78,7.7L9.11,13.37a.748.748,0,0,1-1.06,0L5.22,10.54A.75.75,0,1,1,6.28,9.48l2.3,2.3,5.14-5.14A.75.75,0,0,1,14.78,7.7Z"
                                                    transform="translate(2 2)" fill="#22c694" />
                                                <path id="Vector-2" data-name="Vector" d="M0,0H24V24H0Z"
                                                    transform="translate(24 24) rotate(180)" fill="none" opacity="0" />
                                            </g>
                                        </g>
                                    </svg>
                                </span></td>
                        </tr>
                        <tr>
                            <td>التحميل بجودة فائقة</td>
                            <td><span><svg id="close-circle_bold" data-name="close-circle/bold"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                        <g id="vuesax_bold_close-circle" data-name="vuesax/bold/close-circle">
                                            <g id="close-circle">
                                                <path id="Vector"
                                                    d="M10,0A10,10,0,1,0,20,10,10.016,10.016,0,0,0,10,0Zm3.36,12.3a.754.754,0,0,1,0,1.06.748.748,0,0,1-1.06,0L10,11.06l-2.3,2.3a.748.748,0,0,1-1.06,0,.754.754,0,0,1,0-1.06L8.94,10,6.64,7.7A.75.75,0,0,1,7.7,6.64L10,8.94l2.3-2.3A.75.75,0,0,1,13.36,7.7L11.06,10Z"
                                                    transform="translate(2 2)" fill="#c7ccd8" />
                                                <path id="Vector-2" data-name="Vector" d="M0,0H24V24H0Z"
                                                    transform="translate(24 24) rotate(180)" fill="none" opacity="0" />
                                            </g>
                                        </g>
                                    </svg>
                                </span></td>
                            <td><span><svg id="tick-circle_bold" data-name="tick-circle/bold"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                        <g id="vuesax_bold_tick-circle" data-name="vuesax/bold/tick-circle">
                                            <g id="tick-circle">
                                                <path id="Vector"
                                                    d="M10,0A10,10,0,1,0,20,10,10.016,10.016,0,0,0,10,0Zm4.78,7.7L9.11,13.37a.748.748,0,0,1-1.06,0L5.22,10.54A.75.75,0,1,1,6.28,9.48l2.3,2.3,5.14-5.14A.75.75,0,0,1,14.78,7.7Z"
                                                    transform="translate(2 2)" fill="#22c694" />
                                                <path id="Vector-2" data-name="Vector" d="M0,0H24V24H0Z"
                                                    transform="translate(24 24) rotate(180)" fill="none" opacity="0" />
                                            </g>
                                        </g>
                                    </svg>
                                </span></td>
                        </tr>
                        <tr>
                            <td>التحميل بأكثر من صيغة للملفات والصور</td>
                            <td><span><svg id="close-circle_bold" data-name="close-circle/bold"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                        <g id="vuesax_bold_close-circle" data-name="vuesax/bold/close-circle">
                                            <g id="close-circle">
                                                <path id="Vector"
                                                    d="M10,0A10,10,0,1,0,20,10,10.016,10.016,0,0,0,10,0Zm3.36,12.3a.754.754,0,0,1,0,1.06.748.748,0,0,1-1.06,0L10,11.06l-2.3,2.3a.748.748,0,0,1-1.06,0,.754.754,0,0,1,0-1.06L8.94,10,6.64,7.7A.75.75,0,0,1,7.7,6.64L10,8.94l2.3-2.3A.75.75,0,0,1,13.36,7.7L11.06,10Z"
                                                    transform="translate(2 2)" fill="#c7ccd8" />
                                                <path id="Vector-2" data-name="Vector" d="M0,0H24V24H0Z"
                                                    transform="translate(24 24) rotate(180)" fill="none" opacity="0" />
                                            </g>
                                        </g>
                                    </svg>
                                </span></td>
                            <td><span><svg id="tick-circle_bold" data-name="tick-circle/bold"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                        <g id="vuesax_bold_tick-circle" data-name="vuesax/bold/tick-circle">
                                            <g id="tick-circle">
                                                <path id="Vector"
                                                    d="M10,0A10,10,0,1,0,20,10,10.016,10.016,0,0,0,10,0Zm4.78,7.7L9.11,13.37a.748.748,0,0,1-1.06,0L5.22,10.54A.75.75,0,1,1,6.28,9.48l2.3,2.3,5.14-5.14A.75.75,0,0,1,14.78,7.7Z"
                                                    transform="translate(2 2)" fill="#22c694" />
                                                <path id="Vector-2" data-name="Vector" d="M0,0H24V24H0Z"
                                                    transform="translate(24 24) rotate(180)" fill="none" opacity="0" />
                                            </g>
                                        </g>
                                    </svg>
                                </span></td>
                        </tr>
                        <tr>
                            <td>التحميل بصيغة تدعم الشفافية</td>
                            <td><span><svg id="close-circle_bold" data-name="close-circle/bold"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                        <g id="vuesax_bold_close-circle" data-name="vuesax/bold/close-circle">
                                            <g id="close-circle">
                                                <path id="Vector"
                                                    d="M10,0A10,10,0,1,0,20,10,10.016,10.016,0,0,0,10,0Zm3.36,12.3a.754.754,0,0,1,0,1.06.748.748,0,0,1-1.06,0L10,11.06l-2.3,2.3a.748.748,0,0,1-1.06,0,.754.754,0,0,1,0-1.06L8.94,10,6.64,7.7A.75.75,0,0,1,7.7,6.64L10,8.94l2.3-2.3A.75.75,0,0,1,13.36,7.7L11.06,10Z"
                                                    transform="translate(2 2)" fill="#c7ccd8" />
                                                <path id="Vector-2" data-name="Vector" d="M0,0H24V24H0Z"
                                                    transform="translate(24 24) rotate(180)" fill="none" opacity="0" />
                                            </g>
                                        </g>
                                    </svg>
                                </span></td>
                            <td><span><svg id="tick-circle_bold" data-name="tick-circle/bold"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                        <g id="vuesax_bold_tick-circle" data-name="vuesax/bold/tick-circle">
                                            <g id="tick-circle">
                                                <path id="Vector"
                                                    d="M10,0A10,10,0,1,0,20,10,10.016,10.016,0,0,0,10,0Zm4.78,7.7L9.11,13.37a.748.748,0,0,1-1.06,0L5.22,10.54A.75.75,0,1,1,6.28,9.48l2.3,2.3,5.14-5.14A.75.75,0,0,1,14.78,7.7Z"
                                                    transform="translate(2 2)" fill="#22c694" />
                                                <path id="Vector-2" data-name="Vector" d="M0,0H24V24H0Z"
                                                    transform="translate(24 24) rotate(180)" fill="none" opacity="0" />
                                            </g>
                                        </g>
                                    </svg>
                                </span></td>
                        </tr>
                        <tr>
                            <td>دعم فني متواصل ومميز للمشتركين فقط</td>
                            <td><span><svg id="close-circle_bold" data-name="close-circle/bold"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                        <g id="vuesax_bold_close-circle" data-name="vuesax/bold/close-circle">
                                            <g id="close-circle">
                                                <path id="Vector"
                                                    d="M10,0A10,10,0,1,0,20,10,10.016,10.016,0,0,0,10,0Zm3.36,12.3a.754.754,0,0,1,0,1.06.748.748,0,0,1-1.06,0L10,11.06l-2.3,2.3a.748.748,0,0,1-1.06,0,.754.754,0,0,1,0-1.06L8.94,10,6.64,7.7A.75.75,0,0,1,7.7,6.64L10,8.94l2.3-2.3A.75.75,0,0,1,13.36,7.7L11.06,10Z"
                                                    transform="translate(2 2)" fill="#c7ccd8" />
                                                <path id="Vector-2" data-name="Vector" d="M0,0H24V24H0Z"
                                                    transform="translate(24 24) rotate(180)" fill="none" opacity="0" />
                                            </g>
                                        </g>
                                    </svg>
                                </span></td>
                            <td><span><svg id="tick-circle_bold" data-name="tick-circle/bold"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                        <g id="vuesax_bold_tick-circle" data-name="vuesax/bold/tick-circle">
                                            <g id="tick-circle">
                                                <path id="Vector"
                                                    d="M10,0A10,10,0,1,0,20,10,10.016,10.016,0,0,0,10,0Zm4.78,7.7L9.11,13.37a.748.748,0,0,1-1.06,0L5.22,10.54A.75.75,0,1,1,6.28,9.48l2.3,2.3,5.14-5.14A.75.75,0,0,1,14.78,7.7Z"
                                                    transform="translate(2 2)" fill="#22c694" />
                                                <path id="Vector-2" data-name="Vector" d="M0,0H24V24H0Z"
                                                    transform="translate(24 24) rotate(180)" fill="none" opacity="0" />
                                            </g>
                                        </g>
                                    </svg>
                                </span></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </secttion>
    <!--questiont-->
    <section class="questions-section">
        <div class="container">
<div class="section-title">
    الأسئلة الشائعة المكررة
</div>
<div class="question-container">
    <div class="question">
        <div class="content
        " >
            <p>ما فائدة الاشتراك في الباقات المميزة ؟</p>
            <span>
                <svg id="vuesax_linear_add" data-name="vuesax/linear/add" xmlns="http://www.w3.org/2000/svg" width="30.52" height="30.52" viewBox="0 0 30.52 30.52">
                    <g id="add">
                      <path id="Vector" d="M15.464,1.158H.2A.954.954,0,0,1,.2-.75h15.26a.954.954,0,0,1,0,1.908Z" transform="translate(7.426 15.056)" fill="#292d32"/>
                      <path id="Vector-2" data-name="Vector" d="M.2,16.418a.954.954,0,0,1-.954-.954V.2A.954.954,0,0,1,1.158.2v15.26A.954.954,0,0,1,.2,16.418Z" transform="translate(15.056 7.426)" fill="#292d32"/>
                      <path id="Vector-3" data-name="Vector" d="M0,0H30.52V30.52H0Z" fill="none" opacity="0"/>
                    </g>
                  </svg>
                  
            </span>
        </div>
        <div class="question-answer">

<div class="answer-inner">
    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Optio similique quos, libero explicabo rerum quasi. Quidem suscipit culpa itaque accusamus! Obcaecati provident veniam dolore hic officia dolores magnam eligendi ea?
       
</div>        </div>
    </div>
    <div class="question">
        <div class="content
        " >
            <p>ما فائدة الاشتراك في الباقات المميزة ؟</p>
            <span>
                <svg id="vuesax_linear_add" data-name="vuesax/linear/add" xmlns="http://www.w3.org/2000/svg" width="30.52" height="30.52" viewBox="0 0 30.52 30.52">
                    <g id="add">
                      <path id="Vector" d="M15.464,1.158H.2A.954.954,0,0,1,.2-.75h15.26a.954.954,0,0,1,0,1.908Z" transform="translate(7.426 15.056)" fill="#292d32"/>
                      <path id="Vector-2" data-name="Vector" d="M.2,16.418a.954.954,0,0,1-.954-.954V.2A.954.954,0,0,1,1.158.2v15.26A.954.954,0,0,1,.2,16.418Z" transform="translate(15.056 7.426)" fill="#292d32"/>
                      <path id="Vector-3" data-name="Vector" d="M0,0H30.52V30.52H0Z" fill="none" opacity="0"/>
                    </g>
                  </svg>
                  
            </span>
        </div>
        <div class="question-answer">

<div class="answer-inner">
    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Optio similique quos, libero explicabo rerum quasi. Quidem suscipit culpa itaque accusamus! Obcaecati provident veniam dolore hic officia dolores magnam eligendi ea?
       
</div>        </div>
    </div>
    <div class="question">
        <div class="content
        " >
            <p>ما فائدة الاشتراك في الباقات المميزة ؟</p>
            <span>
                <svg id="vuesax_linear_add" data-name="vuesax/linear/add" xmlns="http://www.w3.org/2000/svg" width="30.52" height="30.52" viewBox="0 0 30.52 30.52">
                    <g id="add">
                      <path id="Vector" d="M15.464,1.158H.2A.954.954,0,0,1,.2-.75h15.26a.954.954,0,0,1,0,1.908Z" transform="translate(7.426 15.056)" fill="#292d32"/>
                      <path id="Vector-2" data-name="Vector" d="M.2,16.418a.954.954,0,0,1-.954-.954V.2A.954.954,0,0,1,1.158.2v15.26A.954.954,0,0,1,.2,16.418Z" transform="translate(15.056 7.426)" fill="#292d32"/>
                      <path id="Vector-3" data-name="Vector" d="M0,0H30.52V30.52H0Z" fill="none" opacity="0"/>
                    </g>
                  </svg>
                  
            </span>
        </div>
        <div class="question-answer">

<div class="answer-inner">
    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Optio similique quos, libero explicabo rerum quasi. Quidem suscipit culpa itaque accusamus! Obcaecati provident veniam dolore hic officia dolores magnam eligendi ea?
       
</div>        </div>
    </div>
</div>

        </div>
    </section>

 @push('js')
     
 <script src="{{ asset('front/pages/pricing.js')}}"></script>

 @endpush
</body>

</html>
@endsection