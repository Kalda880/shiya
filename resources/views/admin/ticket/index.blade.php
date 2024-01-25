@extends('layouts.main')

@section('content')


<div class="content">
    <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
        <h2 class="text-lg font-medium me-auto">
           التذاكر
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
                        <th class="whitespace-nowrap"> الوصف  </th>
                        <th class="whitespace-nowrap"> الحالة  </th>
                        <th class="whitespace-nowrap"> تاريخ الاضافة  </th>
                        <th class="whitespace-nowrap">التحكم</th>
                    </tr>
                </thead>

                <tbody>

            @foreach ($tickets as $index =>  $order)

            <tr class="intro-x text-center">
                <td>  {{ $index + 1  }} </td>
                <td class="w-40 !py-5">
                    <div class="flex">
                        <div class="w-10 h-10 image-fit zoom-in" >
                            <img alt="" class="rounded-full" src=" {{ $order->designer->image }}">
                        </div>
                       <h3 class="mr-2 mt-2"> {{ $order->designer->name }} </h3>

                    </div>
                </td>

                <td>  {{ $order->title }} </td>
                <td>  {!! $order->content !!} </td>
                <td> @if ($order->status == 0)
                    <span class="badge badge-pill bg-danger text-white p-3 rounded-md"> لم يتم الرد</span>

                @else
                <span class="badge badge-pill bg-success text-white p-3 rounded-md"> تم الرد </span>
                @endif</td>

                <td> {{ $order->created_at }}  </td>

                <td class="table-report__action w-56">
                    @if ($order->status == 0)

                    <div class="text-center">
                        <button     class="btn btn-primary ticketreply" data-id="{{ $order->id }}">الرد </button>
                    </div>

                    @endif
                </td>
            </tr>

          @endforeach

                </tbody>
            </table>
        </div>



    </div>

</div>




<div id="replymodal" class="modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <form method="POST" action="{{ myRoute('dashboard.reply') }}">
                @csrf

              <div class="modal-header">
                <h2 class="font-medium text-base mr-auto">الرد علي التذكرة</h2>
               </div>

               <input type="hidden" name="ticket_id">

               <div class="modal-body grid grid-cols-12 gap-4 gap-y-3">

                <div class="col-span-12 sm:col-span-12">
                    <label for="modal-form-1" class="form-label">الرد</label>
                     <textarea id="modal-form-1" name="reply" required class="form-control" placeholder="اكتب ردك علي التذكرة"></textarea>
                </div>

                </div>

                <div class="modal-footer">
                    <button type="button" data-tw-dismiss="modal" class="btn btn-outline-secondary w-20 mr-1">الغاء</button>
                    <button type="submit" class="btn btn-primary w-20">ارسال</button>
                </div>

                    </div>
                </div>
                    </div>

@endsection

@include('inc.datatable')

@push('js')

<script>

    $(".ticketreply").on('click', function () {

        var id = $(this).data('id');

        alert(id);

        $("input[name='ticket_id']").val(id);

        const myModal = tailwind.Modal.getOrCreateInstance(document.querySelector("#replymodal"));

        myModal.show();
    });

</script>

@endpush
