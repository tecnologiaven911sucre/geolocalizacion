@extends('layouts.app')

@section('content')

<div class="col-md-9">
    <div class="card">
        <div class="card-header">Cajones</div>

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
                <a class="nav-link active" href="{{route('cajas.index')}}">Listado</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('cajas.create')}}">Registrar Cajon</a>
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
                  <th>Codigo</th>
                  <th>IP del t-lindus</th>
                  <th>Orden</th>
                  <th>Centro de comando</th>
                  <th>operatividad</th>
                  <th>Acciones</th>
              </tr>
          </thead>
          <tbody>
                @foreach ($drawers as $drawer)
                        <tr>
                        <td><a href="{{route('cajas.show',$drawer->id) }}">{{$drawer->code }}</a></td>
                            <td>{{$drawer->ip_t_lindus }}</td>
                            <td>{{$drawer->order }}</td>
                            <td>{{$drawer->command->state}}</td>
                            <td>{{$drawer->operability->name}}</td>
                           
                        <td>
                            <a href="{{route('cajas.edit',$drawer->id)}}">Editar</a>
                            <form style="display: inline" action="{{route('cajas.destroy',$drawer->id)}}" method="POST">
                                @csrf
                                @method('delete')
                                <button type="submit">Eliminar</button>
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