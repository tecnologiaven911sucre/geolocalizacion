@extends('layouts.app')

@section('content')

<div class="col-md-9">
    <div class="card">
        <div class="card-header">Cajas</div>

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
                <form action="{{route('reportes.update',$reports->id)}}" method="POST" enctype="multipart/form-data">
                    @method('put')
                    @if($reports->reportable_type == 'App\Camera')
                        {{$option = 'camerasReport'}}
                    @endif
                    @if($reports->reportable_type == 'App\Drawer')
                        {{$option = 'drawersReport'}}
                    @endif
                        @include('reports.form',['btnText' => 'Actualizar','areatexto'=>'', 'cameraOrDrawer' => $option])
                    
                </form>
        </div>
    </div>
</div>
@endsection