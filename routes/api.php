<?php

use Illuminate\Http\Request;
use App\Community;
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

Route::get('communities', function (){
    return Community::all();
});
Route::get('communities{id}',function ($id){
    return Community::find($id);
});
Route::post('communities',function (Request $request){
    return Community::create($request->all);
});
Route::put('communities/{id}',function (Request $request, $id){
    $community =Community::findOrFail($id);
    $community =update($request->all());
    return $community;
});
Route::delete('communities/{id}',function ($id){
    Community::find($id)->delete();

    return 204;
});
