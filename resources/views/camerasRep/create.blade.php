@extends('layouts.app')

@section('content')

<div class="col-md-9">
    <div class="card">
        <div class="card-header">Camara</div>

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
                <a class="nav-link" href="{{route('camaras.index')}}">Listado de Camaras</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="{{route('camaras.create')}}">Registro de Camara</a>
            </li>
        </ul>
        
    </div>
       <!-- fin botones y lineas antes de la contenido principal -->
       
      @if(session()->has('info'))
            <h3>{{ session('info') }}</h3>
      @endif
       <form action="/camaras" method="POST">
        @csrf
        <div class="form-group">
            <label for="ip">Direccion IP:
            </label>
        <input type="text" class="form-control" id="ip" name="ip" placeholder="Ingrese la direccion IP" value="{{old('ip')}}">
        {{$errors->first('ip')}}
        </div>
        <div class="form-group">
            <label for="serial">Serial:
            </label>
        <input type="text" class="form-control" id="serial" name="serial" placeholder="Ingrese el serial" value="{{old('serial')}}">{{$errors->first('serial')}}
        </div>
        <div class="form-group">
            <label for="codigo">Codigo:
            </label>
        <input type="text" class="form-control" id="codigo" name="codigo" placeholder="Ingrese el codigo" value="{{old('codigo')}}">
        </div>{{$errors->first('codigo')}}
        <div class="form-group">
            <label for="estado">Estado:</label>
            <select class="form-control" id="estado" name="estado">
              <option value="1">Operativa</option>
              <option value="0">Inoperativa</option>
            </select>
            {{$errors->first('estado')}}
        </div>
        <button class="btn btn-primary" type="submit">Submit</button>
    </form>
        </div>
    </div>
</div>
@endsection