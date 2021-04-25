<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            // $table->string('titre', 30);
            // $table->text('para');
            // $table->string('soustitre', 300);
            // $table->text('description');
            $table->string('birthday', 30);
            $table->string('website', 30);
            $table->integer('phone');
            $table->string('city', 30);
            $table->integer('age');
            $table->string('degree', 30);
            $table->string('email', 30);
            $table->string('freelance', 30);
            // $table->text('paragraphe');
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
        Schema::dropIfExists('abouts');
    }
}
