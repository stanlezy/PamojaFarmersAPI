<?php

namespace App\Http\Controllers;

use App\Community;
use Illuminate\Http\Request;

class CommunityController extends Controller
{
    public function index()
    {
        return Community::all();
    }
    public function show($id){
        return Community::find($id);
    }
    public function store(Request $request){
        return Community::create($request->all());
    }
    public function update(Request $request, $id){
        $community = Community::findOrFail($id);
        $community->update($request->all());
        return $community;
    }
    public function delete(Request $request, $id)
    {
        $community = Community::findOrFail($id);
        $community->delete();

        return 204;
    }
}
Route::get('communities', 'CommunityController@index');
Route::get('communities/{community}', 'CommunityController@show');
Route::post('communities', 'CommunityController@store');
Route::put('communities/{community}', 'CommunityController@update');
Route::delete('communities/{community}', 'CommunityController@delete');