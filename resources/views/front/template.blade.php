@extends('layouts.site')

@section('content')

@push('css')

<link rel="stylesheet" href="{{ asset('front/pages/template.css?rnd='.\Str::random(30))}}">

@endpush

<section class="home-cust">
<div class="why-title" style="margin-bottom:50px;     margin-top: 145px !important;"> 
			<h2 style="height: 58px;
/* UI Properties */
text-align: right;
margin: right 20px;
font: normal normal 300 45px GE SS Two Light;
letter-spacing: 0px;
color: #124955;
opacity: 1;">
			الأقسام
			</h2>	
            <h2 style="height: 45px;
/* UI Properties */
text-align: right;
margin: right 20px;
font: normal normal 300 33px GE SS Two Light;
letter-spacing: 0px;
color: #0283A8;
opacity: 1;">
            وقتك أثمن .. لا تنتظر المصمم	
        		</h2>
</div>
<div class="section-why" style="margin-top:20px;    margin-right: 20px;" >
	
<div class="w-img" > 
	<img src="./assets/images/invit-env.png" alt="">  
    <div class="w-button" ><button type="button" class="invitation-btn">صمم الآن</button></div>
	
</div>
<div class="w-img" > 
	<img src="./assets/images/cong.png" alt="">     

<div class="w-button" ><button type="button" class="invitation-btn">صمم الآن</button></div>
	
</div>
<div class="w-img" style="background:white;" > 

	<img src="./assets/images/gradua.png" alt="">                
    <div class="w-button" ><button type="button" class="invitation-btn">صمم الآن</button></div>
	</div>

</div>
</section>

<!-- 
   <div class="templates_description "   style="margin-top: 88px">
   <div id="head_address">
    <p>{{trans('messages.home')}}</p>

    <p style="margin: 4px"> <svg id="vuesax_outline_arrow-left" data-name="vuesax/outline/arrow-left" xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 19 19">
        <g id="arrow-left">
          <path id="Vector" d="M6.211,13.726a.587.587,0,0,1-.42-.174L.629,8.39a2.169,2.169,0,0,1,0-3.056L5.791.172a.593.593,0,1,1,.839.839L1.469,6.173a.975.975,0,0,0,0,1.378L6.63,12.712a.6.6,0,0,1,0,.839A.622.622,0,0,1,6.211,13.726Z" transform="translate(5.664 2.638)" fill="currentColor"/>
          <path id="Vector-2" data-name="Vector" d="M0,0H19V19H0Z" fill="#fff" opacity="0"/>
        </g>
      </svg> </p>
      <p style="color:#b5c4c3 ">{{trans('messages.departments')}}</p>
   </div>

    {{--<h3 style="margin-bottom: 10px">اكتشف العديد من  <span style="color: #3f85db">القوالب المميزة </span ></h3>--}}-->

<!--    <p style="color:rgba(121, 126, 138, 1)">هناك حقيقة مثبتة منذ زمن طويل وهي ان المحتوى المقروء لصفحة ما سيلهي القارئ عن-->
<!--<p style="color:rgba(121, 126, 138, 1)">التركيز على الشكل الخارجي للنص أو شكل توضيح الفقرات في الصفحة التي يقرأها</p>-->
<!-- </p>
</p>
</div>

