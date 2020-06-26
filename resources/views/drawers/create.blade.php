@extends('layouts.app')

@section('content')

<div class="col-md-9">
    <div class="card">
        <div class="card-header">Cajas</div>

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
                <a class="nav-link" href="{{route('cajas.index')}}">Listado</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="{{route('cajas.create')}}">Registrar Cajon</a>
            </li>
        </ul>
        
    </div>
       <!-- fin botones y lineas antes de la contenido principal -->
       
      @if(session()->has('info'))
            <h3>{{ session('info') }}</h3>
      @endif
       <form action="/cajas" method="POST">
        @include('drawers.form')
        {{-- @include('drawers.form',['btnText' => 'Actualizar']) --}}
    </form>
        </div>
    </div>
</div>
@endsection