
<div id="{{$id_modal}}" class="modal" modal-type="confirm" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
    <div class="modal-body p-0">
    <div class="p-5 text-center">

    <div class="text-3xl mt-5">تبديل الدور</div>

    <div class="text-slate-500 mt-2">الى هل حقا تريد التغيير الدور <span style="color:red" class="text-zone"></span></div>
</div>
    <div class="px-5 pb-8 text-center">
    <button type="button" data-tw-dismiss="modal" class="btn btn-outline-secondary w-24 mr-1">{{trans("messages.Cancel")}}</button>
    <button type="button" btn-submit class="btn btn-primary w-24" >{{trans("messages.change")}}</button>
    <form  method="POST" action="#">
    {{ csrf_field() }}
    </form>
    </div>
    </div>
    </div>
    </div>
    </div>