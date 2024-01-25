@extends('layouts.designer-customer.index')

@section('content')

<div class="content">
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium ml-auto">
            تعديل التصميم
        </h2>
    </div>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 lg:col-span-12">

            <form method="post" action="{{ myRoute('designer.designs.update', $design->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')

            <div class="intro-y box p-5 ">
                <div class="px-5 sm:px-20 pt-10 border-t border-slate-200/60 dark:border-darkmode-400">
                    <div class="py-5 grid grid-cols-12 gap-4 gap-y-5">

                        <div class="intro-y col-span-12 sm:col-span-6">
                            <label for="input-wizard-1" class="form-label">اسم التصميم</label>
                            <input id="input-wizard-1" type="text" name="title" value="{{ $design->title }}" required class="form-control" placeholder="اسم التصميم">
                        </div>

                        <div class="intro-y col-span-12 sm:col-span-6">
                            <label for="input-wizard-2" class="form-label">السعر</label>
                            <input id="input-wizard-2" type="number" name="price" value="{{ $design->price }}" required class="form-control" placeholder="سعر التصميم">
                        </div>
                        <!--categories -->
                        <div class="intro-y col-span-12 sm:col-span-6">
                            <label for="input-wizard-1" class="form-label"> القسم</label>
                            <select data-placeholder="اختر الوسوم" class=" w-full" id="crud-form-2" name="subcategory_id">

                                @foreach ($categories as $category)
                                
                                
                                    <optgroup label="{{$category->title}}">
                                        @foreach ($category->subCategories as $subcategory)
                                        <option value="{{ $subcategory->id }}" @if ($design->subcategory_id == $subcategory->id)   selected=true   @endif> {{ $subcategory->name }}  </option>
                                         @endforeach
                                      </optgroup>
                                  

                                    

                                @endforeach

                            </select>
                        </div>
                       

                        <div class="intro-y col-span-12 sm:col-span-6">
                            <label for="input-wizard-1" class="form-label"> الوسوم</label>
                            <select  data-placeholder="اختر الوسوم" class="tom-select w-full" id="crud-form-2" name="tags[]" multiple>

                                @foreach ($tags as $tag)

                                <option  value="{{ $tag->id }}" {{in_array($tag->id, old("tags",$tags_selected) ?: []) ? "selected=true": ""}}> {{ $tag->title }}  </option>

                                @endforeach

                            </select>
                        </div>

<!--image -->
<div class="intro-y col-span-12">
    <div class="add-image-input">
        <div id="add-image-input--close" style="display: none" onclick="clearImage('add-image-input__file')" class="add-image-input__close" >X</div>
    
        <img class="img-fill" src="{{asset('/images/'.$design->images)}}" id="add-image-input" style="visibility:{{$design->images?'visible':'hidden'}};"
         alt="">
<input onchange="chooseImage(event,'add-image-input',{{$design->images?'\''.asset('/images/'.$design->images).'\'':null}})" type="file" id="add-image-input__file" name="image">
    <label>إرفاق صورة</label>
    </div>
</div>
                        <div class="intro-y col-span-12 flex items-center justify-center sm:justify-center mt-5">
                            <button class="btn btn-primary w-24 ml-2">حفظ</button>
                        </div>

                    </div>
                </div>
            </div>
        </form>
        </div>
    </div>
</div>


@endsection
