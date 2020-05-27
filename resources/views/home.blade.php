@extends('layouts.app')

@section('content')



<div class="col-md-9">
    <div class="card">
        <div class="card-header">Inicio</div>

        <div class="card-body">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            <!-- botones y lineas antes de la contenido principal -->
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Estatus de las camaras</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          {{-- <div class="btn-group mr-2">
            <button type="button" class="btn btn-sm btn-outline-secondary">Compartir</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">Exportar</button>
          </div> --}}
        </div>
      </div>
       <!-- fin botones y lineas antes de la contenido principal -->
      
      <div id="map">
        <iframe src="https://www.google.com/maps/d/embed?mid=1pp-C9ZRooXpQqVb5iVphewuyC8mYl80w" width="100%" height="600"></iframe>
      </div>
      <canvas class="my-4 w-100 chartjs-render-monitor" id="myChart" width="500px" height="278" style="display: block; width: 660px; height: 110px;"></canvas>

        </div>
    </div>
</div>

@endsection

