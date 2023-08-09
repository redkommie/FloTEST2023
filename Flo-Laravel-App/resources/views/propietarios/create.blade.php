@extends('layout/template')
@section('title','Flo Test')
@section('content')
<main>
    <div class="container py-4">
        <h2> REGISTRAR PROPIETARIO </h2>
        <form action="{{url('propietarios')}}" method="post">
           

            @csrf
            <div class="mb-3 row">
                <label for="licencia" class="col-sm-2 col-form-label"> Licencia</label>
                <div class="col-sm-5">
                   <input type="text" class="form-control" name="licencia" id="licencia" value="{{ old ('licencia')}}" >
                </div>
            </div>
            <div class="mb-3 row">
                <label for="nombre" class="col-sm-2 col-form-label"> Nombre</label>
                <div class="col-sm-5">
                   <input type="text" class="form-control" name="nombre" id="nombre" value="{{ old ('nombre')}}" >
                </div>
            </div>
            <div class="mb-3 row">
                <label for="direccion" class="col-sm-2 col-form-label">Direccion</label>
                <div class="col-sm-5">
                   <input type="text" class="form-control" name="direccion" id="direccion" value="{{ old ('direccion')}}" >
                </div>
            </div>
            <div class="mb-3 row">
                <label for="email" class="col-sm-2 col-form-label"> Email</label>
                <div class="col-sm-5">
                   <input type="text" class="form-control" name="email" id="email" value="{{ old ('email')}}" >
                </div>
            </div>
            <a href="{{url('propietarios')}}" class="btn btn-secondary btn-sm">Regresar</a>

             <button type="submit" class="btn btn-success">Guardar</button>
             

        </form>
    </div>
</main> 