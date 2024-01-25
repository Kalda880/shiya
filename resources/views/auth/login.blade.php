
  @include('inc.head')

  <body class="login">
      <div class="container">
          <div class="w-full min-h-screen p-5 md:px-20 flex md:items-center justify-center">
              <div class="w-96 intro-y">
                  <img class="mx-auto"  alt="شية" height="128" width="128" src="{{url('/assets/logo/transparent-128.svg')}}">
                  <div class="text-white dark:text-slate-300 text-2xl font-medium text-center mt-14"> بتسجيل الدخول الي حسابك !</div>

                  <form method="POST" action="{{ myRoute('login') }}">
                    @csrf

                  <div class="box px-5 py-8 mt-10 max-w-[450px] relative before:content-[''] before:z-[-1] before:w-[95%] before:h-full before:bg-slate-200 before:border before:border-slate-200 before:-mt-5 before:absolute before:rounded-lg before:mx-auto before:inset-x-0 before:dark:bg-darkmode-600/70 before:dark:border-darkmode-500/60">

                    <input type="email" name="email" required  class="form-control py-3 px-4 block" placeholder="البريد الالكتروني">

                    <input type="password" name="password" required class="form-control py-3 px-4 block mt-4" placeholder="كلمة المرور">

                      <div class="text-slate-500 flex text-xs sm:text-sm mt-4">

                        <div class="flex items-center ml-auto">
                              <input type="checkbox" class="form-check-input border ml-2" id="remember-me">
                              <label class="cursor-pointer select-none" for="remember-me">تذكرني</label>
                          </div>


                          @if (Route::has('password.request'))

                          <a href="{{ myRoute('password.request') }}">
                            هل نسيت كلمة المرور
                          </a>

                         @endif

                      </div>

                      <div class="mt-5 xl:mt-8 text-center xl:text-left">

                          <button type="submit" class="btn btn-primary w-full xl:mr-3">تسجيل الدخول</button>

                      </div>
                      <!-- google login -->
                      <hr style="margin-top: 25px"/>
                      @include('common.google-login')
                  </div>
                  </form>
                 
              </div>
          </div>
      </div>



      <script src="{{ asset('main/js/app.js')}}"></script>

      @include('inc.messages')

  </body>
</html>
