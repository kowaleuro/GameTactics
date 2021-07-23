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

Route::get('/', [
    'uses'=>'TacticController@showMain',
    'as'=>'main'

]);

Route::get('main', [
    'uses'=>'TacticController@showMain',
    'as'=>'main'

]);




Route::group(['prefix' => 'nades'], function() {

    Route::get('', [
        'uses'=>'NadeController@showNades',
        'as'=>'nades.viewNades'

    ]);

    Route::get('create', [
        'uses'=>'NadeController@showNades',
        'as'=>'nades.createNades'

    ]);

});



Route::group(['prefix' => 'strats'], function() {

    Route::get('', [
        'uses'=>'TacticController@show',
        'as'=>'strats.viewStrats'

    ]);

    Route::get('create', [
        'uses'=>'TacticController@stratsCreator',
        'as'=>'strats.createStrat'

    ]);

    Route::post('create', [
        'uses'=>'TacticController@createTactic',
        'as'=>'strats.createStrat'

    ]);

    Route::get('view/{id}', [
        'uses'=>'TacticController@view',
        'as'=>'strats.read'

    ]);

});





