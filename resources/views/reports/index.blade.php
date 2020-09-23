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
                  <th>Usuario</th>
                  <th>Reporte</th>
                  <th>Accion</th>
              </tr>
          </thead>
          <tbody>
                @foreach ($reports as $report)
                        <tr>
                        <td>{{ $report->user->name ? $report->user->name : '' }}</td>
                        <td>{{$report->review }}</td>
                        <td>
                            <a href="{{route('estados.edit',$report->id)}}">Editar</a>
                            <form style="display: inline" action="{{route('estados.destroy',$report->id)}}" method="POST">
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