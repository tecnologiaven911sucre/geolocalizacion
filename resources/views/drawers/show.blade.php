@extends('layouts.app')

@section('content')

<div class="col-md-9">
    <div class="card">
        <div class="card-header">Cajon</div>

        <div class="card-body">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            <!-- botones y lineas antes de la contenido principal -->
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Camara {{$drawers->code}}</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            
        </div>
      </div>
       <!-- fin botones y lineas antes de la contenido principal -->
      @if(session()->has('info'))
            <h3>{{ session('info') }}</h3>
      @endif


      <p>Codigo: {{$drawers->code}} </p>
      <p>Serial del T-lindus: {{$drawers->serial_t_lindus}} </p>
      <p>IP del T-lindus: {{$drawers->ip_t_lindus}} </p>
      <p>Centro de Comando: {{$drawers->command->state}} </p>
      <p>Orden: {{$drawers->order}} </p>
      <p>Circuito: {{$drawers->circuit}} </p>
      <p>Ubicacion: {{$drawers->location}} </p>
      <p>VLAN: {{$drawers->vlan}} </p>
      <p>Estado: {{$drawers->operability->name}} </p>
      <a href="{{route('cajas.index')}}" class="btn btn-primary">regresar</a>

      {{-- id	code	serial_t_lindus	ip_t_lindus	command_center	review	order	circuit	location	vlan	state --}}

      
        </div>
    </div>
</div>
    
@endsection