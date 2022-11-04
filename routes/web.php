<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

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

Route::view('BookDetail','pages.book_details')->name('BookDetail');

Route::get('/',[BookController::class,'home'])->name('home');
Route::get('all',[BookController::class,'AllBooksHome'])->name('all');
Route::get('Arabic',[BookController::class,'ArabicBooks'])->name('All_Arabic_Books');
Route::get('English',[BookController::class,'EnglishBooks'])->name('All_English_Books');
Route::get('Luganda',[BookController::class,'LugandaBooks'])->name('All_Luganda_Books');
Route::get('final-page/{id}',[BookController::class,'lastPage'])->name('final-page');

Route::prefix('Admin')->group(function () {
    Route::view('AddBook','Adminpages.AddBook')->name('AddBook');
    Route::view('EditBook','Adminpages.EditBook')->name('EditBook');
    Route::view('dashboard','Adminpages.Dashboard')->name('dashboard');
    Route::view('BookDetails','Adminpages.BookDetails')->name('BookDetails');
    Route::get('delete/{id}',[BookController::class,'delete']);
    Route::get('Edit/{id}',[BookController::class,'updateRecord']);
    Route::get('AllBooks',[BookController::class,'show'])->name('AllBooks');
});

Route::post('store-book',[BookController::class,'store'])->name('store-book');
Route::post('store-update',[BookController::class,'update'])->name('store-update');


Route::get('/download/{file}',[BookController::class,'download']);
Route::get('/view/{id}',[BookController::class,'view']);