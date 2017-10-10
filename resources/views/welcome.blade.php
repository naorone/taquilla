<!doctype html>
<html lang="{{ app()->getLocale() }}">

@include('Partials.head')

<body>
@include('Partials.header')

@include('Partials.loginModal')

@yield('content')




</body>
</html>
