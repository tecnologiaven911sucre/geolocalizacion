@csrf
        <div class="form-group">
            <label for="name">Estado:
            </label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Ingrese un nuevo estado de operatividad" value="{{ isset($status) ? $status->name : old('name') }}">
        {{$errors->first('name')}}
        </div>
        
        
        <input class="btn btn-primary" type="submit" value="{{ isset($btnText) ? $btnText : 'Guardar'}}" />
