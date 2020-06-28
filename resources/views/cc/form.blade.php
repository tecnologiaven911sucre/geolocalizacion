@csrf
        <div class="form-group">
            <label for="cc">Centro de comando:
            </label>
        <input type="text" class="form-control" id="cc" name="cc" placeholder="Ingrese el centro de comando" value="{{ isset($cc) ? $cc->name : old('cc') }}">
        {{$errors->first('cc')}}
        </div>
        
        
        <input class="btn btn-primary" type="submit" value="{{ isset($btnText) ? $btnText : 'Guardar'}}" />



        {{-- id	code	serial_t_lindus	ip_t_lindus	command_center	review	order	circuit	location	vlan	state --}}