<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">

    <title>St. Hector's Veterinary Clinic</title>
</head>
<body>
    @include('common.header')

    @yield('content')

    @include('common.footer')
</body>
</html>