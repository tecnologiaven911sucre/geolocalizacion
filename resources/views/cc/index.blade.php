@extends('layouts.app')

@section('content')

<div class="col-md-9">
    <div class="card">
        <div class="card-header">Centro de Comando</div>

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
                <a class="nav-link active" href="{{route('centrodecomando.index')}}">Listado</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('centrodecomando.create')}}">Registrar centro de comando</a>
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
                  <th>Centro de comando</th>
                  <th>Accion</th>
              </tr>
          </thead>
          <tbody>
                @foreach ($cc as $center)
                        <tr>
                        <td>{{$center->state }}</td>
                        <td>
                            <a href="{{route('centrodecomando.edit',$center->id)}}">Editar</a>
                            <form style="display: inline" action="{{route('centrodecomando.destroy',$center->id)}}" method="POST">
                                @csrf
                                @method('delete')
                                <button class="btn btn-danger btn-sm" type="submit">Eliminar</button>
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