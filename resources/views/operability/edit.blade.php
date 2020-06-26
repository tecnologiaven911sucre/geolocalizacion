@extends('layouts.app')

@section('content')

<div class="col-md-9">
    <div class="card">
        <div class="card-header">Estados</div>

        <div class="card-body">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            <!-- botones y lineas antes de la contenido principal -->
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        {{-- <h1 class="h2">Crear camara</h1> --}}
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link" href="{{route('estados.index')}}">Listado de estatus</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="{{route('estados.create')}}">Registrar estatus</a>
            </li>
        </ul>
        
    </div>
       <!-- fin botones y lineas antes de la contenido principal -->
       
      @if(session()->has('info'))
            <h3>{{ session('info') }}</h3>
      @endif
       <form action="{{route('estados.update'),$status->id}}" method="POST">
        @method('put')
        @include('status.form',['btnText' => 'Actualizar'])
    </form>
        </div>
    </div>
</div>
@endsection