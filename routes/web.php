<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\AdminController;


//Route::redirect('/', 'index');

Route::get('/', function(){
    return view('homepage.index');
})->name('index');

Route::get('/apply',[StudentController::class,'apply'])->name('apply');
Route::post('/apply',[StudentController::class,'applyStore'])->name('applyStore');
Route::get('/profile',[StudentController::class,'profile'])->name('profile');

Route::prefix("admin")->group(function(){
    Route::get('/admindashboard',[AdminController::class,"admindashboard"])->name('admindashboard');
    Route::get('/students',[AdminController::class,"students"])->name('students');
});

/*Route::get('/edit',[StudentController::class,'edit'])->name('edit');
Route::post('/edit',[StudentController::class,'update'])->name('update');

Route::get('/insert',[StudentController::class,'insert'])->name('insert');
Route::post('/insert',[StudentController::class,'insertData'])->name('insertData');*/


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
