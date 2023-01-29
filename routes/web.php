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
Route::view('contact','pages.contact')->name('contact');


// Website Pages
Route::get('/',[BookController::class,'home'])->name('home');
Route::get('all',[BookController::class,'AllBooksHome'])->name('all');
Route::get('Arabic',[BookController::class,'ArabicBooks'])->name('All_Arabic_Books');
Route::get('English',[BookController::class,'EnglishBooks'])->name('All_English_Books');
Route::get('Luganda',[BookController::class,'LugandaBooks'])->name('All_Luganda_Books');
Route::get('final-page/{id}',[BookController::class,'lastPage'])->name('final-page');
Route::get('about-us',[BookController::class,'about_us'])->name('about-us');
Route::get('search/final-page/{id}',[BookController::class,'search_lastpage'])->name('final-page');

Route::post('store-book',[BookController::class,'store'])->name('store-book');
Route::post('store-update',[BookController::class,'update'])->name('store-update');

// Download and view pdf and Doc file.

Route::get('/download/{file}',[BookController::class,'download']);
Route::get('/view/{id}',[BookController::class,'view']);


// Admin pages , Login and Dashboard.
Route::middleware(['middleware'=>'AuthCheck'])->group(function () {
    Route::get('Adminpages.Dashboard',[BookController::class,'dashboard']);
    Route::get('auth.logout',[BookController::class,'logout'])->name('auth.logout');
    Route::view('AddBook','Adminpages.AddBook')->name('AddBook');
    Route::view('EditBook','Adminpages.EditBook')->name('EditBook');
    Route::view('dashboard','Adminpages.Dashboard')->name('dashboard');
    Route::get('dashboard',[BookController::class,'dashboard'])->name('dashboard');
    Route::view('BookDetails','Adminpages.BookDetails')->name('BookDetails');
    Route::get('delete/{id}',[BookController::class,'delete']);
    Route::get('Edit/{id}',[BookController::class,'updateRecord']);
    Route::get('AllBooks',[BookController::class,'show'])->name('AllBooks');
    Route::get('contact-info',[BookController::class,'contact_info'])->name('contact-info');
}); 


Route::get('auth.register',[BookController::class,'register'])->name('auth.register');
Route::get('auth.login',[BookController::class,'login'])->name('auth.login');

Route::post('auth.save',[BookController::class,'store1'])->name('auth.save');
Route::post('auth.check',[BookController::class,'verify'])->name('auth.check');

Route::post('send-message',[BookController::class,'SendMessage'])->name('send-message');

Route::get('search-bar',[BookController::class,'SearchBar'])->name('search-bar');

Route::get('fetchRecords/{keyword}',[BookController::class,'fetchRecords'])->name('fetchRecords-link');

Route::get('search/{keyword}',[BookController::class,'searchInfo'])->name('search-link');