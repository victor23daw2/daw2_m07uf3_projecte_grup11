@extends('disseny')

@section('content')
<h1>Llista de Lloguer</h1>
<div class="mt-5">
<table class="table">
    <thead>
        <tr class="table-primary">
            <td>DNI Client</td>
            <td>Matricula Auto</td>
            <td>Data del Préstec</td>
            <td>Data de Devolució</td>
            <td>Lloc de Devolució</td>
            <td>Preu per Dia</td>
            <td>Préstec amb Retorn de Dipòsit Ple</td>
            <td>Tipus d'Assegurança</td>
        </tr>
    </thead>
    <tbody>
    @foreach($dades_lloga as $lloguer)
        <tr>
            <td>{{$lloguer->dni_client}}</td>
            <td>{{$lloguer->matricula_auto}}</td>
            <td>{{$lloguer->data_prestec}}</td>
            <td>{{$lloguer->data_devolucio}}</td>
            <td>{{$lloguer->lloc_devolucio}}</td>
            <td>{{$lloguer->preu_per_dia}}</td>
            <td>{{$lloguer->prestec_retorn_diposit_ple}}</td>
            <td>{{$lloguer->tipus_asseguranca}}</td>
        </tr>
    @endforeach
    </tbody>
</table>
</div>
<div class="p-6 bg-white border-b border-gray-200">
 <a href="{{ url('dashboard') }}">Torna al dashboard<a/>
 </div>
@endsection
