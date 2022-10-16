<?php

use Illuminate\Support\Facades\Route;

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

Route::view('/','pages.home')->name('home');
Route::view('all','gridviews.AllBooks')->name('all');
Route::view('Arabic','gridviews.ArabicBooks')->name('All_Arabic_Books');
Route::view('English','gridviews.EnglishBooks')->name('All_English_Books');
Route::view('Luganda','gridviews.LugandaBooks')->name('All_Luganda_Books');

Route::view('BookDetails','pages.book_details')->name('BookDetails');