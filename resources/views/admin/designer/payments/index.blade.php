@extends('layouts.main')

@section('content')


<div class="content">
    <div class="grid grid-cols-12 gap-6">
        <div class="col-span-12 2xl:col-span-12">
            <div class="grid grid-cols-12 gap-6">

                  <div class="col-span-12 lg:col-span-12 mt-4">
                    <div class="intro-y block sm:flex items-center h-10">
                        <h2 class="text-lg font-medium truncate mr-5">
                         طلبات السحب
                        </h2>

                    </div>
                 
                   
                    <div class="intro-y box p-5 mt-5 sm:mt-4">

                        <div class="tab-content mt-5">
                            <div class="tab-pane active" id="daily-new-transaction" role="tabpanel" aria-labelledby="daily-new-transaction-tab">
                                <div class="rounded-lg overflow-x-auto overflow-y-hidden">
                                    <div class="w-full text-right  mb-2">
                                    <a href="{{route('dashboard.designer.payments')}}" class="btn {{routeName()=='dashboard.designer.payments'?'btn-primary':'btn-secondary'}}"> الكل</a>
                                    <a href="{{route('dashboard.designer.payments.waiting')}}" class="btn {{routeName()=='dashboard.designer.payments.waiting'?'btn-primary':'btn-secondary'}}">في إنتظار التحويل</a>
                                    <a href="{{route('dashboard.designer.payments.processing')}}" class="btn {{routeName()=='dashboard.designer.payments.processing'?'btn-primary':'btn-secondary'}}"> في إنتظار تاكيد التحويل</a>
                                    <a href="{{route('dashboard.designer.payments.approved')}}" class="btn {{routeName()=='dashboard.designer.payments.approved'?'btn-primary':'btn-secondary'}}"> التحويلات المؤكدة</a>


                                    </div>
                                    <table style="text-align: right;" class="display table table-report table-striped">

                                        <thead class="table-dark">
                                            <tr>
                                                <th class="!font-normal">#</th>
                                                <th class="whitespace-nowrap">IBAN</th>
                                                <th class="whitespace-nowrap">إسم المستخدم</th>
                                                <th class="whitespace-nowrap">المبلغ</th>
                                                <th class="whitespace-nowrap">الحالة</th>
                                                <th class="whitespace-nowrap">التاريخ</th>
                                                <th class="whitespace-nowrap">سبب الرفض</th>
                                                <th class="whitespace-nowrap"></th>

                                              
                                             </tr>
                                        </thead>
                                        <tbody>

                                            @foreach ($payment_requests as $index => $payment_request)

                                            <tr>
                                                <td class="text-slate-500 whitespace-nowrap"> {{ $index + 1 }}  </td>
                                                <td class="text-right text-success">{{ ($payment_request->iban)}}</td>
                                                <td class="text-right text-success">{{ ($payment_request->user->name)}}</td>
                                                <td class="text-right text-success">{{ ($payment_request->amount)}}</td>
                                                
                                                <td class="text-right text-success"> {{$payment_request->getDocStatus()}} </td>
                                                <td class="text-right"><bdi>{{ date('Y-m-d H:i', strtotime($payment_request->created_at))  }}</bdi></td>
                                                <td class="text-right "> {{$payment_request->raison_declined}} </td>
                                                <td>
                                                    @if($payment_request->doc_status=='W')
                                                    <form method="POST" action="{{route('dashboard.designer.payments.processing.do',['id'=>$payment_request->id])}}">
                                                @csrf
                                                @method('PUT')
                                                <button class="btn btn-info">إضافة قائمة تحويلات</button>    
                                                </form>
                                            @endif
                                            @if($payment_request->doc_status=='P')
                                            <form method="POST" action="{{route('dashboard.designer.payments.processing.undo',['id'=>$payment_request->id])}}">
                                                @csrf
                                                @method('PUT')
                                                <button class="btn btn-danger">إلغاء من قائمة التحويلات</button>    
                                                </form>
                                            <form method="POST" action="{{route('dashboard.designer.payments.approved.do',['id'=>$payment_request->id])}}">
                                        @csrf
                                        @method('PUT')
                                        <button class="btn btn-primary"> تأكيد التحويل </button>    
                                        </form>
                                    @endif
                                    @if($payment_request->doc_status=='A')
                                    <form method="POST" action="{{route('dashboard.designer.payments.approved.undo',['id'=>$payment_request->id])}}">
                                        @csrf
                                        @method('PUT')
                                        <button class="btn btn-danger">إلغاء تاكيد التحويل</button>    
                                        </form>
                                   
                            @endif
                                            </td>
                                            


                                            </tr>

                                            @endforeach



                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
</div>


@endsection

@include('inc.datatable')
