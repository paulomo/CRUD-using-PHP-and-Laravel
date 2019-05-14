<?php

use App\adorption_record;
use Illuminate\Support\Facades\Input;

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

// Route::get('/delete', function () {
//     return view('delete');
// });




Route::get('/', 'RecordController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Route::resource('records', 'AdorptionController');
Route::any('/create', 'HomeController@create');
Route::any('/addRecord', 'HomeController@addRecord');
Route::any('/records/{id}/edit', 'HomeController@edit');
Route::any('/records/{id}/update', 'HomeController@update');
Route::any('/records/{id}/delete', 'HomeController@delete');
Route::any('/records/{id}/destroy', 'HomeController@destroy');


// Route for view/blade file.
Route::get('/importExport', 'MaatwebsiteController@importExport');
// Route for export/download tabledata to .csv, .xls or .xlsx
Route::get('/downloadExcel/{type}', 'MaatwebsiteController@downloadExcel');
// Route for import excel data to database.
Route::any('/importExcel', 'MaatwebsiteController@importExcel');


Route::post( '/search', function () {
	$q = Input::get ( 'q' );
	if($q != ""){
		$record = adorption_record::where('Bldg_City', 'LIKE', '%' . $q . '%' )->orWhere('Bldg_Postal_Code', 'LIKE', '%' . $q . '%')->get ();
		if (count ( $record ) > 0)
			return view ( 'welcome' )->withDetails ( $record )->withQuery ( $q );
		else
			return view ( 'welcome' )->withMessage ( 'No Details found. Try to search again!' );
	}
	return view ( 'search-functionality-in-laravel/welcome' )->withMessage ( 'No Details found. Try to search again !' );
});