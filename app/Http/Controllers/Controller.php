<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function view1(){
    	$footer = "footer";
    	$content = "content";
    	$header = "header";

    	return view('view1', compact('footer', 'header', 'content'));
    }

    public function view2(){
    	$footer = "footer";
    	$content = "content";
    	$header = "header";
    	
    	return view('view2', compact('footer', 'header', 'content'));
    }

    public function view3(){
    	$footer = "footer";
    	$content = "content";
    	$header = "header";

    	return view('view3', compact('footer', 'header', 'content'));
    }
}
