<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

// Route::get('/', function () {
//     return view('index'); // merujuk ke file welcome.blade
// });

//Route::get('/', function () {
//    return view('Data'); // merujuk ke file welcome.blade
// });

// Route::get('/', function () {
//    return view('Gallery'); // merujuk ke file welcome.blade
// });

// Route::get('/welcome', function () {
//    return view('welcome'); // merujuk ke file welcome.blade
// });

// Route::get('/login', function () {
//     return view('login'); // merujuk ke file welcome.blade
// });

// Route::get('/about', function () {
//     return view('about'); // merujuk ke file welcome.blade
// });

// Route::get('/admin', function () {
//    return view('admin.blade.php');
// });

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/login', [HomeController::class, 'login'])->name('login');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/admin', [HomeController::class, 'admin'])->name('admin');