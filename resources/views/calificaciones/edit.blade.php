@extends('adminlte::page')

@section('title', 'Calificaciones')

@section('content_header')
<div class="card-header">Calificaciones</div>
@stop

@section('content')


     
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                
                <div class="card-body">
                    <form method = "post" action = " {{ url('/calificaciones/'.$calificaciones->id)}}">
                        @csrf
                        {{ method_field('PUT') }}
                        @include('calificaciones.formedit')
                    </form>
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



