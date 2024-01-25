@extends('layouts.site')
@push('css')
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
@endpush
@section('content')
<div class="container" style="margin-top: 65px;">
    <div class="row">
        <div class="col-12">
          <iframe src="{{$urlPayment}}" style="width: 100%;min-height:100vh"></iframe>
        </div>
    </div>
</div>
@endsection

