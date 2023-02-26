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
    Route::view('AddAdhkar','Adminpages.AddAdhkar')->name('AddAdhkar');
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



//Dua and Adhkar routes

Route::get('morning-adhkar',[BookController::class,'morning_adhkar'])->name('morning-adhkar');
Route::get('evening-adhkar',[BookController::class,'evening_adhkar'])->name('evening-adhkar');
Route::get('Adhkar-After-Swalah',[BookController::class,'Adhkar_After_Swalah'])->name('Adhkar-After-Swalah');
Route::get('Famous-Duas-from-the-Quran',[BookController::class,'Famous_Duas_from_the_Quran'])->name('Famous-Duas-from-the-Quran');
Route::get('Other-Duas',[BookController::class,'Other_Duas'])->name('Other-Duas');



Route::get('adhkar-details/{id}',[BookController::class,'adhkarDetails'])->name('adhkar-details');
Route::get('AllAdhkar',[BookController::class,'ShowAllAdhkar'])->name('AllAdhkar');
Route::get('Edit-Adhkar/{id}',[BookController::class,'EditAdhkar'])->name('Edit-Adhkar');
Route::get('delete-Adhkar/{id}',[BookController::class,'deleteAdhkar']);

Route::post('add-post',[BookController::class,'add_post'])->name('add-post');
Route::post('update-post',[BookController::class,'updateAdhkar'])->name('update-post');