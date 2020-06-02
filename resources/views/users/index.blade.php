
@extends('layouts.app')

@section('content')

<div class="col-md-9">
    <div class="card">
        <div class="card-header">Usuarios</div>

        <div class="card-body">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            <!-- botones y lineas antes de la contenido principal -->
    
      
       <!-- fin botones y lineas antes de la contenido principal -->
      @if(session()->has('info'))
      <div class="alert alert-success">{{ session('info') }}</div>
      @endif
      
      <table class="table">
          <thead>
              <tr>
                  <th>ID</th>
                  <th>Nombre</th>
                  <th>Email</th>
                  <th>Role</th>
                  <th>Acciones</th>
              </tr>
          </thead>
          <tbody>
              @foreach ($users as $user)    
                <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->role->display_name}}</td>
                <td>
                        <a class="btn btn-primary btn-sm" href="{{route('usuarios.edit',$user->id)}}">Editar</a>
                        <form style="display: inline" action="{{route('usuarios.destroy',$user->id)}}" method="POST">
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