@extends('layouts.main')

@section('content')
<div class="content">
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium me-auto">
           تعديل مشرف
        </h2>
    </div>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 lg:col-span-6">

            <div class="intro-y box p-5">

                <form method="POST" action="{{ myRoute('dashboard.admins.update', $user->id) }}" enctype="multipart/form-data">

                    @csrf
                    @method('PUT')


                <div class="mt-3">
                    <label for="crud-form-2" class="form-label"> الصلاحية  </label>
                    <select data-placeholder="  الصلاحية  " class=" w-full" id="crud-form-2" name="role_id">

                        @foreach ($roles as $role)

                        <option value="{{ $role->id }}"
                            @if($user->roles->count() > 0)
                           @if ($role->id == $user->roles[0]->id)

                                selected

                            @endif
                            @endif
                            > {{ $role->name }} </option>

                        @endforeach

                    </select>
                </div>

                <div class="mt-3">
                    <label for="crud-form-1" class="form-label">الاسم </label>
                    <input id="crud-form-1" type="text" class="form-control w-full" name="name" required value="{{ $user->name }}">
                </div>


                <div class="mt-3">
                    <label for="crud-form-1" class="form-label">البريد  </label>
                    <input id="crud-form-1" type="email" class="form-control w-full" name="email" required value="{{ $user->email }}">
                </div>

                <div class="mt-3">
                    <label for="crud-form-1" class="form-label"> كلمه المرور </label>
                    <input id="crud-form-1" type="password" class="form-control w-full" name="password"    autocomplete="new-password">
                </div>


                <div class="mt-3">
                    <label for="crud-form-1" class="form-label">تأكيد كلمه المرور   </label>
                    <input id="crud-form-1" type="password" class="form-control w-full" name="password_confirmation" autocomplete="new-password"  >
                </div>


                <div class="mt-3">
                    <label for="crud-form-1" class="form-label"> الصورة الشخصية </label>
                    <input id="crud-form-1" type="file" class="form-control w-full" name="image">
                </div>

                <div class="text-right mt-5">
                    <a href="{{ myRoute('dashboard.admins.index') }}" type="button" class="btn btn-outline-secondary w-24 mr-1"> الغاء </a>
                    <button type="submit" class="btn btn-primary w-24"> حفظ </button>
                </div>

            </form>
            </div>

        </div>
    </div>
</div>

@endsection
