@extends('welcome')

@section('content')

    <div class="row">
        <div class="col-xs-3 col-sm-6 col-md-8">






        </div>
        <div class="col-xs-7 col-sm-4 col-md-3 colRegistro">
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
                        <input type="password" class="form-control" id="inputPassword" placeholder="Usuario">
                    </div>
                </div>

                <div class="botRegis" role="group" aria-label="...">
                    <button type="button" >Registro</button>

                </div>
            </form>
        </div>

        <div class="row">
            <div class="col-xs-2 col-md-1">






            </div>

    </div>

@stop()