<div class="templates_Whole_content">




    <div class="Templates_RightSide">


                <div class="sideNav">
  <ul>

    <li class="sideNav_list">
        <a href="{{ myRoute('template') }}">

            <span>
                <svg xmlns="http://www.w3.org/2000/svg" width="21.5" height="21.5" viewBox="1.25 1.25 21.5 21.5"><g data-name="grid-2"><path d="M15 22.75H9c-5.43 0-7.75-2.32-7.75-7.75V9c0-5.43 2.32-7.75 7.75-7.75h6c5.43 0 7.75 2.32 7.75 7.75v6c0 5.43-2.32 7.75-7.75 7.75Zm-6-20C4.39 2.75 2.75 4.39 2.75 9v6c0 4.61 1.64 6.25 6.25 6.25h6c4.61 0 6.25-1.64 6.25-6.25V9c0-4.61-1.64-6.25-6.25-6.25H9Z" fill="currentColor" fill-rule="evenodd" data-name="Vector"/><path d="M12 22.75c-.41 0-.75-.34-.75-.75V2c0-.41.34-.75.75-.75s.75.34.75.75v20c0 .41-.34.75-.75.75Z" fill="currentColor" fill-rule="evenodd" data-name="Vector"/><path d="M22 12.75H2c-.41 0-.75-.34-.75-.75s.34-.75.75-.75h20c.41 0 .75.34.75.75s-.34.75-.75.75Z" fill="currentColor" fill-rule="evenodd" data-name="Vector"/></g></svg>
            </span>
         جميع الأقسام

        </a>
      <p>
        <svg id="vuesax_outline_arrow-left" data-name="vuesax/outline/arrow-left" xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 19 19">
            <g id="arrow-left">
              <path id="Vector" d="M6.211,13.726a.587.587,0,0,1-.42-.174L.629,8.39a2.169,2.169,0,0,1,0-3.056L5.791.172a.593.593,0,1,1,.839.839L1.469,6.173a.975.975,0,0,0,0,1.378L6.63,12.712a.6.6,0,0,1,0,.839A.622.622,0,0,1,6.211,13.726Z" transform="translate(5.664 2.638)" fill="currentColor"/>
              <path id="Vector-2" data-name="Vector" d="M0,0H19V19H0Z" fill="#fff" opacity="0"/>
            </g>
          </svg>

      </p>
    </li>

    @foreach ($categories as $category)


    <li class="sideNav_list active">
        <a href="?category_id={{$category->id}}">
        <span>
            <svg xmlns="http://www.w3.org/2000/svg" width="21.517" height="20.017" viewBox="1.25 1.233 21.517 20.017">
                <g data-name="sms-star">
                    <path d="M17 21.25H7c-3.65 0-5.75-2.1-5.75-5.75v-7c0-3.65 2.1-5.75 5.75-5.75h5c.41 0 .75.34.75.75s-.34.75-.75.75H7c-2.86 0-4.25 1.39-4.25 4.25v7c0 2.86 1.39 4.25 4.25 4.25h10c2.86 0 4.25-1.39 4.25-4.25v-4c0-.41.34-.75.75-.75s.75.34.75.75v4c0 3.65-2.1 5.75-5.75 5.75Z" fill="currentColor" fill-rule="evenodd" data-name="Vector"/><path d="M12 12.87c-.84 0-1.69-.26-2.34-.79l-3.13-2.5a.748.748 0 0 1 .93-1.17l3.13 2.5c.76.61 2.05.61 2.81 0 .32-.26.79-.21 1.05.12.26.32.21.8-.12 1.05-.64.53-1.49.79-2.33.79ZM16.74 9.75c-.41 0-.69-.14-.87-.27-.33-.24-.84-.84-.54-2.16l.05-.21c.02-.08-.04-.27-.09-.33l-.35-.35c-.59-.6-.82-1.3-.62-1.93.2-.62.79-1.06 1.62-1.2l.38-.06c.07-.02.21-.12.25-.19l.28-.57c.39-.79.99-1.24 1.65-1.24.66 0 1.26.45 1.65 1.24l.28.57c.03.06.18.17.25.19l.38.06c.83.14 1.42.58 1.62 1.2.2.62-.02 1.32-.62 1.93l-.35.35c-.05.06-.11.25-.09.33l.05.21c.3 1.32-.21 1.92-.54 2.16-.33.24-1.05.53-2.2-.16l-.25-.15a.497.497 0 0 0-.34 0l-.26.15c-.54.32-.99.43-1.34.43Zm1.75-7c-.01.01-.15.11-.29.4l-.28.57c-.24.49-.81.91-1.34 1l-.38.06c-.32.05-.43.16-.44.18 0 .02.03.18.26.41l.35.35c.41.42.62 1.14.49 1.71l-.05.21c-.08.36-.05.55-.03.62.02-.02.2-.04.53-.24l.26-.15c.55-.33 1.34-.33 1.89 0l.25.15c.33.2.5.22.56.22-.01-.03.03-.21-.06-.6l-.05-.21c-.13-.58.08-1.29.49-1.71l.35-.35c.23-.23.26-.39.26-.42-.01-.02-.12-.12-.44-.18l-.38-.06c-.54-.09-1.1-.51-1.34-1l-.28-.56c-.16-.3-.29-.39-.33-.4Z" fill="currentColor" fill-rule="evenodd" data-name="Vector"/></g></svg>

        </span>

        {{ $category->title }}

        </a>
        <p>
            <svg id="vuesax_outline_arrow-left" data-name="vuesax/outline/arrow-left" xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 19 19">
                <g id="arrow-left">
                  <path id="Vector" d="M6.211,13.726a.587.587,0,0,1-.42-.174L.629,8.39a2.169,2.169,0,0,1,0-3.056L5.791.172a.593.593,0,1,1,.839.839L1.469,6.173a.975.975,0,0,0,0,1.378L6.63,12.712a.6.6,0,0,1,0,.839A.622.622,0,0,1,6.211,13.726Z" transform="translate(5.664 2.638)" fill="currentColor"/>
                  <path id="Vector-2" data-name="Vector" d="M0,0H19V19H0Z" fill="#fff" opacity="0"/>
                </g>
              </svg>

        </p>
    </li>

    @endforeach

  </ul>
