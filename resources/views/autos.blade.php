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
            <td>{{$auto->matricula_auto}}</td>
            <td>{{$auto->numero_bastidor}}</td>
            <td>{{$auto->marca}}</td>
            <td>{{$auto->model}}</td>
            <td>{{$auto->color}}</td>
            <td>{{$auto->nombre_places}}</td>
            <td>{{$auto->nombre_portes}}</td>
            <td>{{$auto->grandaria_maleter}}</td>
            <td>{{$auto->tipus_combustible}}</td>
        </tr>
    @endforeach
    </tbody>
</table>
</div>
<div class="p-6 bg-white border-b border-gray-200">
 <a href="{{ url('dashboard') }}">Torna al dashboard<a/>
 </div>
@endsection
