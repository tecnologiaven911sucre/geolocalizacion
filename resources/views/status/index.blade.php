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
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link active" href="{{route('estados.index')}}">Listado de estatus</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('estados.create')}}">Registrar estatus</a>
            </li>
        </ul>
        <div class="btn-toolbar mb-2 mb-md-0">
         
        </div>

      </div>
      
       <!-- fin botones y lineas antes de la contenido principal -->
      @if(session()->has('info'))
            <div class="alert alert-success">{{ session('info') }}</div>
      @endif
      
      <table class="table">
          <thead>
              <tr>
                  <th>Estado</th>
                  <th>Accion</th>
              </tr>
          </thead>
          <tbody>
                @foreach ($status as $stt)
                        <tr>
                        <td>{{$stt->operability }}</td>
                        <td>
                            <a href="{{route('estados.edit',$stt->id)}}">Editar</a>
                            <form style="display: inline" action="{{route('estados.destroy',$stt->id)}}" method="POST">
                                @csrf
                                @method('delete')
                                <button onclick="return confirm('¿Desea eliminar estatus?')" class="btn btn-danger btn-sm" type="submit">Eliminar</button>
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