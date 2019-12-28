<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('CSS/style.css') }}" rel="stylesheet">
    <title>{{config('app.name','My App')}}</title>
</head>
<body>
    @include('inc.navbar')
    @yield('content')
    @include('inc.footer')
</body>
</html>