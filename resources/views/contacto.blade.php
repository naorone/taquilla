@extends('layouts.plantilla')

@section('content')

    <div class="row">
        <div class="col-xs-10 col-sm-6 col-md-5 colMensaje">


            <h2>Preguntanos sobre cualquier duda</h2>



        </div>
        <div class="col-xs-12 col-sm-4 col-md-5 colEmail">
            <p>Escribe aquí cualquier tipo de duda o sugerencia</p>
            <textarea class="form-control" rows="3">Texto aqui</textarea>
            <div class="form-group">
                    <input type="email" class="form-control" id="inputPassword" placeholder="Email">
            </div>
            <div role="group" aria-label="...">
                <button type="button" class="btn btn-default">Enviar</button>

            </div>
            </div>
        </div>


        <div class="row">
            <div class="col-xs-1 col-md-1">


            </div>

        </div>

@stop()