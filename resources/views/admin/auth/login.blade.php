<!DOCTYPE html>

<html class="theme-2" lang="en" class="light">

    <head>
        <meta charset="utf-8">
        <link href="dist/images/logo.svg" rel="shortcut icon">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="author" content="">
        <title>{{__('messages.Dashboard')}}</title>
        <link rel="stylesheet" href="{{ asset('main/css/app.css')}}" />
        <link rel="stylesheet" href="{{ asset('main/css/custom.css')}}" />
    </head>
    <!-- END: Head -->
    <body class="login" dir="rtl">
        <div class="container">
            <div class="w-full min-h-screen p-5 md:p-20 flex md:items-center justify-center">
                <div class="w-96 intro-y">
                    <img class="mx-auto"  alt="شية" height="128" width="128" src="{{url('/assets/logo/transparent-128.svg')}}">
                    <div class="text-white dark:text-slate-300 text-2xl font-medium text-center mt-14">{{__("messages.Login to Your Account")}}</div>
                    <div class="box px-5 py-8 mt-10 max-w-[450px] relative before:content-[''] before:z-[-1] before:w-[95%] before:h-full before:bg-slate-200 before:border before:border-slate-200 before:-mt-5 before:absolute before:rounded-lg before:mx-auto before:inset-x-0 before:dark:bg-darkmode-600/70 before:dark:border-darkmode-500/60">

                        <form method="POST" action="{{ myRoute('dashboard.login') }}">
                            @csrf

                        <input type="text" class="form-control py-3 px-4 block" name="email" value="{{ old('email') }}" placeholder="{{__('messages.email')}}">

                        @error('email')
                        <span class="invalid-feedback mt-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror

                        <input type="password" class="form-control py-3 px-4 block mt-4" name="password" placeholder="{{__('messages.password')}}">

                        @error('password')
                        <span class="invalid-feedback mt-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                      @enderror

                        <div class="text-slate-500 flex text-xs sm:text-sm mt-4">
                            <div class="flex items-center ms-auto">
                                <input class="form-check-input border me-2" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="cursor-pointer select-none" for="remember">
                                    {{ __('messages.Remember Me') }}
                                </label>


                            </div>


                        </div>
                        <div class="mt-5 xl:mt-8 text-center xl:text-right">
                            <button class="btn btn-primary w-full xl:ml-3">{{__("messages.login")}}</button>
                         </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


        <!-- BEGIN: JS Assets-->
        <script src="{{ asset('main/js/app.js')}}"></script>
        <!-- END: JS Assets-->
    </body>
</html>
