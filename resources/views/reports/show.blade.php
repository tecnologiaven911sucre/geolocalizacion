@extends('layouts.app')

@section('content')

<div class="col-md-9">
    <div class="card">
        <div class="card-header">Reporte</div>

        <div class="card-body">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            <!-- botones y lineas antes de la contenido principal -->
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Reporte 
        @if($reports->reportable_type == "App\Novelty" )
        diario 
        @endif
        @if($reports->reportable_type == "App\Camera" )
        de camara 
        @endif
        @if($reports->reportable_type == "App\Drawer" )
        de cajon 
        @endif
    </h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            
        </div>
      </div>
       <!-- fin botones y lineas antes de la contenido principal -->
      @if(session()->has('info'))
            <h3>{{ session('info') }}</h3>
      @endif

        <div class="row">
            <div class="col-md-8">
                @if($reports->reportable_type == "App\Camera" )
                @foreach ($cameras as $camera)
                    @if($camera->id == $reports->reportable_id)
                        <p><strong>Camara:</strong>  {{$camera->ip_camera}} </p> 
                    @endif
                @endforeach
                @endif
                @if($reports->reportable_type == "App\Drawer" )
                @foreach ($drawers as $drawer)
                    @if($drawer->id == $reports->reportable_id)
                        <p><strong>Cajon:</strong>  {{$drawer->code}} </p> 
                    @endif
                @endforeach
                @endif
                <p><strong>Reporte:</strong>  {{$reports->review}} </p>
                <p><strong>Usuario creador:</strong>  {{$reports->user->name ? $reports->user->name : '' }} </p>
                <p><strong>Fecha de creacion:</strong>  {{$reports->created_at}} </p>
                <p><strong>Fecha de modificacion:</strong>  {{$reports->updated_at}} </p>
            </div>
            
        </div>
      <a href="{{route('reportes.index')}}" class="btn btn-primary">regresar</a>

      {{-- id	code	serial_t_lindus	ip_t_lindus	command_center	review	order	circuit	location	vlan	state --}}

      
        </div>
    </div>
</div>
    
@endsection