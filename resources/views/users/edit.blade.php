
@extends('layouts.app')

@section('content')

<div class="col-md-9">
    <div class="card">
        <div class="card-header">Editar Usuarios</div>
         
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
      
        <form action="{{route('usuarios.update',$user->id)}}" method="POST">
            @csrf
            @method('put')
            @include('users.form');

            <button class="btn btn-primary" type="submit">Submit</button>
        </form>

      
        </div>
    </div>
</div>
    

@endsection