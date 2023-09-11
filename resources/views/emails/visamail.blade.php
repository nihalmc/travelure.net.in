
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    
    Name: {{ $visaData['name'] }}<br>
    Email: {{ $visaData['email'] }}<br>
    Phone: {{$visaData['phonenumber']}}<br>
    Gender:: {{ $visaData['gender'] }}<br>
    Marital Status:: {{ $visaData['marirtalstatus'] }}<br>
    Nationality of Spouse:: {{ $visaData['spousenationality'] }}<br>
    Country of Birth:: {{ $visaData['countrybirth'] }}<br>
    State/Province Of Birth:: {{ $visaData['birthstate'] }}<br>
    Nationality:: {{ $visaData['nationality'] }}<br>
    Type of Travel Document Held:: {{ $visaData['documenttype'] }}<br>
    Travel Document No:: {{ $visaData['documentno'] }}<br>
    Travel document issued date:: {{ $visaData['issuedate'] }}<br>
    Travel Document Expiry Date:: {{ $visaData['expirydate'] }}<br>
    Country Of Issue:: {{ $visaData['countryissue'] }}<br>
    Place Of Issue:: {{ $visaData['placeissue'] }}<br>
    Country Of Origin:: {{ $visaData['countryorigin'] }}<br>
    Div/State/Province of Origin:: {{ $visaData['provinceorigin'] }}<br>
    District of Origin:: {{ $visaData['districtorigin'] }}<br>
    Address: {{$visaData['address'] }}<br>
    Occupation:: {{ $visaData['occupation'] }}<br>
    Professional Qualifications obtained:: {{ $visaData['qualification'] }}<br>
    Religion/Denomination:: {{ $visaData['religion'] }}<br>
    Purpose of visit:: {{ $visaData['visitpurpose'] }}<br>
    Type of Travel:: {{ $visaData['traveltype'] }}<br>
    Class of Travel: {{ $visaData['class'] }}<br>
    Message: {{ $visaData['messages'] }}<br>


    Thanks,<br>
    {{ config('app.name') }}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>




