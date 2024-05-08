@extends('disseny')
@section('content')
<h1>Dades del Auto</h1>
<div class="mt-5">
  <table class="table table-striped table-bordered table-hover">
	<thead class="thead-dark">
		<tr class="table-primary">
			<th scope="col">CAMP</td>
			<th scope="col">VALOR</td>
        </tr>
	</thead>
	<tbody>
		<tr>
			<td>Matricula_auto</td>
			<td>{{$dades_auto->Matricula_auto}}</td>
		</tr>
		<tr>
			<td>Numero_bastidor</td>
			<td>{{$dades_auto->Numero_bastidor}}</td>
		</tr>
		<tr>
			<td>Marca</td>
			<td>{{$dades_auto->Marca}}</td>
		</tr>
		<tr>
			<td>Model</td>
			<td>{{$dades_auto->Model}}</td>
		</tr>
		<tr>
			<td>Color</td>
			<td>{{$dades_auto->Color}}</td>
		</tr>
		<tr>
			<td>Nombre_places</td>
			<td>{{$dades_auto->Nombre_places}}</td>
		</tr>
		<tr>
			<td>Nombre_portes</td>
			<td>{{$dades_auto->Nombre_portes}}</td>
		</tr>
		<tr>
			<td>Grandaria_maleter</td>
			<td>{{$dades_auto->Grandaria_maleter}}</td>
		</tr>
		<tr>
			<td>Tipus_combustible</td>
			<td>{{$dades_auto->Tipus_combustible}}</td>
		</tr>
	</tbody>	
  </table>
  <div class="p-6 bg-white border-b border-gray-200">
	<a href="{{ url('dashboard') }}">Torna al dashboard<a/>                     
  </div>
  <div class="p-6 bg-white border-b border-gray-200">
	<a href="{{ url('autos') }}">Torna a la llista<a/>
  </div>
<div>
@endsection