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
    <h1 class="h2">Cajon: {{$drawers->code}}</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            
        </div>
      </div>
       <!-- fin botones y lineas antes de la contenido principal -->
      @if(session()->has('info'))
            <h3>{{ session('info') }}</h3>
      @endif

        <div class="row">
            <div class="col-md-8">
                <p><strong>Codigo:</strong>  {{$drawers->code}} </p>
                <p><strong>Serial del T-lindus:</strong>  {{$drawers->serial_t_lindus}} </p>
                <p><strong>IP del T-lindus:</strong>  {{$drawers->ip_t_lindus}} </p>
                <p><strong>Centro de Comando:</strong>  {{$drawers->command->state}} </p>
                <p><strong>Orden:</strong>  {{$drawers->order}} </p>
                <p><strong>Circuito:</strong>  {{$drawers->circuit}} </p>
                <p><strong>Ubicacion:</strong>  {{$drawers->location}} </p>
                <p><strong>VLAN:</strong>  {{$drawers->vlan}} </p>
                <p><strong>Latitud:</strong>  {{$drawers->latitude }} </p>
                <p><strong>Longitud:</strong>  {{$drawers->length}} </p>
                <p><strong>Estado:</strong>  {{$drawers->operability->name}} </p>
            </div>
            <div class="col-md-4">
                <p> <img class="mb-3 ml-4" src="{{asset('storage').'/'.$drawers->photo }}" alt="" width="200"> </p>
            </div>
        
        </div>
      <a href="{{route('cajas.index')}}" class="btn btn-primary">regresar</a>

      {{-- id	code	serial_t_lindus	ip_t_lindus	command_center	review	order	circuit	location	vlan	state --}}

      
        </div>
    </div>
</div>
    
@endsection