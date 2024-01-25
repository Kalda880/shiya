@extends('layouts.designer-customer.index')

@section('content')

<div class="content">

    <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
        <h2 class="text-lg font-medium ml-auto">
            مبيعاتي
        </h2>

    </div>





    <div class="intro-y overflow-auto lg:overflow-visible">

        <div class="grid grid-cols-2 gap-4">
            <div>
                <div class="card" style="background: #1abc9c;text-align: center;padding: 38px 0px;width: 60%;margin: 0 auto;border-radius: 17px;box-shadow: 0px 6px 12px #0000003d;">
                    <div class="card-body">
                        <h5 style="font-size: 29px;color: #fff;font-weight: bold;margin-bottom: 13px;font-size: ;">{{ $payments->count() }}</h5>
                        <span class="h2 font-weight-bold mb-0 text-white fw-bold">مبيعاتي</span>
                    </div>
                </div>
            </div>

            <div>
                <div class="card" style="background: #3498db;text-align: center;padding: 38px 0px;width: 60%;margin: 0 auto;border-radius: 17px;box-shadow: 0px 6px 12px #0000003d;">
                    <div class="card-body">
                        <h5 style="font-size: 29px;color: #fff;font-weight: bold;margin-bottom: 13px;font-size: ;">{{ Auth::user()->code }}</h5>
                        <span class="h2 font-weight-bold mb-0 text-white fw-bold">الكود</span>
                    </div>
                </div>
            </div>
            <div>
                <div class="card" style="background: #f44336;text-align: center;padding: 38px 0px;width: 60%;margin: 0 auto;border-radius: 17px;box-shadow: 0px 6px 12px #0000003d;">
                    <div class="card-body">
                        <h5 style="font-size: 29px;color: #fff;font-weight: bold;margin-bottom: 13px;font-size: ;">{{ $payments->sum(function ($pay){
                            return $pay['amount']*$pay['affiliate_percentage'];
                        }) }} ريال</h5>
                        <span class="h2 font-weight-bold mb-0 text-white fw-bold">إجمالي أرباحي</span>
                    </div>
                </div>
            </div>
            <div>
                <div class="card" style="background: #666;text-align: center;padding: 38px 0px;width: 60%;margin: 0 auto;border-radius: 17px;box-shadow: 0px 6px 12px #0000003d;">
                    <div class="card-body">
                        <h5 id="link-affiliate" style="font-size: 16px;color: #fff;font-weight: bold;margin-bottom: 13px;">{{myroute('index.code',['code'=>Auth::user()->code])}}</h5>
                        <span onclick="copyToClipboard('link-affiliate','{{trans('messages.copied-url-successful')}}')" class="h2 font-weight-bold mb-0 text-white fw-bold" style="cursor: pointer">نسخ  الرابط</span>
                    </div>
                </div>
            </div>
          </div>







          </div>

        <table style="text-align: right;margin-top: 20px;" class="table">

            <thead>
                <tr class="text-center">
                    <th class="whitespace-nowrap">#</th>
                    <th class="whitespace-nowrap">العميل</th>
                    <th class="whitespace-nowrap"> التصميم   </th>
                    <th class="whitespace-nowrap"> الإجمالي   </th>
                    <th class="whitespace-nowrap"> التاريخ   </th>

                </tr>
            </thead>

            <tbody>

        @foreach ($payments as $payment)

        <tr class="intro-x text-center">
            <td>  {{ $loop->iteration  }} </td>
            <td>  {{ $payment->customer->name }} </td>
           <td> التصنيف: {{ $payment->design->category->title }}, التصميم:  {{ $payment->design->title }}  </td>
           <td>
            <span class="bg-success text-white rounded-md p-2">{{0.1 * $payment->amount}} ريال</span>
          </td>
<td style="direction:ltr">  {{ $payment->created_at }} </td>
        </tr>

      @endforeach

            </tbody>
        </table>
    </div>
@endsection
