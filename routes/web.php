<?php

use App\Http\Controllers\PostController;
use App\Models\articales;
use App\Models\User;
use Illuminate\Database\DBAL\TimestampType;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/posts', [PostController::class, 'index']);
Route::get('/posts/{id}', [PostController::class, 'show']);

Route::get('/users', function () {

    return User::create(
        [
            'name' => 'dfsdfsdf',
            'email' => 'oooooooo',
            'password' => bcrypt('dsfsf'),
           
            ]
    );
});
