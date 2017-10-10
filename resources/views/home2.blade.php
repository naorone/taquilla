@extends('welcome')
@section('content')



    <div class="row">
        <div class="col-md-8">

        <h1 class="titulo">LOCKERS</h1>





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
                        <input type="password" class="form-control" id="inputPassword" placeholder="Usuario">
                    </div>
                </div>

                <div class="btn-group" role="group" aria-label="...">
                    <button type="button" class="btn btn-default">Registro</button>

                </div>
            </form>
        </div>

        <div class="col-md-1">

        </div>

    </div>


@stop