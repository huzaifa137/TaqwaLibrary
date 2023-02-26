<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdhkarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adhkars', function (Blueprint $table) {
            $table->id();
            $table->text('dua_name');
            $table->text('dua_catagory');
            $table->text('number_in_words');
            $table->text('number_in_figures');
            $table->text('para_1')->default('-');
            $table->text('para_2')->default('-');
            $table->text('para_3')->default('-');
            $table->text('para_4')->default('-');
            $table->text('para_5')->default('-');
            $table->text('para_6')->default('-');
            $table->text('para_7')->default('-');
            $table->text('Adhkar_image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('adhkars');
    }
}
