@extends('layouts.app')
@section('content')
<div class="container">

@if(Session::has('mensaje'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
{{Session::get('mensaje')}}

<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif



<a href="{{ url('empleado/create')}}" class="btn btn-success">Registrar nuevo empleado</a><br><br>

<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>Foto</th>
            <th>Nombres</th>
            <th>Apellidos</th>
            <th>Celular</th>
            <th>Correo</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($empleados as $empleado)
        <tr>
            <td><img class="img-thumbnail img-fluid" src="{{asset('storage').'/'.$empleado->Foto}}" width="100" alt=""></td>
            <td>{{$empleado->Nombres}}</td>
            <td>{{$empleado->Apellidos}}</td>
            <td>{{$empleado->Celular}}</td>
            <td>{{$empleado->Correo}}</td>
            <td>
                <a href="{{ url('/empleado/'.$empleado->id.'/edit')}}" class="btn btn-primary">
                Editar
                </a>    
                | 
               <form action="{{ url('/empleado/'.$empleado->id)}}" class="d-inline" method="post">
                @csrf
                {{ method_field('DELETE') }}
                 <input class="btn btn-danger" type="submit" onclick="return confirm('¿Quieres eliminar?')" value="Eliminar">
               </form> 
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
{!! $empleados->links() !!}
</div>
@endsection