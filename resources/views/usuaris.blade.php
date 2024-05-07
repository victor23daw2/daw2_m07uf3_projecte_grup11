@extends('disseny')

@section('content')
<h1>Llista d'Usuaris</h1>
<div class="mt-5">
<table class="table">
    <thead>
        <tr class="table-primary">
            <td>Nom i cognoms</td>
            <td>Email</td>
            <td>Contrasenya</td>
            <td>Tipus</td>
            <td>Darrera hora d'entrada</td>
            <td>Darrera hora de sortida</td>
        </tr>
        <td>Accions sobre la taula</td> 
    </thead>
    <tbody>
    @foreach($dades_usuaris as $usuari)
        <tr>
            <td>{{$usuari->nom_i_cognoms}}</td>
            <td>{{$usuari->email}}</td>
            <td>{{$usuari->contrasenya}}</td>
            <td>{{$usuari->tipus}}</td>
            <td>{{$usuari->darrera_hora_entrada}}</td>
            <td>{{$usuari->darrera_hora_sortida}}</td>
        </tr>
    @endforeach
    </tbody>
</table>
</div>
<div class="p-6 bg-white border-b border-gray-200">
 <a href="{{ url('dashboard') }}">Torna al dashboard<a/>
 </div>
@endsection
