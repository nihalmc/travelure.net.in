<x-mail::message>

    Name: {{ $studentData['name'] }}<br>
    Email: {{ $studentData['email'] }}<br>
    Phone: {{ $studentData['phonenumber']}}<br>
    Date: {{ $studentData['date'] }}<br>
    No.of People: {{ $studentData['people'] }}<br>
    Message: {{ $studentData['messages'] }}<br>


Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
