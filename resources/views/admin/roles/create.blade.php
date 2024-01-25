@extends('layouts.main')

@section('content')

<div class="content">
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium me-auto">
          اضافة صلاحية جديدة
        </h2>
    </div>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12">

            <div class="intro-y box p-5">

                <form method="POST" action="{{ myRoute('dashboard.roles.store') }}" enctype="multipart/form-data">

                    @csrf


                <div class="mt-3">
                    <label for="crud-form-1" class="form-label">  عنوان الصلاحية  </label>
                    <input id="crud-form-1" type="text" class="form-control w-full" name="name" required value="{{ old('name') }}">
                </div>

                <div class="overflow-x-auto mt-5">
                    <table class="table">

                        @foreach (rolesModel() as $permission)

                        <thead class=" mt-2">
                        <tr class="text-center">
                            <th colspan="2" style="color: #2c3c5a;font-size: 18px;font-weight: bold;">   @lang('admin.' . $permission)    </th>
                        </tr>
                        <tr class="text-center table-dark" style="background: #2c3c5a;color: #fff;">
                            <th>   @lang('admin.permission')  </th>
                            <th>   @lang('admin.status')  </th>

                        </tr>
                        </thead>

                        <tbody class="text-center">

                            @foreach (rolesMap() as $map)

                        <tr>
                            <td>  @lang('admin.' .  $map) @lang('admin.' .  $permission)    </td>
                            <td>
                                <div class="form-switch mt-2">
                                    <input type="checkbox" name="permissions[]" value="{{ $permission . '-' .  $map }}"  class="form-check-input" data-color="#039cfd"/>

                                </div>
                                 </td>

                        </tr>

                        @endforeach

                        </tbody>
                        @endforeach


                    </table>


                </div>




                <div class="text-right mt-5">
                    <a href="{{ myRoute('dashboard.roles.index') }}" type="button" class="btn btn-outline-secondary w-24 mr-1">الغاء</a>
                    <button type="submit" class="btn btn-primary w-24">حفظ</button>
                </div>

            </form>
            </div>
            <!-- END: Form Layout -->
        </div>

    </div>
</div>

@endsection

