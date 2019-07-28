@extends('layouts.app')
@section('title','Oauth2 -  Registrar Cliente')

@section('content')
  <div class="container">
    <div class="row">
        <div class="col-12">
          <h3>Registros de clientes - Oauth2</h3>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <form action="{{ url('/oauth/clients') }}" method="post">
            {{ csrf_field() }}
            <div class="form-group">
              <label for="exampleInputEmail1">Nombre del Cliente</label>
              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" name="name">
              <small id="emailHelp" class="form-text text-muted">Cliente para utentificacion</small>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Redirect</label>
              <input type="text" class="form-control" id="exampleInputPassword1" placeholder="" name="redirect">
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
          </form>   
        </div>   
    </div>   

  </div>
@endsection
