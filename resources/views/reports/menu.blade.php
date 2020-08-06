        <?php 
            function activeMenuInter($url){
                return request()->is($url) ? 'active': '';
            }
        ?>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    {{-- <h1 class="h2">Crear camara</h1> --}}
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link {{activeMenuInter('reportes')}}" href="{{route('reportes.index')}}">Listado</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{activeMenuInter('reportes/create')}}" href="{{route('reportes.create')}}">Crear reporte</a>
                        </li>
                    </ul>
                    
</div>