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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function () {
//     $name = request('name');
//     return $name;
// });

// Route::get('/', function () {
//     $tasks = [
//         'Aller faire les courses',
//         'Aller à la gym',
//         'Dormir'
//     ];
//     return view('home', [
//         'tasks' => $tasks,
//         'test' => "Mon test"
//     ]);
// });


// Route::get('user/{id}', function ($id) {
//     return 'User ' . $id;
// });

// Route::get('/contact', function () {
//     return view('contact');
// });

use App\Http\Controllers\PagesController;
Route::get('/', [PagesController::class, 'home']);

use App\Http\Controllers\ProjectController;
Route::get('/project', [ProjectController::class, 'index']);
Route::get('/project/create', [ProjectController::class, 'create']);
Route::post('/project', [ProjectController::class, 'store']);
