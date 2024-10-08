<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Aiex_System\Admin\AlunoController;
use App\Http\Controllers\Aiex_System\Admin\SemesterController;
use App\Http\Controllers\HomeController;

Route::group([],function () {

    Route::resource('alunos', AlunoController::class)
        ->names('alunos')
        ->parameters(['alunos' => 'student']);

    Route::get('/alunos', [HomeController::class, 'students_register'])
        ->name('students.register');

    Route::resource('semestres', SemesterController::class)
        ->names('semesters')
        ->parameters(['semestres'=> 'identify']);
});
