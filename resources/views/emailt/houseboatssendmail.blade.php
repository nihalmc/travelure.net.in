<x-mail::message>
    Name: {{ $houseboatData['name'] }}<br>
    Email: {{$houseboatData['email'] }}<br>
    Phone: {{$houseboatData['phonenumber']}}<br>
    Date: {{ $houseboatData['date'] }}<br>
    No.of People: {{ $houseboatData['people'] }}<br>
    Room Type: {{$houseboatData['roomtype']}}<br>
    Message: {{ $houseboatData['messages'] }}<br>



Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
