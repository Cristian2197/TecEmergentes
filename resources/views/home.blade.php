@extends('adminlte::page')

@section('title', 'BIENVENIDO')

@section('content_header')
    <h1>BIENVENIDO!</h1>
@stop

@section('content')

<div class="jumbotron jumbotron-fluid">
  <div class="container center">
    <h1 class="display-4">Sistema de Registro Academico</h1>
    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('¡Has iniciado sesión!') }}
  </div>
  <br> <br>

  <div class="container">
  <div class="row">
  
  <div class="col-sm-6">
    <div class="card text-white bg-danger mb-3">
      <div class="card-body">
        <h5 class="card-title">ALUMNOS</h5>
        <p class="card-text">Modulo de alumnos, ingresar aqui para agregar, editar o eliminar información referente a los alumnos.</p>
        <button type="button" class="btn btn-link"> <a href="{{ url('/alumnos') }}">Link</a></button>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card text-white bg-warning mb-3">
      <div class="card-body">
        <h5 class="card-title">PROFESORES</h5>
        <p class="card-text">Modulo de profesores, ingresar aqui para agregar, editar o eliminar información referente a los docentes.</p>
        <button type="button" class="btn btn-link"><a href="{{ url('/profesores') }}">Link</a></button>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card text-white bg-secondary mb-3">
      <div class="card-body">
        <h5 class="card-title">CURSOS</h5>
        <p class="card-text">Información de todos los cursos, en los cuales se podra agregar nuevos, editar y eliminar.</p>
        <button type="button" class="btn btn-link"><a href="{{ url('/materias') }}">Link</a></button>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card text-white bg-success mb-3">
      <div class="card-body">
        <h5 class="card-title">GRADOS</h5>
        <p class="card-text">Toda la información referente a los grados, se puede agregar un nuevo grado, editarlo o eliminarlo.</p>
        <button type="button" class="btn btn-link"><a href="{{ url('/grados') }}">Link</a></button>
      </div>
    </div>
  </div>





      </div>
    </div>

  </div>


@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop




