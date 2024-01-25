
    @include('inc.head')

    <body class="main">
        <div class="flex">

            <!-- BEGIN: Content -->
            <div class="wrapper">

                @include('affiliate.inc.topbar')

                @yield('content')
            </div>
            <!-- END: Content -->

            @include('affiliate.inc.sidebar')

        </div>




        <script src="{{ asset('main/js/app.js')}}"></script>

        @stack('js')

        @include('inc.messages')



    </body>
</html>
