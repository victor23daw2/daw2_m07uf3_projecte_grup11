@extends('disseny')
@section('content')
<div class="card mt-5">
    <div class="card-header">
        Actualització de dades lloga
    </div>
    <div class="card-body">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <form method="POST" action="{{ route('lloga.update', ['Dni_client' => $dades_lloga->Dni_client, 'Matricula_auto' => $dades_lloga->Matricula_auto]) }}">			@csrf
            @method('patch')
            <div class="form-group">
                <label for="Dni_client">Dni_client:</label>
                <input type="text" class="form-control" name="Dni_client" value="{{ $dades_lloga->Dni_client }}" required>
            </div>
            <div class="form-group">
                <label for="Matricula_auto">Matricula_auto:</label>
                <input type="text" class="form-control" name="Matricula_auto" value="{{ $dades_lloga->Matricula_auto }}" required>
            </div>
            <div class="form-group">
                <label for="Data_prestec">Data_prestec:</label>
                <input type="date" class="form-control" name="Data_prestec" value="{{ $dades_lloga->Data_prestec }}" required>
            </div>
            <div class="form-group">
                <label for="Data_devolucio">Data_devolucio:</label>
                <input type="date" class="form-control" name="Data_devolucio" value="{{ $dades_lloga->Data_devolucio }}" required>
            </div>
            <div class="form-group">
                <label for="Lloc_devolucio">Lloc_devolucio:</label>
                <input type="text" class="form-control" name="Lloc_devolucio" value="{{ $dades_lloga->Lloc_devolucio }}" required>
            </div>
            <div class="form-group">
                <label for="Preu_per_dia">Preu_per_dia:</label>
                <input type="text" class="form-control" name="Preu_per_dia" value="{{ $dades_lloga->Preu_per_dia }}" required>
            </div>
            <div class="form-group">
                    <label for="Prestec_amb_retorn_deposit_ple">Prestec_amb_retorn_deposit_ple:</label>
                    <select name="Prestec_amb_retorn_deposit_ple" class="form-control" required>
                        <option value="sí" {{ $dades_lloga->diposit ? 'selected' : '' }}>Sí</option>
                        <option value="no" {{ !$dades_lloga->diposit ? 'selected' : '' }}>No</option>
                    </select>
                </div>
            <div class="form-group">
                <label for="Tipus_assegurança">Tipus_assegurança:</label>
                <input type="Tipus_assegurança" class="form-control" name="Tipus_assegurança" value="{{ $dades_lloga->Tipus_assegurança }}" required>
            </div>
            </div>
			<button type="submit" class="btn btn-block btn-primary">Envia</button>
        </form>
    </div>
</div>
<br><a href="{{ url('lloga') }}">Llista de lloguers</a
@endsection