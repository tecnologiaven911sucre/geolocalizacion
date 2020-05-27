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
    <h1 class="h2">Editar Camara {{$cameras->ip_cameras}}</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            
        </div>
      </div>
       <!-- fin botones y lineas antes de la contenido principal -->
      @if(session()->has('info'))
            <h3>{{ session('info') }}</h3>
      @endif

      <form action="{{route('camaras.update',$cameras->id)}}" method="POST">
        @csrf
        @method('put')
        <div class="form-group">
            <label for="ip">Direccion IP:
            </label>
        <input type="text" class="form-control" id="ip" name="ip" placeholder="Ingrese la direccion IP" value="{{$cameras->ip_cameras}}">
        {{$errors->first('ip')}}
        </div>
        <div class="form-group">
            <label for="serial">Serial:
            </label>
        <input type="text" class="form-control" id="serial" name="serial" placeholder="Ingrese el serial" value="{{$cameras->serial}}">{{$errors->first('serial')}}
        </div>
        <div class="form-group">
            <label for="codigo">Codigo:
            </label>
        <input type="text" class="form-control" id="codigo" name="codigo" placeholder="Ingrese el codigo" value="{{$cameras->code}}">
        </div>{{$errors->first('codigo')}}
        <div class="form-group">
            <label for="estado">Estado:</label>
            <select class="form-control" id="estado" name="estado">
              <option value="{{$cameras->status}}">Operativa</option>
              <option value="{{$cameras->status}}">Inoperativa</option>
            </select>
            {{$errors->first('estado')}}
        </div>
        <button class="btn btn-primary" type="submit">Submit</button>
    </form>




      
        </div>
    </div>
</div>
    
@endsection