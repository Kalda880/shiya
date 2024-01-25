@extends('layouts.site')
@push('css')
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
@endpush
@section('content')
<div class="container" style="margin-top: 65px;">
    <div class="row">
        <div class="col-8  p-5 mx-auto">
            <form action="https://yourserver.com/payment" id="payform" method="post">
                <div class="card">
                    <div class="card-body">
                        <span id="paymentErrors"></span>
                        <input type="hidden" name="holderEmail" id="customer-email" value="designer@app.com">
                        <div class="form-group mb-2">
                            <label class="label-control" for="holderName">Card holders name</label>
                            <input type="text" class="form-control" id="holderName" name="holderName" autocomplete="name" placeholder="Your full name" value="Designer">
                            <div id="holderName-feedback" class="invalid-feedback"></div>
                        </div>
                        <div class="form-group  mb-2">
                        <label class="label-control">Card Number</label>
                        <input type="text"  class="form-control" data-paylib="number" placeholder="1234 1234 1234 1234" size="20">
                        </div>
                        <div class="row  mb-2">
                        <div class="col-6 row gap-1 form-group">
                        <label>Expiry Date (MM/YYYY)</label>
                        <input type="text" class="col-6 col-md-3 form-control" data-paylib="expmonth" style="width: auto" placeholder="MM" size="2">
                        <input type="text" class="col-6 col-md-3 form-control" data-paylib="expyear" style="width: auto" placeholder="YYYY" size="4">
                        </div>
                        <div class="col-6 col-md-3 form-group">
                        <label>Security Code</label>
                        <input type="text" data-paylib="cvv" class="form-control" placeholder="CVV" size="4">
                        </div>
                        </div>
                        <input type="submit" class="btn btn-primary" value="Place order">
                </div>
            </div>
            </form>
        </div>
    </div>
</div>
@endsection


@push('js')
<script src="https://secure.clickpay.com.sa/payment/js/paylib.js"></script>
<script type="text/javascript">
    var myform = document.getElementById('payform');
    paylib.inlineForm({
      'key': '{{env("CLICKPAY_CLIENT_KEY")}}',
      'form': myform,
      'autoSubmit': true,
      'callback': function(response) {
        document.getElementById('paymentErrors').innerHTML = '';
        if (response.error) {             
          paylib.handleError(document.getElementById('paymentErrors'), response); 
        }
      }
    });
    </script>
@endpush