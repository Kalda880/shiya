<div class="mt-3">
    <form class="form-field-setting" action="{{myRoute('dashboard.site_settings.update')}}" method="POST"@if(in_array($site_setting->data_type,['image'])) enctype="multipart/form-data" @endif>
        @csrf
        <input type="hidden" name="field" value="{{$site_setting->name}}" />
        <div class="form-label flex">
            <label for="{{$site_setting->name}}" >{{$site_setting->label}}</label>
            <button type="submit" class="btn p-0 border-unset" style=""><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-save"><path d="M19 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11l5 5v11a2 2 0 0 1-2 2z"/><polyline points="17 21 17 13 7 13 7 21"/><polyline points="7 3 7 8 15 8"/></svg></button>
        </div>
    
    @if($site_setting->data_type=='text')
        <textarea id="{{$site_setting->name}}"  name="{{$site_setting->name}}"   class="form-control w-full">{{ $site_setting->value }}</textarea>
    @elseif($site_setting->data_type=='boolean')
    <div class="flex">
    <div class="form-inline  items-start xl:items-center gap-y-2 xl:mr-6">
        <div class="form-check mr-2">
            <input id="pending" class="form-check-input" type="radio" name="{{$site_setting->name}}" value="N" @if($site_setting->value=="N") checked  @endif>
            <label class="form-check-label" for="pending">غير مفعل</label> </div>
    </div>

    <div class="form-inline  items-start xl:items-center gap-y-2 xl:mr-6">
        <div class="form-check mr-2">
            <input id="accepted" class="form-check-input" type="radio" name="{{ $site_setting->name }}" value="Y" @if($site_setting->value=="Y") checked  @endif>
             <label class="form-check-label" for="accepted">مفعل</label> </div>
    </div>
    </div>
    @else
        <input id="{{$site_setting->name}}"  type="text" name="{{$site_setting->name}}" value="{{$site_setting->value}}" class="form-control w-full">
    @endif
    </form>
</div>