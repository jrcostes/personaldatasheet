<?php

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

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\App;
use Knp\Snappy\Pdf;

Route::resource('post','PostController');
Auth::routes();

Route::get('/', function () {

    return view('c1data.index');
});
Route::get('/sender', function(){
    $pdf = App::make('snappy.pdf.wrapper');
    $pdf->loadview('c1data.index');
    return $pdf->download('c1data.index.pdf');
});
Route::get('exporter', 'PostController@export');

