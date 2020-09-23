@csrf
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
    <div id="textReport" class="form-group ">
    <label for="review">Reportar</label>
    <textarea class="form-control" id="review" name="review" rows="5" placeholder="Ingrese el texto del reporte"></textarea>
  </div>
    
    
        <input class="btn btn-primary" type="submit" value="{{ isset($btnText) ? $btnText : 'Guardar'}}" />
