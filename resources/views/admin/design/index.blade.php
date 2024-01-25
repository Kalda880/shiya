@extends('layouts.main')

@section('content')


<div class="content">
    <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
        <h2 class="text-lg font-medium me-auto">
           التصميمات
        </h2>
    </div>
    <div class="grid grid-cols-12 gap-6 mt-5">


        <div class="intro-y col-span-12 overflow-auto lg:overflow-visible">
            <table  class="display table table-report -mt-2" style="width:100%">
                <thead>
                    <tr class="text-center">
                        <th class="whitespace-nowrap">#</th>
                        <th class="whitespace-nowrap">المصمم</th>
                        <th class="whitespace-nowrap"> العنوان  </th>
                        <th class="whitespace-nowrap"> الصورة  </th>
                        <th class="whitespace-nowrap"> الحالة  </th>
                        <th class="whitespace-nowrap"> تاريخ الاضافة  </th>
                        <th class="whitespace-nowrap">التحكم</th>
                    </tr>
                </thead>

                <tbody>

            @foreach ($designs as $index =>  $order)

            <tr class="intro-x text-center">
                <td>  {{ $index + 1  }} </td>
                <td>  {{ $order->designer->name }} </td>
                <td>  {{ $order->title }} </td>
                <td class="text-center">
                    <img alt="" data-action="zoom" class="rounded-md" width="80" src="{{ designImage($order->images) }}">
               </td>
                <td>
                    @if ($order->status == 0)

                        <span class="btn  btn-warning">في الانتظار</span>

                    @elseif($order->status == 2)
                        <span class="btn  btn-danger">مرفوض</span>
                    @else

                        <span class="btn btn-success text-white">مقبول</span>

                    @endif

                 </td>

                <td> {{ $order->created_at }}  </td>

                <td class="table-report__action w-56">
                    <div class="flex justify-center items-center">
                        <a class="flex items-center mr-3" href="{{ myRoute('dashboard.design.edit', $order->id) }}">
                            <i data-lucide="check-square" class="w-4 h-4 mr-1 ml-1"></i> تعديل </a>
                            <form action="{{ myRoute('dashboard.design.destroy', $order->id) }}" method="POST">
                                @csrf
                                @method('delete')
                                <button type="submit" class="flex items-center text-danger delete">
                            <i data-lucide="trash-2" class="w-4 h-4 mr-1"></i> حذف </button>
                            </form>
                        <!--<a class="flex items-center text-danger delete" href="javascript:;" data-href="{{ myRoute('dashboard.design.destroy', $order->id) }}">-->
                        <!--    <i data-lucide="trash-2" class="w-4 h-4 mr-1"></i> مس </a>-->
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

@include('inc.datatable')

