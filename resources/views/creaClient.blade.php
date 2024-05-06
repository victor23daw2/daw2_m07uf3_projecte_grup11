@extends('disseny')
@section('content')
<div class="card mt-5">
  <div class="card-header">
    Afegeix un nou client
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
    <form method="POST" action="/clients">
        @csrf
        <!-- https://laravel.com/docs/10.x/csrf -->
        <div class="form-group">           
            <label for="Dni_client">DNI</label>
            <input type="text" class="form-control" name="Dni_client"/>
        </div>
        <div class="form-group">           
            <label for="Nom_i_cognoms">Nom i cognoms</label>
            <input type="text" class="form-control" name="Nom_i_cognoms"/>
        </div>
        <div class="form-group">           
            <label for="Edat">Edat</label>
            <input type="number" class="form-control" name="Edat"/>
        </div>
        <div class="form-group">           
            <label for="Telefon">Telefon</label>
            <input type="tel" class="form-control" name="Telefon"/>
        </div>
        <div class="form-group">           
            <label for="Adreca">Adreça</label>
            <input type="text" class="form-control" name="Adreca"/>
        </div>        
        <div class="form-group">
            <label for="Ciutat">Ciutat</label>
            <input type="text" class="form-control" name="Ciutat"/>
        </div>
        <div class="form-group">
            <label for="Pais">Pais</label>
            <input type="text" class="form-control" name="Pais"/>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control" name="email"/>
        </div>
        <div class="form-group">           
            <label for="Numero_del_permis_de_conduccio">Nº permís conducció</label>
            <input type="text" class="form-control" name="Numero_del_permis_de_conduccio"/>
        </div>
        <div class="form-group">           
            <label for="Punts_del_permis_de_conduccio">Punts permís conduir</label>
            <input type="number" class="form-control" name="Punts_del_permis_de_conduccio"/>
			</select>
        </div>
        <div class="form-group">           
            <label for="Tipus_de_targeta">Tipus de tarjeta</label>
            <select name="Tipus_de_targeta">
			    <option value="Dèbit">Dèbit</option>
			    <option value="Crèdit">Crèdit</option>
			</select>            
        </div>
        <div class="form-group">           
            <label for="Numero_de_la_targeta">Numero tarjeta</label>
            <input type="text" class="form-control" name="Numero_de_la_targeta"/>
        </div>        
        <button type="submit" class="btn btn-block btn-primary">Envia</button>
    </form>    
  </div>
</div>
<div class="p-6 bg-white border-b border-gray-200">
 <a href="{{ url('dashboard') }}">Torna al dashboard<a/>
 </div>
@endsection