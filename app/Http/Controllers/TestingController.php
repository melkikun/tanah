<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class TestingController extends Controller
{
    function __construct(){
    }

    function login(Request $request){
    	return view('testing.login');
    }

    function postLogin(Request $request){
    	$username = $request->input('username');
    	$password = $request->input('password');
    	echo "$username - $password";
    	if (Auth::attempt(['username'=>$username, 'password'=>$password])) {
    		echo "berhasil";
    	}else{
    		echo "gagal";
    	}
    }
}
