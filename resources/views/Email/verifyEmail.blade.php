@component('mail::message')
VERIFY EMAIL
Click Below Button To Verify Email

@component('mail::button', ['url' => 'https://www.google.com'])
Verify Your Eamil.
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
