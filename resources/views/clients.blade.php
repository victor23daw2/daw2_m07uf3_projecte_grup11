@extends('disseny')

@section('content')
<h1>Llista de Clients</h1>
<div class="mt-5">
<table class="table">
    <thead>
        <tr class="table-primary">
            <td>DNI</td>
            <td>Nom i Cognoms</td>
            <td>Adreça</td>
            <td>Telèfon</td>
            <td>Email</td>
            <td>Data de Naixement</td>
            <td>Sexe</td>
        </tr>
    </thead>
    <tbody>
    @foreach($dades_client as $client)
        <tr>
            <td>{{$client->Dni_client}}</td>
            <td>{{$client->Nom_i_cognoms}}</td>
            <td>{{$client->Edat}}</td>
            <td>{{$client->Telefon}}</td>
            <td>{{$client->Adreca}}</td>
            <td>{{$client->Ciutat}}</td>
            <td>{{$client->Pais}}</td>
            <td>{{$client->Email}}</td>
            <td>{{$client->Numero_permis_conduccio}}</td>
            <td>{{$client->Punts_permis_conduccio}}</td>
            <td>{{$client->Tipus_targeta}}</td>
            <td>{{$client->Numero_targeta}}</td>
        </tr>
    @endforeach
    </tbody>
</table>
</div>
<div class="p-6 bg-white border-b border-gray-200">
 <a href="{{ url('dashboard') }}">Torna al dashboard<a/>
 </div>
@endsection
