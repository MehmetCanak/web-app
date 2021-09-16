<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\FormDataController;
use App\Http\Controllers\FlightController;
use App\Models\User;

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

Route::get('/post/create', [PostController::class, 'create']);
Route::post('/post', [PostController::class, 'store']);
Route::get('/', [FormDataController::class,'index'])->name('form.index');
Route::post('/form', [FormDataController::class,'save'])->name('form.save');

Route::get('/users', [UserController::class,'index'])->name('users.index');
Route::post('/users/search', [UserController::class,'search'])->name('users.search');

Route::get('/fly', [FlightController::class,'index']);

// Route::get('/user/{id}', [UserController::class, 'show']);

// Route::get('/home', function () {
//     // Retrieve a piece of data from the session...
//     $value = session('key');

//     // Specifying a default value...
//     $value = session('key', 'default');
//     print_r($value);

//     // Store a piece of data in the session...
//     session(['key' => 'value']);

//     $value = session('key');

//     // Specifying a default value...
//     $value = session('key', 'default');
//     print_r($value);
//     print_r("-----");

//     $data = $request->session()->all();
//     print_r($data);


    
// });


// Route::post('/admin/{id}', [PhotoController::class, 'store']);

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });



// Route::get('/user/{user}', function (User $user) {
//     return $user;
// });

// Route::get('/dashboard', function () {
//     return redirect('api/hello');
// });

// Route::get('hello', function () {
//     return 'Hello World';
// });
// Route::get('/', function () {
//     //return view('admin.profile',  ['name' => 'James','records' => "mehmet","i"=>2,"message"=>"merhaba"]);
//     return view('greeting', ['name' => 'James','records' => "mehmet","i"=>2,"message"=>"merhaba","value"=>true]);
// });
