@extends('disseny')

@section('content')
<h1>Llista de Clients</h1>
<div class="mt-5">
<table class="table">
    <thead>
        <tr class="table-primary">
            <td>DNI</td>
            <td>Nom i Cognoms</td>
            <td>Edat</td>
            <td>Telèfon</td>
            <td>Adreça</td>
            <td>Ciutat</td>
            <td>Pais</td>
            <td>Email</td>
            <td>Numero_permis_conduccio</td>
            <td>Punts_permis_conduccio</td>
            <td>Tipus_targeta</td>
            <td>Numero_targeta</td>
            <td>Accions sobre la taula</td> 
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
        <td class="text-left">
            <a href="{{ route('clients.edit', $client->Dni_client)}}" class="btn btn-primary btn-sm">Edita</a>
            <form action="{{ route('clients.destroy', $client->Dni_client)}}" method="post" style="display: inline-block">
  @csrf
  @method('DELETE')
  <button class="btn btn-danger btn-sm" type="submit">
   Esborra
  </button>
 </form>
 </td>
    @endforeach
    </tbody>
</table>
</div>
<div class="p-6 bg-white border-b border-gray-200">
 <a href="{{ url('dashboard') }}">Torna al dashboard<a/>
 </div>
@endsection
