@component('mail::message')
# Hi, admin

There is an Inquiry message<br/>
From: {{ $name ?? '' }} ({{ $email ?? '' }})<br/>
Message:<br/>
{{ $message ?? '' }}

Thanks,<br>
{{ config('app.name') }}
@endcomponent
