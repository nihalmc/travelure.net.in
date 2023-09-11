<x-mail::message>

Name: {{ $ayurvedaData['name'] }}<br>
Email: {{$ayurvedaData['email'] }}<br>
Phone: {{$ayurvedaData['phonenumber']}}<br>
Date: {{ $ayurvedaData['date'] }}<br>
No.of People: {{ $ayurvedaData['people'] }}<br>
Message: {{ $ayurvedaData['messages'] }}<br>

<x-mail::button :url="''">
Button Text
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
