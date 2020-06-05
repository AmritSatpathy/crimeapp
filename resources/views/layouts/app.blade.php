<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script   src="https://code.jquery.com/jquery-1.12.4.js"   integrity="sha256-Qw82+bXyGq6MydymqBxNPYTaUXXq7c8v3CwiYwLLNXU="   crossorigin="anonymous"></script>
	<link rel="stylesheet"  href="/css/custom.css">
    <link rel="stylesheet"  href="/css/bootstrap.css">
    <title>{{ config('app.name', 'CrimeApp') }}</title>
</head>
<body >
   
        @include('inc.header')
        @include('inc.messages')
            @yield('content')
        @include('inc.footer')

 
</body>
</html>