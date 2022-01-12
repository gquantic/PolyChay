<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('employee');
            $table->foreign('employee')->references('id')->on('users');

            $table->integer('starts')->default(1);

            // Что именно понравилось?
            $table->boolean('quality')->default(false);
            $table->boolean('food')->default(false);
            $table->boolean('communication')->default(false);
            $table->boolean('smile')->default(false);
            $table->boolean('professional')->default(false);
            $table->boolean('beauty')->default(false);

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
        Schema::dropIfExists('reviews');
    }
}
