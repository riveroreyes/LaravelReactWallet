@extends('layouts.app')
@section('title',__('Oauth2 - Menú de autentificación') )
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{__('Oauth2 - Menú de autentificación')}}</div>

                <div class="card-body">
                    <ul><p>{{__('Clientes API')}}</p>
                        <li><a href="{{ route('crearClienteApi') }}">{{__('Crear cliente')}}</a></li>
                        <li><a href="{{ route('listarClienteApi') }}">{{__('Listado de clientes')}}</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
