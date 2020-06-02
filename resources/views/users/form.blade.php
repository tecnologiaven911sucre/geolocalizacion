<div class="form-group">
    <label for="ip">Nombre:
    </label>
<input type="text" class="form-control" id="name" name="name" placeholder="Ingrese el Nombre" value="{{$user->name}}">
{{$errors->first('name')}}
</div>
<div class="form-group">
    <label for="serial">Email:
    </label>
<input type="text" class="form-control" id="serial" name="serial" placeholder="Ingrese el serial" value="{{$user->email}}">{{$errors->first('serial')}}
</div>
