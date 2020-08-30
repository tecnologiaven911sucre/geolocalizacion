@csrf
        <div class="form-group">
            <label for="tipo">Tipo de reporte:
            </label>
        <select class="form-control form-control-sm" id="tipo" name="tipo">
                <option>Seleccione una opcion</option>
                <option value="1">Reporte de diario</option>
                <option value="2">Reporte de camara</option>
                <option value="3">Reporte de cajon</option>
        </select>
        <!-- {{$errors->first('$status')}} -->
        </div>
        <div class="form-group">
            <label for="name">Estado:
            </label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Ingrese un nuevo estado de operatividad" value="{{ isset($status) ? $status->name : old('name') }}">
        {{$errors->first('name')}}
        </div>
        <div class="form-group">
            <label for="status">Estado:
            </label>
        <select class="form-control form-control-sm" id="status" name="status">
        
        </select>
        <div class="form-group">
            @foreach ($users->drawers() as $ope)
                <option value="{{$ope->id}}">{{$ope->name}}</option>
            @endforeach
        </div>
    <!-- {{$errors->first('$status')}} -->
    </div>
        
        <input class="btn btn-primary" type="submit" value="{{ isset($btnText) ? $btnText : 'Guardar'}}" />
