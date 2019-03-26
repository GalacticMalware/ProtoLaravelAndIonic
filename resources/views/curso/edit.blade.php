@extends('nav_bar')
@section('contenido')

	<title>Editar</title>

	<h1> Editar el curso {{ $curso->nombre }}</h1>


	<form method="POST" action="{{route('curso.update',$curso->cursoID)}}">

		{!!method_field('PUT')!!}
	{!!csrf_field()!!}

	<p><label for="nombre">Nombre
		<input class="form-control" type="text" name="nombre" value="{{$curso->nombre}}">
		{!!$errors->first('nombre','<span class=error>:message</span>')!!} </input>
	</label></p>

	
 	<select for="tipo" name="tipo">
  		<option value="voaaalvo">Formacion Docente</option>
  		<option value="saabaaaa">Actualizacion Docente</option>	
</select> 

	<p><label for="diplomado">Diplomado:
		<input class="form-control" type="text" name="diplomado" value="{{$curso->diplomado}}">
		{!!$errors->first('diplomado','<span class=error>:message</span>')!!} </input>
	</label></p>

	<p><label for="objetivo">Objetivo
		<input class="form-control" type="text" name="objetivo" value="{{$curso->objetivo}}">
		{!!$errors->first('objetivo','<span class=error>:message</span>')!!} </input>
	</label></p>

	<p><label for="duracion">Duracion
		<input class="form-control" type="text" name="duracion" value="{{$curso->duracion}}">
		{!!$errors->first('duracion','<span class=error>:message</span>')!!} </input>
	</label></p>

	<p><label for="horaInicio">Hora Inicio
		<input class="form-control" type="time" name="horaInicio" value="{{$curso->horaInicio}}">
		{!!$errors->first('horaInicio','<span class=error>:message</span>')!!} </input>
	</label></p>

	<p><label for="horaFin">Hora Termino
		<input class="form-control" type="time" name="horaFin" value="{{$curso->horaFin}}">
		{!!$errors->first('horaFin','<span class=error>:message</span>')!!} </input>
	</label></p>

	<p><label for="fechaInicio">Fecha Inicio
		<input class="form-control" type="date" name="fechaInicio" value="{{$curso->fechaInicio}}">
		{!!$errors->first('fechaInicio','<span class=error>:message</span>')!!} </input>
	</label></p>

	<p><label for="fechaFin">Fecha Termino
		<input class="form-control" type="date" name="fechaFin" value="{{$curso->fechaFin}}">
		{!!$errors->first('fechaFin','<span class=error>:message</span>')!!} </input>
	</label></p>

		
		<p><label for="lugar">Lugar
		<input class="form-control" type="text" name="lugar" value="{{$curso->lugar}}">
		{!!$errors->first('lugar','<span class=error>:message</span>')!!} </input>
	</label></p>

	<p><label for="dirigido">Dirigido a
		<input class="form-control" type="text" name="dirigido" value="{{$curso->dirigido}}">
		{!!$errors->first('dirigido','<span class=error>:message</span>')!!} </input>
	</label></p>

	<p><label for="observaciones">Observaciones
		<input class="form-control" type="text" name="observaciones" value="{{$curso->observaciones}}">
		{!!$errors->first('observaciones','<span class=error>:message</span>')!!} </input>
	</label></p>

<p><label for="cupo">Cupo
		<input class="form-control" type="number" name="cupo" value="{{$curso->cupo}}">
		{!!$errors->first('cupo','<span class=error>:message</span>')!!} </input>
	</label></p>



	<input type="submit" value="Enviar">
</form>



@stop