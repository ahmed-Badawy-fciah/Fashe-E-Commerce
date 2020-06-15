<!DOCTYPE html>
<html lang="en">
<head>
	<title>Home</title>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    @include('layouts.inc.styles')
    
</head>
<body>
    
    
@include('layouts.partials.navbar')

    @include('layouts.partials.signinSystem')
    
    
        @yield('content')
    
    @include('layouts.partials.footer')

    
    
</body>