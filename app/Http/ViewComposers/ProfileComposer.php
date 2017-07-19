<?php
namespace App\Http\ViewComposers;

use Illuminate\View\View;
use App\User;

class ProfileComposer{

	public function compose(View $view){
		$user = new User();
		$data = $user->all();
		$view->with('testing.footer')->with('data', $data);
	}
}
