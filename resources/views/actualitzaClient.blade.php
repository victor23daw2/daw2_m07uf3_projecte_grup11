@extends('disseny')
@section('content')
<div class="card mt-5">
    <div class="card-header">
        Actualització de dades client
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
        <form method="post" action="{{ route('clients.update', $dades_client->Dni_client) }}">
			@csrf
            @method('PATCH')
            <div class="form-group">
                <label for="Dni_client">DNI del Client:</label>
                <input type="text" class="form-control" name="Dni_client" value="{{ $dades_client->Dni_client }}" required>
            </div>
            <div class="form-group">
                <label for="Nom_i_cognoms">Nombre y Apellidos:</label>
                <input type="text" class="form-control" name="Nom_i_cognoms" value="{{ $dades_client->Nom_i_cognoms }}" required>
            </div>
            <div class="form-group">
                <label for="Edat">Edad:</label>
                <input type="number" class="form-control" name="Edat" value="{{ $dades_client->Edat }}" required>
            </div>
            <div class="form-group">
                <label for="Telefon">Teléfono:</label>
                <input type="text" class="form-control" name="Telefon" value="{{ $dades_client->Telefon }}" required>
            </div>
            <div class="form-group">
                <label for="Adreca">Dirección:</label>
                <input type="text" class="form-control" name="Adreca" value="{{ $dades_client->Adreca }}" required>
            </div>
            <div class="form-group">
                <label for="Ciutat">Ciudad:</label>
                <input type="text" class="form-control" name="Ciutat" value="{{ $dades_client->Ciutat }}" required>
            </div>
            <div class="form-group">
                <label for="Pais">País:</label>
                <input type="text" class="form-control" name="Pais" value="{{ $dades_client->Pais }}" required>
            </div>
            <div class="form-group">
                <label for="Email">Email:</label>
                <input type="email" class="form-control" name="Email" value="{{ $dades_client->Email }}" required>
            </div>
            <div class="form-group">
                <label for="Numero_permis_conduccio">Numero_permis_conduccio:</label>
                <input type="number" class="form-control" name="Numero_permis_conduccio" value="{{ $dades_client->Numero_permis_conduccio }}" required>
            </div>
            <div class="form-group">
                <label for="Punts_permis_conduccio">Punts_permis_conduccio:</label>
                <input type="number" class="form-control" name="Punts_permis_conduccio" value="{{ $dades_client->Punts_permis_conduccio }}" required>
            </div>
            <div class="form-group">
                <label for="Tipus_targeta">Tipo de Tarjeta:</label>
                <select name="Tipus_targeta" class="form-control">
                    <option value="Dèbit" {{ $dades_client->Tipus_targeta == 'Dèbit' ? 'selected' : '' }}>Débito</option>
                    <option value="Crèdit" {{ $dades_client->Tipus_targeta == 'Crèdit' ? 'selected' : '' }}>Crédito</option>
                </select>
            </div>
            <div class="form-group">
                <label for="Numero_targeta">Número de la Tarjeta:</label>
                <input type="text" class="form-control" name="Numero_targeta" value="{{ $dades_client->Numero_targeta }}" required>
            </div>
			<button type="submit" class="btn btn-block btn-primary">Envia</button>
        </form>
    </div>
</div>
<br><a href="{{ url('clients') }}">Accés directe a la Llista de clients</a
@endsection