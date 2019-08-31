<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/dashboard/materials', 'DashboardController@materials')->name('dashboard.materials');
Route::get("/dashboard/lessons", "DashboardController@lessons")->name("dashboard.lessons");

Route::resource("lessons", "LessonsController");

Route::get("/development/{lessonId}", "DevelopmentController@index")->name("development");

Route::get("/folders/fetch", "FoldersController@fetch")->name("folders.fetch");
Route::post("/folders", "FoldersController@store")->name("folders.store");

Route::get("/files/fetch", "FilesController@fetch")->name("files.fetch");
Route::post("/files", "FilesController@store")->name("files.store");
Route::put("/files/{file}", "FilesController@update")->name("files.update");