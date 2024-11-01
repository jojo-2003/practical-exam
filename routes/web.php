<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/students',[StudentController::class, 'index'])->name('students.index');
Route::get('/students/create',[StudentController::class, 'create'])->name('students.create');
Route::post('/students/store',[StudentController::class, 'store'])->name('students.store');
Route::get('/students/{student}/edit',[StudentController::class, 'edit'])->name('students.edit'); //students - table name / {student} - variable name ng table ($students as $student) / edit - function name
Route::put('/students/{student}/update',[StudentController::class, 'update'])->name('students.update');
Route::delete('/students/{student}/delete',action: [StudentController::class, 'destroy'])->name('students.destroy');