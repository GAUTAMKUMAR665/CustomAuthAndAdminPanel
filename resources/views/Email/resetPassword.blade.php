@component('mail::message')
# MESSAGE

Please Click  Button to Reset your password

@component('mail::button', ['url' => 'https://www.google.com'])
 Reset your password
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
