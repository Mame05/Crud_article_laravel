<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;

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
Route::get('/supprimer-article/{id}', [ArticleController::class, 'supprimer_article']);
Route::get('/modifier-article/{id}', [ArticleController::class, 'modifier_article']);
Route::post('/modifier/traitement', [ArticleController::class, 'modifier_article_traitement']);
Route::get('/detail-article/{id}', [ArticleController::class, 'detail_article']);
Route::get('/article', [ArticleController::class, 'liste_article']);
Route::get('/ajouter', [ArticleController::class, 'ajouter_article']);
Route::post('/ajouter/traitement', [ArticleController::class, 'ajouter_article_traitement']);