<?php 
            function activeMenuInter($url){
                return request()->is($url) ? 'active': '';
            }
        ?>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    {{-- <h1 class="h2">Crear camara</h1> --}}
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link {{activeMenuInter('grupos')}}" href="{{route('grupos.index')}}">Listado</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{activeMenuInter('grupos/create')}}" href="{{route('grupos.create')}}">Crear grupo</a>
                        </li>
                    </ul>
                    
</div>