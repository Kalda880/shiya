@extends('layouts.designer-customer.index')

@section('content')


<div class="content">
    <div class="grid grid-cols-12 gap-6">
        <div class="col-span-12 2xl:col-span-12">
            <div class="grid grid-cols-12 gap-6">

                  <div class="col-span-12 lg:col-span-12 mt-4">
                    <div class="intro-y block sm:flex items-center h-10">
                        <h2 class="text-lg font-medium truncate mr-5">
                         سحب مبلغ جديد
                        </h2>

                    </div>
                    <div class="intro-y box p-5 mt-5 sm:mt-4">

                        <div class="tab-content mt-5">
                            <div class="tab-pane active" id="daily-new-transaction" role="tabpanel" aria-labelledby="daily-new-transaction-tab">
                                <div class="rounded-lg overflow-x-auto overflow-y-hidden">
                                    
                                    <form action="{{route('designer.payments.store')}}" method="POST">
                            @csrf
                            <div class="mt-2 px-2">
                                <label for="iban" class="form-label">IBAN</label>
                                <div class="input-group ">
                                  
                                    <input type="text" id="iban" value="{{old('iban')}}" name="iban" class="form-control" placeholder="IBAN" aria-label="Amount (to the nearest dollar)">
                                    <div class="input-group-text">SA</div>
                                
                                </div>
                                @if($errors->has('iban'))
                                    <div class="text-danger mt-2">{{$errors->first('iban')}}</div>
                                @endif
                                </div>
                                    <div class="mt-2  px-2">
                                <label for="amount" class="form-label">المبلغ</label>

                                    <div class="input-group ">
                                      
                                        <input type="number" id="amount" value="{{old('amount')}}" name="amount" class="form-control" placeholder="المبلغ" aria-label="Amount (to the nearest dollar)">
                                        <div class="input-group-text">ر.س</div>
                                    </div>
                                    @if($errors->has('amount'))
                                        <div class="text-danger mt-2">{{$errors->first('amount')}}</div>
                                    @endif
                                    </div>
                                    <div class="mt-2  px-2">
                                        <label for="payment_available" class="form-label">المبلغ المتاح</label>
        
                                            <div class="input-group ">
                                              
                                                <input type="number" disabled readonly id="payment_available" value="{{$payment_available}}" name="payment_available" class="form-control" placeholder="المبلغ المتاح" aria-label="Amount (to the nearest dollar)">
                                                <div class="input-group-text">ر.س</div>
                                            </div>
                                            @if($errors->has('payment_available'))
                                                <div class="text-danger mt-2">{{$errors->first('payment_available')}}</div>
                                            @endif
                                            </div>
                                    <div class="flex justify-end items-center mt-5 gap-2">
                                        <a href="{{route('designer.payments')}}">رجوع الى الخلف</a>
                                
                                        <button type="submit" class="btn btn-primary">إضافة طلب</button>
                                    </div>
                                    </form>
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
