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
        Schema::create('book_users', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('book_id');
            $table->unsignedBigInteger('user_id');

            $table->index('book_id', 'book_user_book_idx');
            $table->index('user_id', 'book_user_user_idx');

            $table->foreign('book_id', 'book_user_book_fk')->on('books')->references('id');
            $table->foreign('user_id', 'book_user_user_fk')->on('users')->references('id');

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
        Schema::dropIfExists('book_users');
    }
};
