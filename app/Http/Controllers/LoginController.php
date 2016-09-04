<?php

namespace estoque\Http\Controllers;

use Request;
use Auth;

use estoque\Http\Requests;

class LoginController extends Controller
{

    public function formulario() {
    	return view ('login.formulario');
    }

    public function login() {
    	
    	$credenciais = Request::only('email', 'password');

    	if (Auth::attempt($credenciais)) {
			return 'logado';
    	}

    	return 'não existe';
    }
}
