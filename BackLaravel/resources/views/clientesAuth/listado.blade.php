@extends('layouts.app')
@section('title','Oauth2 - Clientes registrados')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h3>Clientes registrados - Oauth2</h3>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">Name</th>
              <th scope="col">Redirect</th>
              <th scope="col">Personal Access Client</th>
              <th scope="col">Created At</th>
            </tr>
          </thead>
          <tbody>
            @foreach( $clientes as $cliente )
            <tr>
              <td>{{ $cliente->name}}</td>
              <td>{{ $cliente->redirect}}</td>
              <td>{{ $cliente->personal_access_client}}</td>
              <td>{{ $cliente->created_at}}</td>
            </tr>
            @endforeach
            <tr>
            </tr>
          </tbody>
        </table>
      </div>   
    </div>   
  </div>
@endsection
