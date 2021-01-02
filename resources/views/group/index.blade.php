@extends('layouts.app')

@section('content')

<div class="col-md-9">
    <div class="card">
        <div class="card-header">Grupos</div>

        <div class="card-body">
            @if (session('groups'))
                <div class="alert alert-success" role="alert">
                    {{ session('groups') }}
                </div>
            @endif

            <!-- botones y lineas antes de la contenido principal -->
            @include('group.menu')      
       <!-- fin botones y lineas antes de la contenido principal -->
      @if(session()->has('info'))
            <div class="alert alert-success">{{ session('info') }}</div>
      @endif
      
      <table class="table">
          <thead>
              <tr>
                  <th>Grupos</th>
                  <th>Integrantes </th>
                  <th>Accion</th>
              </tr>
          </thead>
          <tbody>
                @foreach ($groups as $group)
                        <tr>
                        <td>{{$group->description }}</td>
                        <td>{{$group->description }}</td>
                        <td>
                            <a href="{{route('grupos.edit',$group->id)}}">Editar</a>
                            <form style="display: inline" action="{{route('grupos.destroy',$group->id)}}" method="POST">
                                @csrf
                                @method('delete')
                                <button onclick="return confirm('¿Desea eliminar estado de operatividad?')" class="btn btn-danger btn-sm" type="submit">Eliminar</button>
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