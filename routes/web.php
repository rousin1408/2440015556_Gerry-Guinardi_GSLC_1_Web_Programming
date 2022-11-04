<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/', function () {
    $jrs = [
        ['Computer Science', 'CS', '5'],
        ['Business Creation', 'BC', '2'],
        ['Public Relation', 'PR', '3']
    ];
    return view('welcome')->with('jrs', $jrs);
});
Route::get('/mahasiswa', function () {
    $mhs = [
        ['2440015556', 'Gerry', 'CS'],
        ['2440637272', 'Gerry', 'CS'],
        ['2428282828', 'Budi', 'PR'],
        ['2491299292', 'Adi', 'CS'],
        ['2429292929', 'Ani', 'BC'],
        ['2492029202', 'Tommy', 'BC'],
        ['2442828282', 'Celine', 'CS'],
        ['2441234567', 'Cellina', 'PR'],
        ['2428282828', 'Amanda', 'PR'],
        ['2442727271', 'Gwen', 'CS'],
    ];
    return view('mahasiswa')->with('mhs', $mhs);
});