</div>


    </div>

    <div class="Templates_LeftSide">-->


    <!--<div class="search">-->
    <!-- <input  class="search-txt" type="text" name="" placeholder="ابحث عن القوالب المجانية">-->

    <!-- <a class="search-btn" href="#" >-->
    <!--    <svg xmlns="http://www.w3.org/2000/svg"  width="18.517" height="15.517" viewBox="1.25 1.25 21.517 21.517"><g data-name="search-normal"><path d="M11.5 21.75c-5.65 0-10.25-4.6-10.25-10.25S5.85 1.25 11.5 1.25s10.25 4.6 10.25 10.25-4.6 10.25-10.25 10.25Zm0-19c-4.83 0-8.75 3.93-8.75 8.75s3.92 8.75 8.75 8.75 8.75-3.93 8.75-8.75-3.92-8.75-8.75-8.75ZM22 22.75c-.19 0-.38-.07-.53-.22l-2-2a.754.754 0 0 1 0-1.06c.29-.29.77-.29 1.06 0l2 2c.29.29.29.77 0 1.06-.15.15-.34.22-.53.22Z" fill="#fff" fill-rule="evenodd" data-name="Vector"/></g></svg>-->
    <!-- </a>-->

    <!--</div>-->
<!-- row1 -->
<!--<main class="grid">


    @foreach ($designs as $design)


    <img src="{{ designImage($design->images)  }}" class="showdetails" data-id="{{ $design->id }}">



    @endforeach


  </main>
<div class="CardsBtn">
    {{--  <a class="templates_card-Btn" id="previs_hover" href="#"><span>  <svg  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><title>3-Arrow Right</title><g id="_3-Arrow_Right" data-name="3-Arrow Right"><path d="M31.71,15.29l-10-10L20.29,6.71,28.59,15H0v2H28.59l-8.29,8.29,1.41,1.41,10-10A1,1,0,0,0,31.71,15.29Z"/></g></svg></span> <span id="Btn-previes">
      الصفحة السابقة
    </span></a>
    <a class="templates_card-Btn" id="NextBtn" href="#">
        <span id="Btn-Next">
            الصفحة التالية

          </span>

        <span>

            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 25 25"><title>Artboard-35</title><g id="Left-2" data-name="Left"><polygon points="24 12.001 2.914 12.001 8.208 6.706 7.501 5.999 1 12.501 7.5 19.001 8.207 18.294 2.914 13.001 24 13.001 24 12.001"  font-weight:"bold"/></g></svg>
        </span>

    </a>  --}}

    {{ $designs->links()}}

</div> -->
<!-- tags row1 -->

