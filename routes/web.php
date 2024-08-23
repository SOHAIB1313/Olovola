<?php


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\rolesController;
use App\Http\Controllers\admin\usersController;
use App\Http\Controllers\admin\permissionsController;
use App\Http\Controllers\admin\postController;
use App\Http\Controllers\admin\carController;



Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// permission
Route::get('permission', [permissionsController::class, 'index']);
Route::get('permission/create', [permissionsController::class, 'create']);
Route::post('permission/store', [permissionsController::class, 'store']);


// role
Route::get('role', [rolesController::class, 'index']);
Route::get('role/create', [rolesController::class, 'create']);
Route::post('role/store', [rolesController::class, 'store']);
Route::get('role/given/{id}', [rolesController::class, 'given']);
Route::put('role/givenPermission/{id}', [rolesController::class, 'givenPermission']);
// user
Route::get('user', [usersController::class, 'index']);
Route::get('user/create', [usersController::class, 'create']);
Route::post('user/store', [usersController::class, 'store']);

//post
Route::get('blog', [postController::class, 'index'])->name('blog');
Route::get('blog/form', [postController::class, 'form'])->name('blog/form');
Route::post('blog/store', [postController::class, 'store'])->name('blog/store');
Route::get('blog/edit', [postController::class, 'edit'])->name('blog/edit');
Route::put('blog/update/{id}', [postController::class, 'update'])->name('blog/update');
Route::get('blog/destroy/{id}', [postController::class, 'destroy']);
// car
Route::get('car',[carController::class,'index'])->name('car');
Route::get('car/form',[carController::class,'create'])->name('car/form');
Route::post('blog/store',[carController::class,'store'])->name('blog/store');