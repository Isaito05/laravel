

<h1>{{$modo}} Empleado</h1>

@if(count($errors)>0)

    <div class="alert alert-danger" role="alert">
        <ul>
        @foreach($errors -> all() as $error)
        <li>{{$error}}</li>
        @endforeach
        </ul>
   
    </div>
    
@endif

<div class="form-group">
<label for="Nombres">Nombres</label>
<input type="text" class="form-control" name="Nombres" value="{{ isset($empleado->Nombres)?$empleado->Nombres:old('Nombres')}}" id="nombres">
</div>

<div class="form-group">
<label for="Apellidos">Apellidos</label>
<input type="text" class="form-control" name="Apellidos"  value="{{ isset($empleado->Apellidos)?$empleado->Apellidos:old('Apellidos')}}" id="apellidos">
</div>

<div class="form-group">
<label for="Celular">Celular</label>
<input type="number" class="form-control" name="Celular"  value="{{ isset($empleado->Celular)?$empleado->Celular:old('Celular')}}" id="celular">
</div>

<div class="form-group">
<label for="Correo">Correo</label>
<input type="email" class="form-control" name="Correo"  value="{{ isset($empleado->Correo)?$empleado->Correo:old('Correo')}}" id="correo">
</div>

<div class="form-group">
<label for="Foto">Foto</label><br>
@if(isset($empleado->Foto))
<td><img class="img-thumbnail img-fluid"  src="{{asset('storage').'/'.$empleado->Foto}}"  width="100" alt=""></td>
@endif
<input type="file" class="form-control" name="Foto"  id="foto">
</div><br>

<input class="btn btn-success" type="submit" value="{{ $modo }} datos">

<a href="{{ url('empleado')}}" class="btn btn-dark">Regresar</a>

<br>
