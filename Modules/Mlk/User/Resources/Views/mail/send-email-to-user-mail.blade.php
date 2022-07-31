@component('mail::message')
# {{ config('app.name') }}

You have an email from toplearn course.

@component('mail::button', ['url' => route('home.index')])
Home page
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
