@extends('disseny')
@section('content')
<div class="card mt-5">
    <div class="card-header">
        Actualització de dades Auto
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
        <form method="post" action="{{ route('autos.update', $dades_auto->Matricula_auto) }}">
			@csrf
            @method('PATCH')
            <div class="form-group">           
				<label for="Matricula_auto">Matricula_auto</label>
				<input type="text" class="form-control" name="Matricula_auto" value="{{ $dades_auto->Matricula_auto }}" />
			</div>
			<div class="form-group">           
				<label for="Numero_bastidor">Numero_bastidor</label>
				<input type="text" class="form-control" name="Numero_bastidor" value="{{ $dades_auto->Numero_bastidor }}"/>
			</div>
			<div class="form-group">           
				<label for="Marca">Marca</label>
				<input type="text" class="form-control" name="Marca" value="{{ $dades_auto->Marca }}"/>
			</div>
			<div class="form-group">           
				<label for="Model">Model</label>
				<input type="text" class="form-control" name="Model" value="{{ $dades_auto->Model }}"/>
			</div>
			<div class="form-group">           
                <label for="Adreca">Adreça</label>
				<input type="text" class="form-control" name="Adreca"  value="{{ $dades_auto->Adreca }}"/>
			</div>        
			<div class="form-group">
                <label for="Color">Color</label>
				<input type="text" class="form-control" name="Color"  value="{{ $dades_auto->Color }}"/>
			</div>
			<div class="form-group">
                <label for="Pais">Pais</label>
				<input type="text" class="form-control" name="Pais"  value="{{ $dades_auto->Pais }}"/>
			</div>
			<div class="form-group">
                <label for="Nombre_places">Nombre_places</label>
				<input type="number" class="form-control" name="Nombre_places"  value="{{ $dades_auto->Nombre_places }}"/>
			</div>
			<div class="form-group">           
                <label for="Nombre_portes">Nombre_portes</label>
				<input type="number" class="form-control" name="Nombre_portes" value="{{ $dades_auto->Nombre_portes }}"/>
			</div>
            <div class="form-group">           
                <label for="Grandaria_maleter">Grandaria_maleter</label>
				<input type="text" class="form-control" name="Grandaria_maleter" value="{{ $dades_auto->Grandaria_maleter }}"/>
			</div> 
            <div class="form-group">           
                <label for="Tipus_combustible">Tipus_combustible</label>
                <select name="Tipus_combustible">					
                    <option value="gasolina" {{ $dades_auto->Tipus_combustible == "gasolina" ? 'selected' : ''}}>gasolina</option>
                    <option value="diesel" {{ $dades_auto->Tipus_combustible == "diesel" ? 'selected' : ''}}>diesel</option>					    
                    <option value="elèctric" {{ $dades_auto->Tipus_combustible == "elèctric" ? 'selected' : ''}}>elèctric</option>					    
                </select>
            </div>
			<button type="submit" class="btn btn-block btn-primary">Envia</button>
        </form>
    </div>
</div>
<br><a href="{{ url('autos') }}">Accés directe a la Llista d'autos</a
@endsection