@component('mail::message')
# Introduction
<img src="{{ $message->embedData($data, 'example-image.jpg') }}">
This is a sample of report.

@component('mail::button', ['url' => 'www.targlosample.com'])
Download Report
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
