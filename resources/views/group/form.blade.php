@csrf
        <div class="form-group">
            <label for="description">Nombre del grupo:
            </label>
        <input type="text" class="form-control" id="description" name="description" placeholder="Ingrese un nombre para asignar a un grupo" value="{{ isset($groups) ? $groups->description : old('description') }}">
        {{$errors->first('description')}}
        </div>
        
        <input class="btn btn-primary" type="submit" value="{{ isset($btnText) ? $btnText : 'Guardar'}}" />
