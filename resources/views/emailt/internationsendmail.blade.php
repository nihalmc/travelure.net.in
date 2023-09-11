<x-mail::message>
    Name: {{ $internationData['name'] }}<br>
    Email: {{$internationData['email'] }}<br>
    Phone: {{$internationData['phonenumber']}}<br>
    Date: {{ $internationData['date'] }}<br>
    No.of People: {{ $internationData['people'] }}<br>
    Message: {{ $internationData['messages'] }}<br>



Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
