@extends('layouts.designer-customer.index')

@section('content')

<div class="content">
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium ml-auto">
            تعديل البيانات الشخصية
        </h2>
    </div>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 lg:col-span-12">
            <!-- BEGIN: Form Layout -->
            <div class="intro-y box p-5 ">
                <div class="px-5 sm:px-20 pt-10 border-t border-slate-200/60 dark:border-darkmode-400">

                    <form method="POST" action="{{ myRoute('designer.profile.update') }}" enctype="multipart/form-data">
                        @csrf

                    <div class="py-5 grid grid-cols-12 gap-4 gap-y-5">
                        <div class="intro-y col-span-12 sm:col-span-6">
                            <label for="input-wizard-1" class="form-label">الاسم</label>
                            <input id="input-wizard-1" name="name" value=" {{ Auth::user()->name }}" required type="text" class="form-control" placeholder="اسم المستخدم">
                        </div>
                        <div class="intro-y col-span-12 sm:col-span-6">
                            <label for="input-wizard-2" class="form-label">البلد</label>
                            <input id="input-wizard-2" type="text" class="form-control" name="country" value=" {{ Auth::user()->country }}" required placeholder="من اي دولة انت؟">
                        </div>
                        <div class="intro-y col-span-12 sm:col-span-6">
                            <label for="input-wizard-3" class="form-label">البريد الالكتروني</label>
                            <input id="input-wizard-3" type="email" class="form-control" name="email" value=" {{ Auth::user()->email }}" required placeholder="البريد الالكتروني">
                        </div>
                        <div class="intro-y col-span-12 sm:col-span-6">
                            <label for="input-wizard-3" class="form-label"> رقم الهاتف</label>
                            <input id="input-wizard-3" type="text" class="form-control" name="phone" value=" {{ Auth::user()->phone }}" required placeholder=" رقم الهاتف  ">
                        </div>
                        <div class="intro-y col-span-12 sm:col-span-6">
                            <label for="input-wizard-4" class="form-label">الانستغرام</label>
                            <input id="input-wizard-4" type="text" class="form-control" name="instagram" value=" {{ Auth::user()->instagram }}" required placeholder="اسم المستخدم الخاص بك في انستغرام">
                        </div>
                        <div class="intro-y col-span-12 sm:col-span-3">
                            <label for="input-wizard-4" class="form-label">تويتر</label>
                            <input id="input-wizard-4" type="text" class="form-control" name="twitter" value=" {{ Auth::user()->twitter }}" required placeholder="اسم المستخدم الخاص بك في تويتر">
                        </div>
                        <div class="intro-y col-span-12 sm:col-span-3">
                            <label for="input-wizard-4" class="form-label">لينكد ان</label>
                            <input id="input-wizard-4" type="text" class="form-control" name="linkedin" value=" {{ Auth::user()->linkedin }}" required placeholder="اسم المستخدم الخاص بك في لينكد ان">
                        </div>
                        <div class="intro-y col-span-12 sm:col-span-6">
                            <label for="crud-form-2" class="form-label">المهارات</label>

                            <select data-placeholder="اختر المهارات" name="skills[]" class="tom-select w-full" id="crud-form-2" multiple>

                                @foreach ($skills as $skill)



                                <option value="{{ $skill->id }}"
                                    @foreach (Auth::user()->skills as $user_skill)
                                        @if ($skill->id == $user_skill->id)
                                            selected
                                        @endif
                                    @endforeach

                                    >{{ $skill->title }}</option>

                                @endforeach

                            </select>

                        </div>

                        <div class="intro-y  col-span-12 sm:col-span-12">
                            <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                                <h2 class="font-medium text-base ml-auto">
                                    صورة الملف الشخصي
                                </h2>
                            </div>
                            <div id="file-type-validation" class="p-5">
                                <div class="preview">

                                        <div class="fallback">
                                            <input  type="file" name="image" />
                                        </div>
                                </div>

                                <div class="source-code hidden">
                                    <button data-target="#copy-file-type-validation" class="copy-code btn py-1 px-2 btn-outline-secondary"> <i data-lucide="file" class="w-4 h-4 mr-2"></i> Copy example code </button>
                                    <div class="overflow-y-auto mt-3 rounded-md">
                                        <pre id="copy-file-type-validation" class="source-preview">
                                             <code class="html"> HTMLOpenTagform data-file-types=&quot;image/jpeg|image/png|image/jpg&quot; action=&quot;/file-upload&quot; class=&quot;dropzone&quot;HTMLCloseTag HTMLOpenTagdiv class=&quot;fallback&quot;HTMLCloseTag HTMLOpenTaginput name=&quot;file&quot; type=&quot;file&quot; /HTMLCloseTag HTMLOpenTag/divHTMLCloseTag HTMLOpenTagdiv class=&quot;dz-message&quot; data-dz-messageHTMLCloseTag HTMLOpenTagdiv class=&quot;text-lg font-medium&quot;HTMLCloseTagDrop files here or click to upload.HTMLOpenTag/divHTMLCloseTag HTMLOpenTagdiv class=&quot;text-slate-500&quot;HTMLCloseTag This is just a demo dropzone. Selected files are HTMLOpenTagspan class=&quot;font-medium&quot;HTMLCloseTagnotHTMLOpenTag/spanHTMLCloseTag actually uploaded. HTMLOpenTag/divHTMLCloseTag HTMLOpenTag/divHTMLCloseTag HTMLOpenTag/formHTMLCloseTag </code> </pre>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="intro-y  col-span-12 sm:col-span-12">
                            <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                                <h2 class="font-medium text-base ml-auto">
                                    صورة الغلاف
                                </h2>
                            </div>
                            <div id="file-type-validation" class="p-5">
                                <div class="preview">

                                        <div class="fallback">
                                            <input  type="file" name="cover" />
                                        </div>

                                </div>

                                <div class="source-code hidden">
                                    <button data-target="#copy-file-type-validation" class="copy-code btn py-1 px-2 btn-outline-secondary"> <i data-lucide="file" class="w-4 h-4 mr-2"></i> Copy example code </button>
                                    <div class="overflow-y-auto mt-3 rounded-md">
                                        <pre id="copy-file-type-validation" class="source-preview">
                                             <code class="html"> HTMLOpenTagform data-file-types=&quot;image/jpeg|image/png|image/jpg&quot; action=&quot;/file-upload&quot; class=&quot;dropzone&quot;HTMLCloseTag HTMLOpenTagdiv class=&quot;fallback&quot;HTMLCloseTag HTMLOpenTaginput name=&quot;file&quot; type=&quot;file&quot; /HTMLCloseTag HTMLOpenTag/divHTMLCloseTag HTMLOpenTagdiv class=&quot;dz-message&quot; data-dz-messageHTMLCloseTag HTMLOpenTagdiv class=&quot;text-lg font-medium&quot;HTMLCloseTagDrop files here or click to upload.HTMLOpenTag/divHTMLCloseTag HTMLOpenTagdiv class=&quot;text-slate-500&quot;HTMLCloseTag This is just a demo dropzone. Selected files are HTMLOpenTagspan class=&quot;font-medium&quot;HTMLCloseTagnotHTMLOpenTag/spanHTMLCloseTag actually uploaded. HTMLOpenTag/divHTMLCloseTag HTMLOpenTag/divHTMLCloseTag HTMLOpenTag/formHTMLCloseTag </code> </pre>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- END: File Type Validation -->
                        <div class="intro-y col-span-12 sm:col-span-12">
                            <label>الوصف الشخصي</label>
                            <div class="mt-2">
                                <textarea name="about" class="editor">
                                     {!! Auth::user()->about !!}
                                </textarea>
                            </div>
                        </div>
                        <div class="intro-y col-span-12 flex items-center justify-center sm:justify-center mt-5">
                            <button class="btn btn-primary w-24 ml-2">حفظ</button>
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
