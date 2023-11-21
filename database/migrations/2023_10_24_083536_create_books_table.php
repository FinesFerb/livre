<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
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
            $table->uuid('uuid')->nullable();
            $table->string('title',191);
            $table->string('cover');
            $table->string('writer');
            $table->string('category');
            $table->string('country_str');
            $table->string('time');
            $table->string('year');
            $table->string('age_limit');
            $table->text('description');
            $table->string('data_izdaniy');
            $table->string('volume');
            $table->string('ISBN');
            $table->string('translate');
            $table->string('pdf');
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
        Schema::dropIfExists('books');
    }
};
