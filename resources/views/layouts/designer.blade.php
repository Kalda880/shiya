
    @include('inc.head')

    <body class="main">
        <div class="flex">

            <!-- BEGIN: Content -->
            <div class="wrapper">

                @include('designer.inc.topbar')

                @yield('content')
            </div>
            <!-- END: Content -->

            @include('designer.inc.sidebar')

        </div>
        @include('designer.inc.switch-role-dialog',['id_modal'=>'change-role-modal'])




        <script src="{{ asset('main/js/app.js')}}"></script>
        <script src="{{ asset('main/js/script.js?rnd='.\Str::random(30))}}"></script>
        <script src="{{ asset('front/js/script.js?rnd='.\Str::random(30))}}"></script>


        @stack('js')

        @include('inc.messages')



    </body>
</html>
