@extends('layouts.main')

@section('content')


<div class="content">
    <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
        <h2 class="text-lg font-medium me-auto">
           الصلاحيات
        </h2>
        <div class="w-full sm:w-auto flex flex-wrap gap-y-3 mt-4 sm:mt-0">
            <a href="{{ myRoute('dashboard.roles.create') }}" class="btn btn-primary shadow-md mr-2">
                 <i class="w-4 h-4 mr-2" data-lucide="plus"></i> اضافة صلاحية جديدة
            </a>
         </div>
    </div>
    <div class="grid grid-cols-12 gap-6 mt-5">

        <div class="intro-y col-span-12 overflow-auto lg:overflow-visible">
            <table class="table table-report -mt-2">
                <tr class="text-center">
                    <th>#</th>
                    <th> الصلاحية</th>
                    <th> المشرفين</th>
                    <th> تاريخ الاضافة</th>
                    <th> التحكم</th>
                </tr>
                </thead>


                <tbody>

                    @foreach ($roles as $index =>  $role)

                    <tr class="text-center">
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $role->name }}</td>
                        <td>0</td>
                        <td>{{ $role->created_at }}</td>
                        <td class="table-report__action w-56">
                            <div class="flex justify-center items-center">

                                    <a class="flex items-center mr-3 edits" href="{{ myRoute('dashboard.roles.edit', $role->id) }}">
                                        <i data-lucide="check-square" class="w-4 h-4 mr-1 ml-1"></i>  تعديل </a>
                                <a class="flex items-center text-danger" href="javascript:;" data-tw-toggle="modal" data-tw-target="#delete-confirmation-modal">
                                    <i data-lucide="trash-2" class="w-4 h-4 mr-1"></i>  مسح </a>

                            </div>
                        </td>
                    </tr>

                  @endforeach
                </tbody>
            </table>
        </div>



    </div>

</div>

@endsection

