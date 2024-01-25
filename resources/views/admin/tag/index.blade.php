@extends('layouts.main')

@section('content')

<div class="content">
    
    <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
        <h2 class="flex items-center text-lg font-medium me-auto">
           الوسوم
        </h2>
    </div>
    
    <div class="grid grid-cols-12 gap-5 mt-5">

        <div class="col-span-12 2xl:col-span-3">
            <div class="box intro-y p-5 mt-5">



                <form method="POST" action="{{ myRoute('dashboard.tag.store') }}" enctype="multipart/form-data">
                    @csrf

                    <div class="mt-3">
                        <label for="crud-form-1" class="form-label">عنوان الوسم</label>
                        <input id="crud-form-1" type="text" name="title" value="{{ old('title') }}" class="form-control w-full" placeholder="عنوان الوسم">
                    </div>
    
                    <div class="text-right mt-5">
                         <button type="submit" class="btn btn-primary w-24">حفظ</button>
                    </div>
                </form>

            </div>
        </div>

        <div class="col-span-12 2xl:col-span-9">

        <div class="intro-y col-span-8 overflow-auto lg:overflow-visible">
            
            <table  class="display table table-report -mt-2" style="width:100%">
                <thead>
                    <tr class="text-center">
                        <th class="whitespace-nowrap">#</th>
                        <th class="whitespace-nowrap">العنوان</th>
                        <!--<th class="whitespace-nowrap"> التصميمات  </th>-->
                        <th class="whitespace-nowrap">التحكم</th>
                    </tr>
                </thead>

                <tbody>

            @foreach ($tags as $index =>  $order)

            <tr class="intro-x text-center">
                <td>  {{ $index + 1  }} </td>
                <td>  {{ $order->title }} </td>
                <!--<td> 0  </td>-->
                <td class="table-report__action w-56">
                    <div class="flex justify-center items-center">
                        <a class="flex items-center mr-3" href="{{ myRoute('dashboard.tag.edit', $order->id) }}"> 
                            <i data-lucide="check-square" class="w-4 h-4 mr-1 ml-1"></i> تعديل </a>
                        <a class="flex items-center text-danger delete" href="javascript:;" data-href="{{ myRoute('dashboard.tag.destroy', $order->id) }}">
                            <!--<i data-lucide="trash-2" class="w-4 h-4 mr-1"></i> مسح </a>-->
                    </div>

                </td>
            </tr>

          @endforeach

                </tbody>
            </table>
        </div>

        </div>


    </div>

</div>

@endsection

@include('inc.datatable')

