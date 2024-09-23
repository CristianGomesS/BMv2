<?php

use App\Http\Controllers\BlackMarketController;
use Illuminate\Support\Facades\Route;
use Illuminate\Types\Relations\Role;

Route::get('/', function () {
    return view('welcome');
});


route::get('/teste','BlackMarketController@index')-> name('site.index');
route::post('/teste','BlackMarketController@store') -> name('site.store');
route::put('/teste/{id}','BlackMarketController@update') -> name('site.Atualizar');
route::delete('/teste/{id}','BlackMarketController@delete')-> name('site.delete');
Route::get('/',function(){
return view('welcome');
});