@component('mail::message')
# Your Transaction Has Been Confirmed

The body of your message.

@component('mail::button', ['url' => route('user.dashboard')])
My Dashboard
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
