<?php

namespace App\Http\Controllers;

use App\OauthClients;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OauthClientsController extends Controller
{
    public function index(){
      return View('clientesAuth/index');
    }

    public function listado(){
    	$clientes = OauthClients::where('user_id',Auth::User()->id)->get();
    	return view('clientesAuth/listado',compact('clientes'));
    }

    public function create(){
		  return view('clientesAuth/clientesAuth');
    }
}
