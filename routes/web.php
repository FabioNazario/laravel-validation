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

use Illuminate\Support\Facades\Input;

Route::get('/', function () {
    return view('cep_validator');
});

Route::post('/', function () {

    $cep = Input::get('cep');

    $validator = \Validator::make(['meu_cep' => $cep],['meu_cep' => 'cep']);

    if ($validator->passes()){
        $msg = "Valido.";
    }else{
        $msg = $validator->errors()->first('meu_cep');
    }

    return back()->with('flash_message',$msg);
});
