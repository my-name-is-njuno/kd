@component('mail::message')
New Appoitment Request

{{ $appt->name }} is requesting an appointment to be seen at Lavington Green Dental.

Mobile Number -  {{ $appt->phone }} 

Email 		  -  {{ $appt->email }}

Location 	  -  {{ $appt->location }}

Prefered Date 	  -  {{ $appt->preffered_date }}

Message 

{{ $appt->message }}


Thanks,<br>
{{ config('app.name') }}
@endcomponent
