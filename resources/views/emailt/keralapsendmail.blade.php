<x-mail::message>

Name: {{ $keralaData['name'] }}<br>
Email: {{$keralaData['email'] }}<br>$keralaData
Phone: {{$keralaData['phonenumber']}}<br>
Date: {{ $keralaData['date'] }}<br>
No.of People: {{ $keralaData['people'] }}<br>
Message: {{ $keralaData['messages'] }}<br>



Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
