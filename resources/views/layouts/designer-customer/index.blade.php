
@include('layouts.designer-customer.inc.head')

<body class="main">
    <div class="">

        <!-- BEGIN: Content -->
        @include('layouts.designer-customer.inc.topbar')
        
<div class="flex">
    @include('layouts.designer-customer.inc.sidebar')

            <div class="wrapper">
            @yield('content')
        </div>
        <!-- END: Content -->
       
    </div>
    </div>
    @include('layouts.footer')
    @include('designer.inc.switch-role-dialog',['id_modal'=>'change-role-modal'])
   



    <script src="{{ asset('main/js/app.js')}}"></script>
    <script src="{{ asset('main/js/script.js?rnd='.\Str::random(30))}}"></script>
    <script src="{{ asset('front/js/script.js?rnd='.\Str::random(30))}}"></script>


    @stack('js')

    @include('inc.messages')



</body>
</html>
