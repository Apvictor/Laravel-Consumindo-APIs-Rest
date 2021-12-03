<?php

use App\Http\Controllers\CursoController;
use App\Http\Controllers\GithubController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('github/buscar', [GithubController::class, 'buscar']);

Route::get('curso/create', [CursoController::class, 'create']);
Route::get('curso/update', [CursoController::class, 'update']);
Route::get('curso/delete', [CursoController::class, 'delete']);
Route::get('curso/list', [CursoController::class, 'list']);
Route::get('curso/show', [CursoController::class, 'show']);
