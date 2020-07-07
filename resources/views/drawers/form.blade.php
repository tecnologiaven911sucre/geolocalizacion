@csrf
        <div class="form-group">
            <label for="code">Codigo:
            </label>
        <input type="text" class="form-control" id="code" name="code" placeholder="Ingrese su codigo" value="{{isset($drawers) ? $drawers->code : old('code')}}">
        {{$errors->first('code')}}
        </div>
        <div class="form-group">
            <label for="serial_t_lindus">Serial del t-lindus:
            </label>
        <input type="text" class="form-control" id="serial_t_lindus" name="serial_t_lindus" placeholder="Ingrese el serial del t-lindus" value="{{isset($drawers) ? $drawers->serial_t_lindus : old('serial_t_lindus')}}">{{$errors->first('serial_t_lindus')}}
        </div>
        <div class="form-group">
            <label for="ip_t_lindus">IP del t-lindus:
            </label>
        <input type="text" class="form-control" id="ip_t_lindus" name="ip_t_lindus" placeholder="Ingrese el IP del t-lindus" value="{{isset($drawers) ? $drawers->ip_t_lindus : old('ip_t_lindus')}}">{{$errors->first('ip_t_lindus')}}
        </div>
        <div class="form-group">
            <label for="status">Estado:
            </label>
        <select class="form-control form-control-sm" id="status" name="status">
            @foreach ($status as $ope)
                <option value="{{$ope->id}}">{{$ope->name}}</option>
            @endforeach
        </select>
    <!-- {{$errors->first('$status')}} -->
    </div>
    <div class="form-group">
        <label for="order">Orden:
        </label>
        <input type="text" class="form-control" id="order" name="order" placeholder="Ingrese la orden" value="{{isset($drawers) ? $drawers->order : old('order')}}">{{$errors->first('order')}}
    </div>
    <div class="form-group">
        <label for="circuit">Circuito:
        </label>
        <input type="text" class="form-control" id="circuit" name="circuit" placeholder="Ingrese el circuito" value="{{isset($drawers) ? $drawers->circuit :old('circuit')}}">{{$errors->first('circuit')}}
    </div>
    <div class="form-group">
        <label for="location">Ubicacion:
        </label>
        <input type="text" class="form-control" id="location" name="location" placeholder="Ingrese la ubicacion" value="{{isset($drawers) ? $drawers->location :old('location')}}">{{$errors->first('location')}}
    </div>
    <div class="form-group">
        <label for="vlan">VLAN:
        </label>
        <input type="text" class="form-control" id="vlan" name="vlan" placeholder="Ingrese el vlan" value="{{isset($drawers) ? $drawers->vlan : old('vlan')}}">{{$errors->first('vlan')}}
    </div>
    <div class="form-group">
        <label for="latitude">Latitud:
        </label>
        <input type="text" class="form-control" id="latitude" name="latitude" placeholder="Ingrese dato de latitud" value="{{isset($drawers) ? $drawers->latitude : old('latitude')}}">{{$errors->first('latitude')}}
    </div>
    <div class="form-group">
        <label for="length">Longitud:
        </label>
        <input type="text" class="form-control" id="length" name="length" placeholder="Ingrese la longitud" value="{{isset($drawers) ? $drawers->length : old('length')}}">{{$errors->first('length')}}
    </div>
    <div class="form-group">
        <label for="command_center">Centro de comando:</label>
        <select class="form-control" id="command_center" name="command_center">
        @foreach ($command as $stt)
    <option value="{{$stt->id}}">{{$stt->state}}</option>
        @endforeach
            </select>
            {{$errors->first('command_center')}}
        </div>
    <div class="form-group">
        <label for="photo">Foto:
        </label>
        @if(isset($drawers))        
            <img class="mb-3 ml-4" src="{{asset('storage').'/'.$drawers->photo }}" alt="" width="200">
            <br>
        @endif
        <input type="file"  id="photo" name="photo"  value="{{old('photo')}}">{{$errors->first('photo')}}
    </div>
    <input class="btn btn-primary" type="submit" value="{{isset($btnText) ? $btnText : 'Guardar'}}" />



        {{-- id	code	serial_t_lindus	ip_t_lindus	command_center	review	order	circuit	location	vlan	state --}}