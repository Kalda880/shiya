
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




        <script src="{{ asset('main/js/app.js')}}"></script>
        <script src="{{ asset('main/js/script.js')}}"></script>
        <script src="{{ asset('front/js/script.js')}}"></script>


        @stack('js')

        @include('inc.messages')



    </body>
</html>
