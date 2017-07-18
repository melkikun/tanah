<?php
use App\Http\Middleware\CheckAge;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Auth::routes();

Route::group(['middleware' => ['auth']], function () {
	Route::get('/home', 'HomeController@index')->name('home');
	Route::get('/admin', 'HomeController@index')->name('admin');
	Route::get('admin/tambah-property', 'AdminController@TambahProperty')->name("admin.tambahproperty");
	Route::get('admin/edit-property', 'AdminController@EditProperty')->name("admin.editproperty");
	Route::get('admin/list-property', 'AdminController@ListProperty')->name("admin.listproperty");
	Route::get('admin/terjual-property', 'AdminController@PropertyTerjual')->name("admin.terjual");
	Route::get('admin/terjual-property/{id}', 'AdminController@DetailPropertyTerjual')->name('admin.detailterjual');
	Route::post('admin/submitproperty', 'AdminController@SubmitProperty')->name('admin.submitproperty');
	Route::post('admin/updateproperty/{id}', 'AdminController@updateTerjual')->name("submit.updateproperty");
	Route::get('getKelurahan', 'AdminController@getKelurahan')->name('get.kelurahan');
	
	Route::get('logout', 'AdminController@logout')->name('logout');
	
	
});

Route::prefix('testing')->group(function(){
	Route::get('xxx', 'PropertyController@test');
	Route::get('login', 'TestingController@login');
	Route::post('login', 'TestingController@postLogin');
});


Route::get('/', 'PropertyController@index')->name("front.dashboard");
Route::post('feedback', 'PropertyController@feedback')->name('feedback');
Route::get('page-not-found', function(){
	return view('errors.404');
})->name('notfound');
Route::get('{id}', 'PropertyController@detailProperty')->name("front.detail");
