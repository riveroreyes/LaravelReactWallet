<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('wallet','WalletController@get_wallet');

Route::get('alive',function(){
    return response()->json("Estoy vivo",200);
});

Route::get('money',function(){
    $w = \App\Wallet::all();
    return response()->json($w);
})->name('money');

/*
Route::group(['middleware'=>['clients']],function(){
    Route::get('clients/money',function(){
        $w = \App\Wallet::all();
        return response()->json($w);
    })->name('clients.money');
});
*/
Route::get('clients/money',function(){
    $w = \App\Wallet::all();
    return response()->json($w);
});
