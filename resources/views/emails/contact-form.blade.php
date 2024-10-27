{{-- resources/views/emails/contact-form.blade.php --}}
@component('mail::message')
# New Contact Form Message

You have received a new contact form submission with the following details:

**Name:** {{ $data['name'] }}

**Email:** {{ $data['email'] }}

**Phone:** {{ $data['phone'] }}

**Message:**
{{ $data['message'] }}

@component('mail::button', ['url' => config('app.url')])
View Dashboard
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent