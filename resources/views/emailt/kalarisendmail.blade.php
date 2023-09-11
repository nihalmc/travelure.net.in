<x-mail::message>

    Name: {{ $kalariData['name'] }}<br>
    Email: {{ $kalariData['email'] }}<br>
    Phone: {{$kalariData['phonenumber']}}<br>
    Date: {{ $kalariData['date'] }}<br>
    No.of People: {{ $kalariData['people'] }}<br>
    Message: {{ $kalariData['messages'] }}<br>


<x-mail::button :url="''">
Button Text
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
