@extends('layouts.main')

@section('content')


<div class="content">
    <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
        <h2 class="text-lg font-medium me-auto">
           المصمم : {{$designer->name}}
        </h2>
    </div>

    <form method="POST" action="{{ myRoute('dashboard.designer.status.update.post', $designer->id) }}">
        @csrf
        @method('PUT')

        <div class="intro-y box p-5 mt-7 flex flex-col xl:flex-row gap-y-3">

            <div class="form-inline flex-1 flex-col xl:flex-row items-start xl:items-center gap-y-2 xl:mr-6">
                <div class="form-check mr-2">
                    <input id="pending" class="form-check-input" type="radio" name="status" value="0" @if (!$designer->designer_status) checked  @endif>
                    <label class="form-check-label" for="pending">غير مفعل</label> </div>
            </div>

            <div class="form-inline flex-1 flex-col xl:flex-row items-start xl:items-center gap-y-2 xl:mr-6">
                <div class="form-check mr-2">
                    <input id="accepted" class="form-check-input" type="radio" name="status" value="1" @if ($designer->designer_status) checked  @endif>
                     <label class="form-check-label" for="accepted">مفعل</label> </div>
            </div>
            <button class="btn btn-primary shadow-md mr-2"> تحديث </button>
        </div>
    </form>

    </div>



        @endsection
