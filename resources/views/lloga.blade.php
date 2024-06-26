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
            <td>Accions sobre la taula</td> 
        </tr>
    </thead>
    <tbody>
    @foreach($dades_lloga as $lloguer)
        <tr>
            <td>{{$lloguer->Dni_client}}</td>
            <td>{{$lloguer->Matricula_auto}}</td>
            <td>{{$lloguer->Data_prestec}}</td>
            <td>{{$lloguer->Data_devolucio}}</td>
            <td>{{$lloguer->Lloc_devolucio}}</td>
            <td>{{$lloguer->Preu_per_dia}}</td>
            <td>{{$lloguer->Prestec_amb_retorn_deposit_ple}}</td>
            <td>{{$lloguer->Tipus_assegurança}}</td>
            <td class="text-left">
                    <a href="{{ route('lloga.edit', ['Dni_client' => $lloguer->Dni_client, 'Matricula_auto' => $lloguer->Matricula_auto]) }}" class="btn btn-primary btn-sm">Edita</a>
                    <form action="{{ route('lloga.destroy', ['Dni_client' => $lloguer->Dni_client, 'Matricula_auto' => $lloguer->Matricula_auto]) }}" method="post" style="display: inline-block">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm" type="submit">
                            Esborra
                        </button>
                    </form>
                    <a href="{{ route('lloga.show', ['Dni_client' => $lloguer->Dni_client, 'Matricula_auto' => $lloguer->Matricula_auto]) }}" class="btn btn-info btn-sm">Mostra</a> </td>
        </tr>
</tbody>
</table>
    @endforeach
</div>
<div class="p-6 bg-white border-b border-gray-200">
    <a href="{{ url('dashboard') }}">Torna al dashboard<a/>
</div>
@endsection
