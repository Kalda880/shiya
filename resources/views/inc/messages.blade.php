
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.2/js/toastr.min.js"></script>

    <script type="text/javascript">


        $('body').on('click', '.confirm', function (event) {

             var form =  $(this).closest("form");

             event.preventDefault();

             swal({

                 title: `هل انت متأكد انك تريد المسح`,
                 text: "عملية المسح لا يمكن استرجاعها",
                 icon: "warning",
                 buttons: true,
                 dangerMode: true,
                 buttons: ["الغاء", "مسح"],

             })

             .then((willDelete) => {

               if (willDelete) {

                 form.submit();

               }

             });

         });


         $('body').on('click', '.activate', function (event) {

            var form =  $(this).closest("form");

            var name = $(this).data("name");

            event.preventDefault();

            swal({

                title: `هل انت متأكد انك تريد تفعيل المستخدم`,
                text: "يمكن للمستخدم استخدام الملف الشخصي",
                icon: "success",
                buttons: true,
                dangerMode: false,
                buttons: ["الغاء", "تفعيل"],

            })

            .then((willDelete) => {

              if (willDelete) {

                form.submit();

              }

            });

        });





        $('document').on('click', '.accept', function (event) {

            var form =  $(this).closest("form");

            event.preventDefault();

            swal({

                title: ` {{ __('admin.accept_text') }} `,
                text: " {{ __('admin.accept_text2') }} ",
                icon: "success",
                buttons: true,
                dangerMode: false,
                buttons: ["{{ __('admin.cancel') }}", "{{ __('admin.accept') }}"],

            })

            .then((willDelete) => {

              if (willDelete) {

                form.submit();

              }

            });

        });

        $('document').on('click', '.refuse', function (event) {


            var form =  $(this).closest("form");

            event.preventDefault();

            swal({

                title: ` {{ __('admin.refuse_text') }} `,
                text: " {{ __('admin.refuse_text2') }} ",
                icon: "warning",
                buttons: true,
                dangerMode: true,
                buttons: ["{{ __('admin.cancel') }}", "{{ __('admin.refuse') }}"],

            })

            .then((willDelete) => {

              if (willDelete) {

                form.submit();

              }

            });

        });



    </script>

    @if ($errors->any())

    @foreach ($errors->all() as $error)

        <script>

          toastr.error("{{ $error }}");

        </script>


        @endforeach

    @endif


    @if(session()->has('message'))

    <script>

        toastr.success("{{session()->get('message')}}");

    </script>
    @endif


    @if(session()->has('success'))

    <script>

        toastr.success("{{session()->get('success')}}");

    </script>
    @endif
    @if(session()->has('error'))

    <script>

        toastr.error("{{session()->get('error')}}");

    </script>
    @endif
