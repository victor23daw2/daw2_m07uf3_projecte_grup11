@extends('disseny')
@section('content')
<div class="card mt-5">
  <div class="card-header">
    Afegeix un nou lloguer
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
    <form method="POST" action="/lloga">
        @csrf
        <!-- https://laravel.com/docs/10.x/csrf -->
        <div class="form-group">           
            <label for="Dni_client">DNI client</label>
            <input type="text" class="form-control" name="Dni_client"/>
        </div>
        <div class="form-group">           
            <label for="Matricula_auto">Matricula</label>
            <input type="text" class="form-control" name="Matricula_auto"/>
        </div>
        <div class="form-group">           
            <label for="Data_prestec">Data de prestec</label>
            <input type="date" class="form-control" name="Data_prestec"/>
        </div>
        <div class="form-group">           
            <label for="Data_devolucio">Data de devolucio</label>
            <input type="date" class="form-control" name="Data_devolucio"/>
        </div>
        <div class="form-group">           
            <label for="Lloc_devolucio">Lloc de devolucio</label>
            <input type="text" class="form-control" name="Lloc_devolucio"/>
        </div>        
        <div class="form-group">
            <label for="Preu_per_dia">Preu per dia</label>
            <input type="number" class="form-control" name="Preu_per_dia"/>
        </div>
        <div class="form-group">
            <label for="Prestec_amb_retorn_deposit_ple">Prestec amb retorn deposit ple</label>
            <select name="Prestec_amb_retorn_deposit_ple">
			    <option value="sí">si</option>
			    <option value="no">no</option>
			</select>
        </div>
        <div class="form-group">
            <label for="Tipus_assegurança">Tipus assegurança</label>
            <select name="Tipus_assegurança">
			    <option value="Franquícia fins a 1000 Euros">Franquícia fins a 1000 Euros</option>
			    <option value="Franquíca fins 500 Euros">Franquíca fins 500 Euros</option>
			    <option value="Sense franquícia">Sense franquícia</option>
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