<div class="modal" id="{{$id_modal}}" modal-type="confirm"  tabindex="-1">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">تبديل الدور</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p>الى هل حقا تريد التغيير الدور <span style="color:red" class="text-zone"></span></p>
          
        </div>
        <div class="modal-footer">
        
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{trans("messages.Cancel")}}</button>
    <button  btn-submit type="button" class="btn btn-primary" >{{trans("messages.switch")}}</button>
    <form  method="POST" action="#">
    {{ csrf_field() }}
    </form>
        </div>
      </div>
    </div>
  </div>
