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
            <div class="alert alert-success">{{ session('info') }}</div>
      @endif
      
      <table class="table">
          <thead>
              <tr>
                  <th>Reporte</th>
                  <th>Tipo</th>
                  <th>Usuario</th>
                  <th>Fecha</th>
                  <th>Accion</th>
              </tr>
          </thead>
          <tbody>
                @foreach ($reports as $report)
                        <tr>
                            <td ><a class="d-inline-block text-truncate" style="max-width: 200px;" href="{{route('reportes.show',$report->id) }}">{{  $report->review }}</a></td>
                            <td>
                                @if($report->reportable_type == "App\Novelty" )
                                diario 
                                @endif
                                @if($report->reportable_type == "App\Camera" )
                                camara 
                                @endif
                                @if($report->reportable_type == "App\Drawer" )
                                cajon 
                                @endif
                            </td>
                        <td>{{ $report->user->name ? $report->user->name : '' }}</td>
                        <td>{{$report->created_at }}</td>
                        <td>
                            <a href="{{route('reportes.edit',$report->id)}}">Editar</a>
                            <form style="display: inline" action="{{route('reportes.destroy',$report->id)}}" method="POST">
                                @csrf
                                @method('delete')
                                <button onclick="return confirm('¿Desea eliminar reporte?')" class="btn btn-danger btn-sm" type="submit">Eliminar</button>
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