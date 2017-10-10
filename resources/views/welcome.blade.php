<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="{{ asset('css/huella_jesus.css') }}" rel="stylesheet" type="text/css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link href="/css/plantilla.css" rel="stylesheet" type="text/css">
    <link href="/css/bootstrap.css" rel="stylesheet" type="text/css">
    <script href="/js/jquery-3.2.1.min.js"></script>

    <!-- Styles -->

</head>
<body>
<header>
    <div class="ancho">
        <div class="logo">

            <p>Taquillas App</p>

        </div>
        <nav>
            <ul>
                <li><a href="/">INICIO</a></li>
                <li><a href="#" data-toggle="modal" data-target="#myModal">ENTRAR</a></li>
                <li><a href="#">CONTACTO</a></li>
            </ul>

        </nav>

        <div class="row">
            <div class="col-md-9">


                <!-- Modal -->
                <div id="myModal" class="modal fade" role="dialog">
                    <div class="modal-dialog">

                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Log in</h4>
                            </div>

                            <div>
                                <label for="inputPassword" class="col-sm-2 control-label">Nombre</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="inputPassword" placeholder="Nombre">
                                </div>
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>

                    </div>
                </div>



            </div>
            <div class="col-md-3 col">
                <form class="form-horizontal pad">

                    <div class="form-group">
                        <label for="inputPassword" class="col-sm-2 control-label">Nombre</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="inputPassword" placeholder="Nombre">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword" class="col-sm-2 control-label">Usuario</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="inputPassword" placeholder="Usuario">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword" class="col-sm-2 control-label">Password</label>
                        <div class="col-sm-8">
                            <input type="password" class="form-control" id="inputPassword" placeholder="Password">
                        </div>
                    </div>

                    <div class="btn-group" role="group" aria-label="...">
                        <button type="button" class="btn btn-default">Registro</button>

                    </div>
                </form>
            </div>

        </div>

    </div>
</header>




</body>
</html>
