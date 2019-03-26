@extends('nav_bar')
@section('contenido')

	<title>Show</title>
		<p>Enviado por {{$curso->nombre}} - {{$curso->cursoID}}</p>

		<p>{{$curso->objetivo}}</p>
@stop