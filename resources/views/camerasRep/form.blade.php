
        @csrf        
        <div class="form-group">
            <label for="ip">Direccion IP:
            </label>
        <input type="text" class="form-control" id="ip" name="ip" placeholder="Ingrese la direccion IP" value="{{old('ip')}}">
        {{$errors->first('ip')}}
        </div>
        <div class="form-group">
            <label for="codigo">Codigo:
            </label>
        <input type="text" class="form-control" id="codigo" name="codigo" placeholder="Ingrese el codigo" value="{{old('codigo')}}">
        </div>{{$errors->first('codigo')}}
        <div class="form-group">
            <label for="serial">Serial:
            </label>
        <input type="text" class="form-control" id="serial" name="serial" placeholder="Ingrese el serial" value="{{old('serial')}}">{{$errors->first('serial')}}
        </div>
        <div class="form-group">
            <label for="status">Estado:
            </label>
        <select class="form-control form-control-sm" id="cajas" name="cajas">
            @foreach ($drawers as $ope)
                <option value="{{$ope->id}}">{{$ope->name}}</option>
            @endforeach
        </select>
        <select class="form-control form-control-sm" id="status" name="status">
            @foreach ($status as $ope)
                <option value="{{$ope->id}}">{{$ope->name}}</option>
            @endforeach
        </select>
        <input class="btn btn-primary" type="submit"  />