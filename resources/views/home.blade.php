@extends('layouts.plantilla')

@section('content')

    <div class="row">
        <div class="col-xs-10 col-sm-6 col-md-8 colMensaje">

            <h1>RECIBE TUS PEDIDOS EN TAQUILLAS</h1>
            <h2>Más seguridad y facilidad</h2>



        </div>
        <div class="col-xs-12 col-sm-4 col-md-3 colRegistro">
            <form method="POST" action="contacto" class="form-horizontal pad">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="inputPassword" class="col-sm-2 control-label">Nombre</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="inputPassword" placeholder="Nombre" name="nombre">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword" class="col-sm-2 control-label">Email</label>
                    <div class="col-sm-8">
                        <input type="email" class="form-control" id="inputPassword" placeholder="Email" name="email">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword" class="col-sm-2 control-label">Direccion</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="inputPassword" placeholder="Direccion" name="direccion">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword" class="col-sm-2 control-label">Usuario</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="inputPassword" placeholder="Usuario" name="usuario">
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputPassword" class="col-sm-2 control-label">Password</label>
                    <div class="col-sm-8">
                        <input type="password" class="form-control" id="inputPassword" placeholder="Password" name="password">
                    </div>
                </div>

                <div role="group" aria-label="...">
                    <button type="submit" class="btn btn-default" data-toggle="modal" data-target="#modalReg">Registro</button>


                </div>
            </form>

            {{-- Validacion --}}

            @if(! $errors -> isEmpty())
                <div class="error">
                    <p>ERROR al insertar los datos</p>
                    <ul>
                        @foreach($errors -> all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>


            @endif

        </div>

        <div class="row">
            <div class="col-xs-1 col-md-1">


            </div>

        </div>

@stop()