@extends('nav_bar')
@section('contenido')


	<title>Administrar</title>

	<table width="100%" border="1">
		<thead>
			<th>Folio</th>
			<th>Nombre</th>
		<!--	<th>Tipo</th>
			<th>Diplomado</th>
			<th>Objetivo</th>
			<th>Fecha de Inicio</th>
			<th>Fecha Fin</th>
			<th>Lugar</th>
			<th>Duracion</th>
			<th>Hora Inicio</th>
			<th>Hora Fin</th>
			<th>Dirigido</th>  -->
			<th>Observaciones</th>
			<th>Opciones</th>
		</thead>
		<tbody>
			@foreach($cursos as $curso)
			<tr>
				<td>{{ $curso->cursoID}}</td>
				<td>{{ $curso->nombre}}</td>
			<!--	<td>{{ $curso->tipo}}</td>
				<td>{{ $curso->diplomado}}</td>
				<td>{{ $curso->objetivo}}</td>
				<td>{{ $curso->fechaInicio}}</td>
				<td>{{ $curso->fechaFin}}</td>
				<td>{{ $curso->lugar}}</td>
				<td>{{ $curso->duracion}}</td>
				<td>{{ $curso->horaInicio}}</td>
				<td>{{ $curso->horaFin}}</td>
				<td>{{ $curso->dirigido}}</td> -->
				<td>{{ $curso->observaciones}}</td>
				<td>
					<a href="{{route('curso.edit',$curso->cursoID)}}">Edit</a>

					<form method="POST" action="{{route('curso.destroy',$curso->cursoID)}}">

						{!! csrf_field()!!}
						{!! method_field('DELETE')!!}

						<button type="submit">Eliminar</button>
					</form>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>


	@stop