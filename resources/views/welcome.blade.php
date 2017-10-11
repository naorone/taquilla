<!doctype html>
<html lang="{{ app()->getLocale() }}">

@include('Partials.head')


<body>

<div class="topnav" id="myTopnav">
    <a href="/">INICIO</a>
    <a href="#" data-toggle="modal" data-target="#myModal">ENTRAR</a>
    <a href="#">CONTACTO</a>
    <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
</div>


@include('Partials.loginModal')

@yield('content')




</body>
</html>
