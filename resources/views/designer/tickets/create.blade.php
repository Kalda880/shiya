@extends('layouts.designer-customer.index')

@section('content')

<div class="content">
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium ml-auto">
            اضافة تذكرة جديدة
        </h2>
    </div>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 lg:col-span-12">

            <div class="intro-y box p-5 ">
                <div class="px-5 sm:px-20 pt-10 border-t border-slate-200/60 dark:border-darkmode-400">

                    <form method="POST" action="{{ myRoute('designer.tickets.store') }}">
                        @csrf

                    <div class="py-5 grid grid-cols-12 gap-4 gap-y-5">
                        <div class="intro-y col-span-12 sm:col-span-12">
                            <label for="input-wizard-1" class="form-label">عنوان التذكرة</label>
                            <input id="input-wizard-1" type="text" name="title"  value="{{ old('title') }}" class="form-control" placeholder="عنوان التذكرة">
                        </div>

                        <div class=" intro-y col-span-12 sm:col-span-12">
                            <label>من فضلك ادخل استفسارك هنا</label>
                            <div class="mt-2">
                                <textarea style="text-align: right;" name="content" class="editor">{{old('content')}} </textarea>
                            </div>
                        </div>
                        <div class="intro-y col-span-12 flex items-center justify-center sm:justify-center mt-5">
                            <button type="submit" class="btn btn-primary w-24 ml-2">حفظ</button>
                        </div>
                    </div>

                    </form>

                </div>
            </div>

        </div>
    </div>
</div>

@endsection

@push('js')

<script src="{{ asset('main/js/ckeditor-classic.js')}}"></script>

@endpush
