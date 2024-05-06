@extends('disseny')
@section('content')
<div class="card mt-5">
  <div class="card-header">
    Afegeix un nou auto
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
    <form method="post" action="/autos">
        @csrf
        <!-- https://laravel.com/docs/10.x/csrf -->
        <div class="form-group">           
            <label for="Matricula_auto">Matricula</label>
            <input type="text" class="form-control" name="Matricula_auto"/>
        </div>
        <div class="form-group">           
            <label for="Numero_bastidor">Nº Bastidor</label>
            <input type="text" class="form-control" name="Numero_bastidor"/>
        </div>
        <div class="form-group">           
            <label for="Marca">Marca</label>
            <input type="text" class="form-control" name="Marca"/>
        </div>
        <div class="form-group">           
            <label for="Model">Model</label>
            <input type="text" class="form-control" name="Model"/>
        </div>
        <div class="form-group">           
            <label for="Adreca">Adreça</label>
            <input type="text" class="form-control" name="Adreca"/>
        </div>        
        <div class="form-group">
            <label for="Color">Color</label>
            <input type="text" class="form-control" name="Color"/>
        </div>
        <div class="form-group">
            <label for="Pais">Pais</label>
            <input type="text" class="form-control" name="Pais"/>
        </div>
        <div class="form-group">
            <label for="Nombre_places">Nombre de places</label>
            <input type="number" class="form-control" name="Nombre_places"/>
        </div>
        <div class="form-group">           
            <label for="Nombre_portes">Nº portes</label>
            <input type="number" class="form-control" name="Nombre_portes"/>
        </div>
        <div class="form-group">           
            <label for="Grandaria_maleter"></label>Grandaria de maleter</label>
            <input type="text" class="form-control" name="Grandaria_maleter"/>
			</select>
        </div>
        <div class="form-group">           
            <label for="Tipus_combustible">Tipus de combustible</label>
            <select name="Tipus_combustible">
			    <option value="gasolina">gasolina</option>
			    <option value="diesel">diesel</option>
			    <option value="elèctric">elèctric</option>
			</select>            
        </div>      
        <button type="submit" class="btn btn-block btn-primary">Envia</button>
    </form>    
  </div>
</div>
<div class="p-6 bg-white border-b border-gray-200">
 <a href="{{ url('dashboard') }}">Torna al dashboard<a/>
 </div>
@endsection