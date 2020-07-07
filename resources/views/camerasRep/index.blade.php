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
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link active" href="{{route('camaras.index')}}">Listado de Camaras</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('camaras.create')}}">Registro de Camara</a>
            </li>
        </ul>
        <div class="btn-toolbar mb-2 mb-md-0">
         
        </div>

      </div>
      
       <!-- fin botones y lineas antes de la contenido principal -->
      @if(session()->has('info'))
            <h3>{{ session('info') }}</h3>
      @endif
      
      <table class="table">
          <thead>
              <tr>
                  <th>Direccion IP</th>
                  <th>Estado</th>
                  <th>Codigo de caja</th>
                  <th>Acciones</th>
              </tr>
          </thead>
          <tbody>
                @foreach ($cameras as $camera)
                        <tr>
                        <td><a href="{{route('camaras.show',$camera->id) }}">{{$camera->ip_camera }}</a></td>
                            <td>{{$camera->operability->name }}</td>
                            <td>{{$camera->drawer->code}}</td>
                        <td>
                            <a href="{{route('camaras.edit',$camera->id)}}" class="btn btn-primary">Editar</a>
                            <form style="display: inline" action="{{route('camaras.destroy',$camera->id)}}" method="POST">
                                @csrf
                                @method('delete')
                                <button onclick="return confirm('¿Desea eliminar camara?')" class="btn btn-danger" type="submit">Eliminar</button>
                            </form>
                        </td>
                        </tr>
                @endforeach
          </tbody>
      </table>




      
        </div>
    </div>
</div>
    
@endsection