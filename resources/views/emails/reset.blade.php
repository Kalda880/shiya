@component('mail::message')
# {{trans('messages.Password Reset Link')}}

{{trans('messages.Reset your password from here')}}

@component('mail::button', ['url' => $link])
{{trans('messages.Reset Password')}}
@endcomponent

مع تحيات,<br>
{{ trans('messages.app_name') }}
@endcomponent
