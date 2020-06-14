@csrf
        <div class="form-group">
            <label for="code">Codigo:
            </label>
        <input type="text" class="form-control" id="code" name="code" placeholder="Ingrese su codigo" value="{{old('code')}}">
        {{$errors->first('code')}}
        </div>
        <div class="form-group">
            <label for="serial_t_lindus">Serial del t-lindus:
            </label>
        <input type="text" class="form-control" id="serial_t_lindus" name="serial_t_lindus" placeholder="Ingrese el serial del t-lindus" value="{{old('serial_t_lindus')}}">{{$errors->first('serial')}}
        </div>
        <div class="form-group">
            <label for="ip_t_lindus">IP del t-lindus:
            </label>
        <input type="text" class="form-control" id="ip_t_lindus" name="ip_t_lindus" placeholder="Ingrese el IP del t-lindus" value="{{old('ip_t_lindus')}}">{{$errors->first('ip_t_lindus')}}
        </div>
        <div class="form-group">
            <label for="commad_center">Centro de Comando:
            </label>
        <input type="text" class="form-control" id="commad_center" name="commad_center" placeholder="Ingrese el centro de comando" value="{{old('commad_center')}}">{{$errors->first('commad_center')}}
        </div>
        <div class="form-group">
            <label for="order">Orden:
            </label>
        <input type="text" class="form-control" id="order" name="order" placeholder="Ingrese la orden" value="{{old('order')}}">{{$errors->first('order')}}
        </div>
        <div class="form-group">
            <label for="circuit">Circuito:
            </label>
        <input type="text" class="form-control" id="circuit" name="circuit" placeholder="Ingrese el circuito" value="{{old('circuit')}}">{{$errors->first('circuit')}}
        </div>
        <div class="form-group">
            <label for="vlan">VLAN:
            </label>
        <input type="text" class="form-control" id="vlan" name="vlan" placeholder="Ingrese el vlan" value="{{old('vlan')}}">{{$errors->first('vlan')}}
        </div>
        <div class="form-group">
            <label for="status">Estado:</label>
            <select class="form-control" id="status" name="status">
              <option value="1">Operativa</option>
              <option value="0">Inoperativa</option>
            </select>
            {{$errors->first('estado')}}
        </div>
    <input class="btn btn-primary" type="submit" value="{{isset($btnText) ? $btnText : 'Guardar'}}" />



        {{-- id	code	serial_t_lindus	ip_t_lindus	command_center	review	order	circuit	location	vlan	state --}}