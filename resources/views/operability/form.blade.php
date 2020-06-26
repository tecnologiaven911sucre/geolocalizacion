@csrf
        <div class="form-group">
            <label for="operability">Estado:
            </label>
        <input type="text" class="form-control" id="operability" name="operability" placeholder="Ingrese un nuevo estado de operatividad" value="{{ isset($status) ? $status->operability : old('operability') }}">
        {{$errors->first('operability')}}
        </div>
        
        
        <input class="btn btn-primary" type="submit" value="{{ isset($btnText) ? $btnText : 'Guardar'}}" />



        {{-- id	code	serial_t_lindus	ip_t_lindus	command_center	review	order	circuit	location	vlan	state --}}