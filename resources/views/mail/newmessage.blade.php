@component('mail::message')
New Message 

Message From {{ $message->name }}.

Email 		  -  {{ $message->email }}

Subject -  {{ $message->subject }} 




Message 

{{ $message->message }}


Thanks,<br>
{{ config('app.name') }}
@endcomponent
