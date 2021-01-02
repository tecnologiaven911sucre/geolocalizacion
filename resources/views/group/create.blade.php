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
            <h3>{{ session('info') }}</h3>
      @endif
       <form action="/grupos" method="POST">
        @include('group.form')
    </form>
        </div>
    </div>
</div>
@endsection 