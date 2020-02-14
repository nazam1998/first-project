<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonneTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personne', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();
            $table->string('Nom',110);
            $table->string('Prenom',80);
            $table->string('Email',255);
            $table->date('Date de Naissance',80);
            $table->integer('Telephone')->length(10);
            $table->boolean('inscrit');
            $table->text('description',120);
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
        Schema::dropIfExists('personne');
    }
}
