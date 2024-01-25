@extends('layouts.designer-customer.index')

@section('content')

<div class="content">

    <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
        <h2 class="text-lg font-medium ml-auto">
            تصميماتي
        </h2>

        <div class="w-full sm:w-auto flex flex-wrap gap-y-3 mt-4 sm:mt-0">
            <a href="{{ myRoute('designer.designs.create') }}" class="btn btn-primary shadow-md ml-2">اضافة تصميم جديدة </a>
        </div>

    </div>


    <div class="intro-y overflow-auto lg:overflow-visible">
        <table style="text-align: right;margin-top: 20px;" class="table">

            <thead class="table-dark">
                <tr>
                    <th class="whitespace-nowrap">#</th>
                    <th class="whitespace-nowrap">عنوان التصميم</th>
                    <th class="text-center whitespace-nowrap"> الصورة </th>
                    <th class="whitespace-nowrap"> السعر</th>
                    <th class="text-center whitespace-nowrap"> القسم </th>
                    <th class="text-center whitespace-nowrap"> مرات الشراء</th>
                    <th class="text-center whitespace-nowrap"> الحالة</th>
                    <th class="text-center whitespace-nowrap"> تاريخ الاضافة</th>
                    <th class="text-center whitespace-nowrap">  التحكم </th>
                </tr>
            </thead>
            <tbody>

                @foreach (Auth::user()->designs as $index =>  $design)

                <tr class="intro-x">
                    <td> {{ $index +  1 }} </td>
                    <td> {{$design->title}}  </td>
                    <td class="text-center">
                        <img alt="" data-action="zoom" class="rounded-md" width="80" src="{{ designImage($design->images) }}">
                   </td>

                   <td> {{$design->price}}  </td>
                   <td> {{$design->category->title }} ==> {{$design->subCategory->name ?? ""}}  </td>
                   <td> {{$design->payments()->count()}} </td>

                    <td>
                        @if ($design->status == 0)

                        <span class="btn  btn-warning">في اانتظار</span>

                    @elseif($design->status == 2)
                        <span class="btn  btn-danger">مرفو</span>
                    @else

                        <span class="btn btn-success text-white">قبول</span>

                     @endif


                        </td>

                    <td>
                        <div class="font-medium whitespace-nowrap">{{$design->created_at}}</div>
                    </td>
                    <td class="table-report__action w-56">
                        <div class="flex justify-center items-center">
                            <a class="flex items-center mr-3" href="{{ designLinkAdmin($design->id) }}">
                                <i data-lucide="check-square" class="w-4 h-4 mr-1 ml-1"></i> المحرر </a>

                            <a class="flex items-center mr-3" href="{{ myRoute('designer.designs.edit', $design->id) }}">
                                <i data-lucide="check-square" class="w-4 h-4 mr-1 ml-1"></i> تعدل </a>
                                <a class="flex items-center text-danger delete-confirm-model" data-tw-target="#delete-confirmation-modal" data-tw-togg1le="modal" href="javascript:;" data-text="{{trans('messages.design')}}:{{$design->title}}"  data-href="{{ myRoute('designer.designs.destroy', $design->id) }}">
                                    <i data-lucide="trash-2" class="w-4 h-4 mr-1"></i> مسح </a>
                             </div>

                    </td>
                </tr>

                @endforeach



            </tbody>
        </table>
    </div>
    @include("admin.dialogs.delete",['id_modal'=>"delete-confirmation-modal"])


</div>

@endsection
