@extends('layouts.app', ['pageSlug' => 'dashboard'])

@section('content')

<div class="row">
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"> <h4>Actualizar Asignatura</h4>
@if (count($errors)>0)
<div class="alert alert-danger">
<ul>
@foreach ($errors->all() as $error) <li>{{$error}}</li>
@endforeach
</ul> </div>
@endif
    </div>
</div>
<form action="{{route('asignatura.update',$asignaturas->id)}}" method="post">
{{Form::token()}}
@method('PUT')

<div class="row">
<div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
<div class="form-group">
<label for="codigo">Codigo</label>
<input type="number" name="codigo" id="codigo" value="{{ isset($asignaturas->codigo)?$asignaturas->codigo:old('codigo') }}" class="form-control" placeholder="Digite el codigo de asignatura"> </div>
</div>
<div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
<div class="form-group">
<label for="nombre">Nombre de la asignatura</label>
<input type="text" name="nombre" id="nombre" value="{{ isset($asignaturas->nombre)?$asignaturas->nombre:old('nombre') }}" class="form-control" placeholder="Nombre de asignatura">
</div>
</div>
<div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
<div class="form-group">
<label for="creditos">Creditos</label>
<input type="text" name="creditos" id="creditos" value="{{ isset($asignaturas->creditos)?$asignaturas->creditos:old('creditos') }}" class="form-control" placeholder="Creditos de la asignatura">
</div>
    </div>
<div class="col-lg-6 col-md-12 col-sm-6 col-xs-12">
<div class="form-group"> <br>
<button class="btn btn-primary" type="submit"><span class="glyphicon glyphicon-ok"></span> Guardar</button>
<button class="btn btn-danger" href="/asignatura"><span class="glyphicon glyphicon-remove"></span> Atrás</button>
        </div>
    </div>
</div>
</form>

@endsection
