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
use App\Http\Controllers\SheetsController;
use Illuminate\Support\Facades\App;
use Knp\Snappy\Pdf;


Auth::routes();
Route::resource('sheets', 'SheetsController');

Route::get('/', function () {

    return view('c1data.index');
});
Route::get('/sender', function(){
    $pdf = App::make('snappy.pdf.wrapper');
    $pdf->loadview('c1data.index');
    return $pdf->download('c1data.index.pdf');
});
Route::get('temp', 'PostController@index');
Route::get('/shtuff', function(){
    return view('c1data.homepage');
});
Route::get('/export', [PostController::class, 'export']);


Route::get('/wkhtmltopdf', [PostController::class, 'print_form'])->name('print_data');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
