<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="google-site-verification" content="0hGfMQ1wUzM_16vR_Ab6lh40lE2yLDUQAVaQGDn2b5I" />
    <title>Shya</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />

    <link rel="stylesheet" href="{{ asset('front/bootstrap/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('front/index.css?rnd='.\Str::random(30))}}">
    @stack('css')
    
    <style 
    
    .side-nav-offcanva{
    margin-top: 35px;
  
  padding-left: 16px;
  
  
  
      list-style: none;
      color: black;
  }
  
  .side-nav-offcanva li {
      padding: 10px 16px;
      margin-bottom: 25px;
      transition: 0.4s;
      }
      .side-nav-offcanva li:hover{
          background-color: rgba(192, 215, 214, 0.2);
          border-radius: 8px;
      }
      .side-nav-offcanva li div{
          cursor: pointer;
          display: flex;
         
          align-items: center;
          color: black;
      }
      .side-nav-offcanva li div div span{
          margin-left: 10px;
      }
      .side-nav-offcanva li div div{
         display: flex;align-items: center;
      }
      .side-nav-offcanva li div {
          display: flex;
          justify-content: space-between;
      }
    
    ></style>
    <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-721TWLQ486"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-721TWLQ486');
</script>

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-T49VQX9');</script>
<!-- End Google Tag Manager -->





<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T49VQX9"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->


<!-- Snap Pixel Code -->
<script type='text/javascript'>
(function(e,t,n){if(e.snaptr)return;var a=e.snaptr=function()
{a.handleRequest?a.handleRequest.apply(a,arguments):a.queue.push(arguments)};
a.queue=[];var s='script';r=t.createElement(s);r.async=!0;
r.src=n;var u=t.getElementsByTagName(s)[0];
u.parentNode.insertBefore(r,u);})(window,document,
'https://sc-static.net/scevent.min.js');

snaptr('init', '77c8fdfa-b0b3-487b-b98f-6aea781cfbc5', {
'user_email': '__INSERT_USER_EMAIL__'
});

snaptr('track', 'PAGE_VIEW');

</script>
<!-- End Snap Pixel Code -->


</head>

<body dir="rtl">

    @include('front.inc.header')


    @yield('content')

    @include('layouts.footer')


    <!-- modals -->

    <!---join us-->
    @include('layouts.join-us')
    
    <!--create new pass-->

    @include('layouts.new-password')
    <!--forget-pass-->
    @include('layouts.forget-password')
    
    <!--استجاع كلمة لار-->
    @include('layouts.recovery-password')

    <!-- تغيير الدور-->
    @include("layouts.change-role",['id_modal'=>"change-role-modal"])

    <!--login-in-->
    @include('layouts.login-modal')
    <!--create new account-->
    
    @include('layouts.create-account')
    @include('layouts.create-account-designer')

    <!--DESGIN  MODAL-->

    <div class="modal fade" id="design-modal" aria-hidden="true" aria-labelledby="design-modal" tabindex="-1">
        <div id="designdata"></div>
    </div>

    @include('layouts.drawer')



    <script src="{{ asset('front/js/jquery.js')}}"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/ScrollTrigger.min.js"></script>
    <script src="{{ asset('front/bootstrap/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('front/js/home.js')}}"></script>
    <script src="{{ asset('front/js/script.js?rnd='.\Str::random(30))}}"></script>

    @stack('js')

    @include('inc.messages')

    <script>
    


        $(".showdetails").on('click', function () {
            let id = $(this).data('id');
            let url = "{{ myRoute('showdetails') }}";
            let token = "{{ csrf_token() }}"
            let code = '{{request()->query("code")}}';
            showdetailsProduct(url,id,token,code)
        });
    </script>
    
<div class="btn-whatsapp"  target="_blank">
    <div class="tooltip-msg">
        <div class="tooltip-msg--close" onclick="this.parentElement.style.display='none'">x</div>
        مرحبا بك، يمكنك التواصل معنا </div>
<a href="https://wa.me/+966553466607" target="_blank">
    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/6b/WhatsApp.svg/512px-WhatsApp.svg.png?20220228223904" >
</a>
</div>
</body>

</html>
