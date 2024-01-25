@extends('layouts.main')

@section('content')

<div class="content">
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium me-auto">
           اضافة مشرف جديد
        </h2>
    </div>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 lg:col-span-6">

            <div class="intro-y box p-5">

                <form method="POST" action="{{ myRoute('dashboard.admins.store') }}" enctype="multipart/form-data">

                    @csrf


                <div class="mt-3">
                    <label for="crud-form-1" class="form-label">الصلاحية  </label>
                    <div>
                        <div class="mt-2">
                            <select data-placeholder="  الصلاحية" class="tom-select w-full" name="role_id">

                                @foreach ($roles as $branch)

                                <option value="{{ $branch->id }}">{{ $branch->name }}</option>

                                @endforeach
                            </select>
                         </div>
                    </div>
                </div>

                <div class="mt-3">
                    <label for="crud-form-1" class="form-label"> الاسم  </label>
                    <input id="crud-form-1" type="text" class="form-control w-full" name="name" required value="{{ old('name') }}">
                </div>


                <div class="mt-3">
                    <label for="crud-form-1" class="form-label"> {{trans('messages.email')}} </label>
                    <input id="crud-form-1" type="email" class="form-control w-full" name="email" required value="{{ old('email') }}">
                </div>

                <div class="mt-3">
                    <label for="crud-form-1" class="form-label">   كلمه المرور   </label>
                    <input id="crud-form-1" type="password" class="form-control w-full" name="password" required value="{{ old('password') }}">
                </div>


                <div class="mt-3">
                    <label for="crud-form-1" class="form-label">  تأكيد كلمه المرور </label>
                    <input id="crud-form-1" type="password" class="form-control w-full" name="password_confirmation" required>
                </div>


                <div class="mt-3">
                    <label for="crud-form-1" class="form-label"> الصورة </label>
                    <input id="crud-form-1" type="file" class="form-control w-full" name="image">
                </div>


                <div class="text-right mt-5">
                    <a href="{{ myRoute('dashboard.admins.index') }}" type="button" class="btn btn-outline-secondary w-24 mr-1">الغاء</a>
                    <button type="submit" class="btn btn-primary w-24">حفظ</button>
                </div>

            </form>
            </div>

        </div>

    </div>
</div>

@endsection
@push('js')

<script>



    $("#job").on('change', function () {

        var job = $(this).val();

        if (job == 4) {

            $("#technical").show();

        } else {

            $("#technical").hide();

        }

    });

    $("#technical").hide();

</script>

@endpush
