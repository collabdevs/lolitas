<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller {

    const MODEL = "App\User";

    
    public function login(Request $request){
    	//print_r($request->input());
    	$usuario = new \App\User;
    	$usuario->email = $request->input('email');
    	$usuario->password = $request->input('password');

    	$usuario->login();

    	return redirect('/admin');

    }
}
