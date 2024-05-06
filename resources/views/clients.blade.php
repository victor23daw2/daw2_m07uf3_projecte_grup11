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
            <td>{{$client->dni}}</td>
            <td>{{$client->nom_i_cognoms}}</td>
            <td>{{$client->adreca}}</td>
            <td>{{$client->telefon}}</td>
            <td>{{$client->email}}</td>
            <td>{{$client->data_naixement}}</td>
            <td>{{$client->sexe}}</td>
        </tr>
    @endforeach
    </tbody>
</table>
</div>
<div class="p-6 bg-white border-b border-gray-200">
 <a href="{{ url('dashboard') }}">Torna al dashboard<a/>
 </div>
@endsection
