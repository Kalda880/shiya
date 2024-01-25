@if(auth('site_users')->check())
<div class="dropdown">
    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
        انت تتصفح ك{{trans('messages.'.auth('site_users')->user()->role)}}
    </button>
    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                @if(auth('site_users')->user()->is_designer)
            <li>
                <a class="dropdown-item confirm-modal {{auth('site_users')->user()->role=='designer'?'disabled':''}}"  aria-disabled="{{auth('site_users')->user()->role=='designer'?'true':'false'}}"  data-tw-target="#change-role-modal"  href="javascript:;" data-text="{{trans('messages.designer')}}"  data-href="{{ myRoute('change-role', 'designer') }}">
                {{trans('messages.designer')}}
                </a>
            </li>
            @endif
            @if(auth('site_users')->user()->is_customer)
            <li>
                <a class="dropdown-item confirm-modal {{auth('site_users')->user()->role=='customer'?'disabled':''}}"  aria-disabled="{{auth('site_users')->user()->role=='customer'?'true':'false'}}" data-tw-target="#change-role-modal"  href="javascript:;" data-text="{{trans('messages.customer')}}"  data-href="{{ myRoute('change-role', 'customer') }}">
                    {{trans('messages.customer')}}
                </a>
            </li>
            @endif
            @if(auth('site_users')->user()->is_affiliate )
            <li>
                <a class="dropdown-item confirm-modal {{auth('site_users')->user()->role=='affiliate'?'disabled':''}}" aria-disabled="{{auth('site_users')->user()->role=='affiliate'?'true':'false'}}" data-tw-target="#change-role-modal"  href="javascript:;" data-text="{{trans('messages.affiliate')}}"  data-href="{{ myRoute('change-role', 'affiliate') }}">
                    {{trans('messages.affiliate')}}
                </a>
            </li>
            @endif
    </ul>
  </div>
@endif