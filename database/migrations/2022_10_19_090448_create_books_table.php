<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->text('Author_Name');
            $table->text('Book_Name');
            $table->text('Catagory');
            $table->text('Language');
            $table->text('Format');
            $table->text('pages');
            $table->text('Translated_By')->default('-');
            $table->text('Book_Image');
            $table->text('Book_pdf');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
}
