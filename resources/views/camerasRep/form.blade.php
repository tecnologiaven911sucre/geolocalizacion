
        @csrf        
        <div class="form-group">
            <label for="ip_camera">Direccion IP:
            </label>
        <input type="text" class="form-control" id="ip_camera" name="ip_camera" placeholder="Ingrese la direccion IP" value="{{old('ip_camera')}}">
        
         {{ $errors->first('ip_camera') }}
        </div>
        <div class="form-group">
            <label for="cajas">Caja:
            </label>
             {{dd($drawers->cameras->ip_camera) }}  
        <select class="form-control form-control-sm" id="cajas" name="cajas">
            @foreach ($drawers as $drawer)
             
                <option value="{{$drawer->id}}">{{$drawer->code}}</option>
            @endforeach
        </select>
        </div>
        <div class="form-group">
            <label for="status">Estado:</label>
            <select class="form-control form-control-sm" id="status" name="status">
                @foreach ($status as $ope)
                    <option value="{{$ope->id}}">{{$ope->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="photo">Foto:
            </label>
            @if(isset($cameras))        
                <img class="mb-3 ml-4" src="{{asset('storage').'/'.$cameras->photo }}" alt="" width="200">
                <br>
            @endif
            <input type="file"  id="photo" name="photo"  value="{{old('photo')}}">{{$errors->first('photo')}}
        </div>
        <input class="btn btn-primary" type="submit" value="{{isset($btnText) ? $btnText : 'Guardar'}}" />