
<div id="{{$id_modal}}" class="modal" modal-type="confirm" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
    <div class="modal-body p-0">
    <div class="p-5 text-center">
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" icon-name="x-circle" data-lucide="x-circle" class="lucide lucide-x-circle w-16 h-16 text-warning mx-auto mt-3"><circle cx="12" cy="12" r="10"></circle><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg>
    <div class="text-3xl mt-5">{{trans('messages.Are you sure')}}</div>
    <div class="text-slate-500 mt-2">{{trans("messages.Do you really want to undo declined this payment request")}} </div>
    <div class="text-slate-500 mt-2 text-zone"></div>
    <form  method="POST" id="form-{{$id_modal}}" action="#">
        <input type="hidden" name="_method" value="DELETE">
    {{ csrf_field() }}
    </form>
</div>
    <div class="px-5 pb-8 text-center">
    <button type="button" data-tw-dismiss="modal" class="btn btn-outline-secondary w-24 mr-1">{{trans("messages.Cancel")}}</button>
    <button type="button" btn-submit class="btn btn-danger w-24" >{{trans("messages.Confirm")}}</button>
   
    </div>
    </div>
    </div>
    </div>
    </div>