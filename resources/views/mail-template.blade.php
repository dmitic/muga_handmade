<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>{{ config('app.name', 'Muga Handmade Shoes') }}</title>
</head>
<body>
    <p>Od: {{ $data['ime'] }} {{ $data['prezime'] }}</p>
    <p>{{ $data['poruka'] }}.</p>
</body>
</html>


