@extends('nav_bar')
@section('contenido')

<title>Ingresar Curso</title>



<form method="POST" action="{{route('curso.store')}}">

	<input class="form-control" type="hidden" name="_token" value="{{ csrf_token()}}">

	 {!!csrf_field()!!}

	<p><label for="nombre">Nombre
		<input class="form-control" type="text" name="nombre" value="{{old('nombre')}}">
		{!!$errors->first('nombre','<span class=error>:message</span>')!!} </input>
	</label></p>

	
 	<select for="tipo" name="tipo">
  		<option value="voaaalvo">Formacion Docente</option>
  		<option value="saabaaaa">Actualizacion Docente</option>	
</select> 

	<p><label for="diplomado">Diplomado:
		<input class="form-control" type="text" name="diplomado" value="{{old('nombre')}}">
		{!!$errors->first('diplomado','<span class=error>:message</span>')!!} </input>
	</label></p>

	<p><label for="objetivo">Objetivo
		<input class="form-control" type="text" name="objetivo" value="{{old('objetivo')}}">
		{!!$errors->first('objetivo','<span class=error>:message</span>')!!} </input>
	</label></p>

	<p><label for="duracion">Duracion
		<input class="form-control" type="text" name="duracion" value="{{old('duracion')}}">
		{!!$errors->first('duracion','<span class=error>:message</span>')!!} </input>
	</label></p>

	<p><label for="horaInicio">Hora Inicio
		<input class="form-control" type="time" name="horaInicio" value="{{old('horaInicio')}}">
		{!!$errors->first('horaInicio','<span class=error>:message</span>')!!} </input>
	</label></p>

	<p><label for="horaFin">Hora Termino
		<input class="form-control" type="time" name="horaFin" value="{{old('horaFin')}}">
		{!!$errors->first('horaFin','<span class=error>:message</span>')!!} </input>
	</label></p>

	<p><label for="fechaInicio">Fecha Inicio
		<input class="form-control" type="date" name="fechaInicio" value="{{old('fechaInicio')}}">
		{!!$errors->first('fechaInicio','<span class=error>:message</span>')!!} </input>
	</label></p>

	<p><label for="fechaFin">Fecha Termino
		<input class="form-control" type="date" name="fechaFin" value="{{old('fechaTermino')}}">
		{!!$errors->first('fechaFin','<span class=error>:message</span>')!!} </input>
	</label></p>

		
		<p><label for="lugar">Lugar
		<input class="form-control" type="text" name="lugar" value="{{old('lugar')}}">
		{!!$errors->first('lugar','<span class=error>:message</span>')!!} </input>
	</label></p>

	<p><label for="dirigido">Dirigido a
		<input class="form-control" type="text" name="dirigido" value="{{old('dirigido')}}">
		{!!$errors->first('dirigido','<span class=error>:message</span>')!!} </input>
	</label></p>

	<p><label for="observaciones">Observaciones
		<input class="form-control" type="text" name="observaciones" value="{{old('observaciones')}}">
		{!!$errors->first('observaciones','<span class=error>:message</span>')!!} </input>
	</label></p>

<p><label for="cupo">Cupo
		<input class="form-control" type="number" name="cupo" value="{{old('cupo')}}">
		{!!$errors->first('cupo','<span class=error>:message</span>')!!} </input>
	</label></p>



	<input type="submit" value="Enviar">
</form>


	@endsection