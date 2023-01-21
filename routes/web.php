<?php

use App\Http\Controllers\ProductsController;
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
//laravel 8
Route::get('/products', [ProductsController::class, 'index']);


/*
//Route to user
Route::get('/users', function() {
    return 'Welcome to the users page';
});

//Route to users
Route::get('/users', function() {
    return ['php', 'laravel'];
});

//Route to users
Route::get('/usersJson', function() {
    return response()->json(['name' => 'Ahmet', 'laravel' => 'course']);
});

//Route to users -function
Route::get('/usersFunction', function() {
    return redirect('/');
});*/