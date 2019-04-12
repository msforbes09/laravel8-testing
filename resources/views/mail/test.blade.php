@component('mail::message')
# Hello

{{ ucfirst($mail['message']) }}

@component('mail::button', ['url' => '#'])
Test Button
@endcomponent

Thanks,<br>
{{ config('mail.from.name') }}
@endcomponent
