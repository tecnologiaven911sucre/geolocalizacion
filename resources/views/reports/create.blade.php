@extends('layouts.app')

@section('content')

<div class="col-md-9">
    <div class="card">
        <div class="card-header">Reportes</div>

            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                        <!-- botones y lineas antes de la contenido principal -->
         @include('reports.menu')
            <!-- fin botones y lineas antes de la contenido principal -->
                
                @if(session()->has('info'))
                        <h3>{{ session('info') }}</h3>
                @endif
                <form action="/reportes" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="exampleFormControlSelect2">Tipo de reporte</label>
                    <select multiple class="form-control" id="exampleFormControlSelect2">
                    <option>Camara</option>
                    <option>Cajon</option>
                    <option>Reporte diario</option>
                    </select>
                </div>
                </form>
        </div>
    </div>
</div>
@endsection