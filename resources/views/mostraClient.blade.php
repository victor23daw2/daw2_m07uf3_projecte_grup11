@extends('disseny')
@section('content')
<h1>Dades del client</h1>
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
			<td>Dni_client</td>
			<td>{{$dades_client->Dni_client}}</td>
		</tr>
		<tr>
			<td>Nom_i_cognoms</td>
			<td>{{$dades_client->Nom_i_cognoms}}</td>
		</tr>
		<tr>
			<td>Edat</td>
			<td>{{$dades_client->Edat}}</td>
		</tr>
		<tr>
			<td>Telefon</td>
			<td>{{$dades_client->Telefon}}</td>
		</tr>
		<tr>
			<td>Adreca</td>
			<td>{{$dades_client->Adreca}}</td>
		</tr>
		<tr>
			<td>Ciutat</td>
			<td>{{$dades_client->Ciutat}}</td>
		</tr>
		<tr>
			<td>Adreça</td>
			<td>{{$dades_client->adressa}}</td>
		</tr>
		<tr>
			<td>Pais</td>
			<td>{{$dades_client->Pais}}</td>
		</tr>
		<tr>
			<td>Email</td>
			<td>{{$dades_client->Email}}</td>
		</tr>
		<tr>
			<td>Numero_permis_conduccio</td>
			<td>{{$dades_client->Numero_permis_conduccio}}</td>
		</tr>
		<tr>
			<td>Punts_permis_conduccio</td>
			<td>{{$dades_client->Punts_permis_conduccio}}</td>
		</tr>
		<tr>
			<td>Tipus_targeta</td>
			<td>{{$dades_client->Tipus_targeta}}</td>
		</tr>
		<tr>
			<td>Numero_targeta</td>
			<td>{{$dades_client->Numero_targeta}}</td>
		</tr>
	</tbody>	
  </table>
  <div class="p-6 bg-white border-b border-gray-200">
	<a href="{{ url('dashboard') }}">Torna al dashboard<a/>                     
  </div>
  <div class="p-6 bg-white border-b border-gray-200">
	<a href="{{ url('clients') }}">Torna a la llista<a/>
  </div>
<div>
@endsection