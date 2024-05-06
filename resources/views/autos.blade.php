@extends('disseny')

@section('content')
<h1>Llista d'Autos</h1>
<div class="mt-5">
<table class="table">
    <thead>
        <tr class="table-primary">
            <td>Matricula_auto</td>
            <td>Nombre de bastidor</td>
            <td>Marca</td>
            <td>Model</td>
            <td>Color</td>
            <td>Nombre de places</td>
            <td>Nombre de portes</td>
            <td>Grandària del maleter</td>
            <td>Tipus de combustible</td>
        </tr>
    </thead>
    <tbody>
    @foreach($dades_auto as $auto)
        <tr>
            <td>{{$auto->Matricula_auto}}</td>
            <td>{{$auto->Numero_bastidor}}</td>
            <td>{{$auto->Marca}}</td>
            <td>{{$auto->Model}}</td>
            <td>{{$auto->Color}}</td>
            <td>{{$auto->Nombre_places}}</td>
            <td>{{$auto->Nombre_portes}}</td>
            <td>{{$auto->Grandaria_maleter}}</td>
            <td>{{$auto->Tipus_combustible}}</td>
        </tr>
    @endforeach
    </tbody>
</table>
</div>
<div class="p-6 bg-white border-b border-gray-200">
 <a href="{{ url('dashboard') }}">Torna al dashboard<a/>
 </div>
@endsection