</div>
</div>
@if(false)
<section class="Search-Words">
    <div >
    <!--<div class="container">-->
        <div class="Search-Title">
            كلمات <span>البحث الأشهر</span>
        </div>
        <div class="Search-Tags">

            @foreach ($famouse_tags as $tag)

            <div class="Tag">

                <span>
                    <svg id="vuesax_outline_search-normal" data-name="vuesax/outline/search-normal"
                        xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
                        <g id="search-normal">
                            <path id="Vector"
                                d="M7.688,15.375a7.688,7.688,0,1,1,7.688-7.687A7.7,7.7,0,0,1,7.688,15.375Zm0-14.25A6.563,6.563,0,1,0,14.25,7.688,6.57,6.57,0,0,0,7.688,1.125Z"
                                transform="translate(0.938 0.938)" fill="" />
                            <path id="Vector-2" data-name="Vector"
                                d="M2.061,2.623a.556.556,0,0,1-.4-.165L.163.958a.562.562,0,0,1,.8-.8l1.5,1.5a.566.566,0,0,1,0,.8A.556.556,0,0,1,2.061,2.623Z"
                                transform="translate(14.439 14.439)" fill="" />
                            <path id="Vector-3" data-name="Vector" d="M0,0H18V18H0Z" fill="none" opacity="0" />
                        </g>
                    </svg>
                    {{ $tag->title }}
                </span>
            </div>

            @endforeach




            <div class="Tag">
                <span><svg id="vuesax_outline_search-normal" data-name="vuesax/outline/search-normal"
                        xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
                        <g id="search-normal">
                            <path id="Vector"
                                d="M7.688,15.375a7.688,7.688,0,1,1,7.688-7.687A7.7,7.7,0,0,1,7.688,15.375Zm0-14.25A6.563,6.563,0,1,0,14.25,7.688,6.57,6.57,0,0,0,7.688,1.125Z"
                                transform="translate(0.938 0.938)" fill="" />
                            <path id="Vector-2" data-name="Vector"
                                d="M2.061,2.623a.556.556,0,0,1-.4-.165L.163.958a.562.562,0,0,1,.8-.8l1.5,1.5a.566.566,0,0,1,0,.8A.556.556,0,0,1,2.061,2.623Z"
                                transform="translate(14.439 14.439)" fill="" />
                            <path id="Vector-3" data-name="Vector" d="M0,0H18V18H0Z" fill="none" opacity="0" />
                        </g>
                    </svg>
                    غلاف مجلة</span>
            </div>

            @foreach ($famouse_tags as $tag)

                <div class="Tag">
                    <span><svg id="vuesax_outline_search-normal" data-name="vuesax/outline/search-normal"
                            xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
                            <g id="search-normal">
                                <path id="Vector"
                                    d="M7.688,15.375a7.688,7.688,0,1,1,7.688-7.687A7.7,7.7,0,0,1,7.688,15.375Zm0-14.25A6.563,6.563,0,1,0,14.25,7.688,6.57,6.57,0,0,0,7.688,1.125Z"
                                    transform="translate(0.938 0.938)" fill="" />
                                <path id="Vector-2" data-name="Vector"
                                    d="M2.061,2.623a.556.556,0,0,1-.4-.165L.163.958a.562.562,0,0,1,.8-.8l1.5,1.5a.566.566,0,0,1,0,.8A.556.556,0,0,1,2.061,2.623Z"
                                    transform="translate(14.439 14.439)" fill="" />
                                <path id="Vector-3" data-name="Vector" d="M0,0H18V18H0Z" fill="none" opacity="0" />
                            </g>
                        </svg>
                        {{ $tag->title }}
                    </span>
                </div>

            @endforeach

        </div>
    </div>
</section>
@endif


@push('js')

<script src="{{ asset('front/pages/pricing.js')}}"></script>

{{--  <script src="https://secure.clickpay.com.sa/payment/js/paylib.js"></script>  --}}

<script type="text/javascript">

     /* var myform = document.getElementById('payform');

   paylib.inlineForm({
      'key': '{{env("CLICKPAY_CLIENT_KEY")}}',
      'form': myform,
      'autoSubmit': true,
      'callback': function(response) {
        document.getElementById('paymentErrors').innerHTML = '';

        if (response.error) {
          paylib.handleError(document.getElementById('paymentErrors'), response);
        }

      }
    });*/
    </script>
@if(session()->has('design_id'))
<script type="text/javascript">
            var id = "{{session()->get('design_id')}}";
            let url = "{{ myRoute('showdetails') }}";
            let token = "{{ csrf_token() }}"
            let code = null;
            @if(session()->exists('affiliate.'.session()->get('design_id')))
            code = '{{session()->get("affiliate.".session()->get("design_id"))[0]}}';
            @endif
            showdetailsProduct(url,id,token,code)
</script>
@endif
@endpush

@endsection
