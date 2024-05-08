@extends('disseny')
@section('content')
<h1>Dades del lloguer</h1>
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
			<td>{{$dades_lloga->Dni_client}}</td>
		</tr>
		<tr>
			<td>Matricula_auto</td>
			<td>{{$dades_lloga->Matricula_auto}}</td>
		</tr>
		<tr>
			<td>Data_prestec</td>
			<td>{{$dades_lloga->Data_prestec}}</td>
		</tr>
		<tr>
			<td>Data_devolucio</td>
			<td>{{$dades_lloga->Data_devolucio}}</td>
		</tr>
		<tr>
			<td>Lloc_devolucio</td>
			<td>{{$dades_lloga->Lloc_devolucio}}</td>
		</tr>
		<tr>
			<td>Preu_per_dia</td>
			<td>{{$dades_lloga->Preu_per_dia}}</td>
		</tr>
		<tr>
			<td>Prestec_amb_retorn_deposit_ple</td>
			<td>{{$dades_lloga->Prestec_amb_retorn_deposit_ple}}</td>
		</tr>
		<tr>
			<td>Tipus_assegurança</td>
			<td>{{$dades_lloga->Tipus_assegurança}}</td>
		</tr>
	</tbody>	
  </table>
  <div class="p-6 bg-white border-b border-gray-200">
	<a href="{{ url('dashboard') }}">Torna al dashboard<a/>                     
  </div>
  <div class="p-6 bg-white border-b border-gray-200">
	<a href="{{ url('lloga') }}">Torna a la llista<a/>
  </div>
<div>
@endsection