@extends('layouts.app')

@section('content')

<div class="col-md-9">
    <div class="card">
        <div class="card-header">Camara</div>

        <div class="card-body">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            <!-- botones y lineas antes de la contenido principal -->
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Camara: {{$cameras->ip_camera}}</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            
        </div>
      </div>
       <!-- fin botones y lineas antes de la contenido principal -->
      @if(session()->has('info'))
            <h3>{{ session('info') }}</h3>
      @endif

        <div class="row">
            <div class="col-md-6">
                <p> <strong>Estado de la Camara: </strong>  {{$cameras->operability->name }} </p>
                <p> <strong>Codigo de Cajon: </strong>  {{$cameras->drawer->code }} </p>
                <p> <strong>IP del t-lindus: </strong>  {{$cameras->drawer->ip_t_lindus }} </p>
                <p> <strong>Ubicacion: </strong>  {{$cameras->drawer->location }} </p>
            </div>
            <div class="col-md-6">
            <p> <img class="mb-3 ml-4" src="{{asset('storage').'/'.$cameras->photo }}" alt="" width="200"> </p>
            </div>
        </div>

      <a href="{{route('camaras.index')}}" class="btn btn-primary">regresar</a>
      
        </div>
    </div>
</div>
    
@endsection