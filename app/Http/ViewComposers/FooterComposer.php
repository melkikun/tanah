<?php
namespace App\Http\ViewComposers;

use Illuminate\View\View;
use App\User;
/**
* 
*/
class FooterComposer
{
	
	public function compose(View $view){
		$user = new User();
		$data = $user->all();

		$view->with('testing.footer')->with('data', $data);
	}
}