@extends('layout/template')
@section('title','Flo Test')
@section('content')
<main>
    <div class="container py-4">
        <h2> LISTADO DE PROPIETARIOS</h2>
        <a href="{{url('propietarios/create')}}" class="btn btn-primary btn-sm"> Nuevo Registro</a>
    </div>
</main>    
