<?php
use App\recipe;
use Illuminate\Http\Request;
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

Route::get('/','recipeController@index');
Route::get('publicRecipes/fetch_image/{id}','recipeController@fetch_image');

Auth::routes();
Route::get('Add', function () {
    return view('newRecipe');
});

Route::get('/','recipeController@index');
Route::get('/home', 'HomeController@index')->name('home');
Route::post('/home', 'HomeController@store')->name('home.store');
Route::get('store_image/fetch_image/{id}','HomeController@fetch_image');
Route::get('/home/edit/image/fetch_image/{id}','HomeController@fetch_image');
Route::get('/{title}','HomeController@showRecipe')->name('home.show');
Route::get('/home/edit/{id}', function (Request $request) {
    $Recipe = recipe::where('id','=',$request->id)->get();
    return view('editRecipe',['Datos'=>$Recipe]);
})->name('home.edit');
Route::post('/home/save','HomeController@editRecipe')->name('home.saveEdit');
Route::get('/home/delete/{id}', 'HomeController@destroy')->name('home.delete');
Route::get('/home/see/{id}', 'recipeController@see')->name('home.see');
Route::get('/home/see/fetch_image/{id}','recipeController@fetch_image');
