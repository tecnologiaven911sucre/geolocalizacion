@csrf
   @if(!isset($btnText))
        <div class="form-group">
                    <label for="tipo">Tipo de reporte:
                    </label>
                <select class="form-control form-control-sm" id="tipo" name="tipo">
                        <option value="0">Seleccione una opcion</option>
                        <option value="1">Reporte de diario</option>
                        <option value="2">Reporte de camara</option>
                        <option value="3">Reporte de cajon</option>
                </select>
                <!-- {{$errors->first('$status')}} -->
        </div>
   @endif   
       {{dd($cameraOrDrawer)}}
    @if($reports->reportable_type == 'App\Camera' || !isset($btnText))     
        <div id="camerasReport" class="form-group ">
            <label for="cameras">Camaras:
            </label>
            <div class="form-group">
            <select class="form-control form-control-sm" id="cameras" name="cameras">
                    <option value=0>Seleccione una opcion</option>
                @foreach ($cameras as $camera)
                    <option value="{{$camera->id}}">{{$camera->ip_camera}}</option>
                @endforeach
            </select>
        </div>
        <!-- {{$errors->first('$status')}} -->
        </div>
    @endif   
    @if($reports->reportable_type == 'App\Drawer' || !isset($btnText))
        <div id="drawersReport" class="form-group ">
            <label for="cameras">Cajones:
            </label>
            <div class="form-group">
            <select class="form-control form-control-sm" id="drawers" name="drawers">
                    <option value="0">Seleccione una opcion</option>
                @foreach ($drawers as $drawer)
                    <option value="{{$drawer->id}}">{{$drawer->code}}</option>
                @endforeach
            </select>
            </div>
        </div>
    @endif    
    @if(isset($areatexto))
    <div id="{{$areatexto}}" class="form-group ">
    <label for="review">Reportar</label>
    <textarea class="form-control" id="review" name="review" rows="5" placeholder="Ingrese el texto del reporte"></textarea>
</div>
    @endif   
    
    
        <input class="btn btn-primary" type="submit" value="{{ isset($btnText) ? $btnText : 'Guardar'}}" />
