<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();

            /**
             * Основные данные
             */
            $table->unsignedBigInteger('manager')->nullable();
            $table->foreign('manager')->references('id')->on('managers');

            $table->boolean('accepted')->default(false);

            $table->string('logo')->nullable();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');

            /**
             * Данные для организации
             */
            $table->string('type')->default('Кафе')->nullable();
            $table->integer('commission')->default(3)->nullable();
            $table->integer('minimal_commission')->default(30)->comment('Минимальная комиссия в рублях')->nullable();
            $table->timestamp('free_end_date')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('pay_start')->default(DB::raw('CURRENT_TIMESTAMP'));

            $table->string('city')->nullable();
            $table->string('street')->nullable();
            $table->string('house')->nullable();
            $table->string('person')->nullable();

            /**
             * Данные для сотрудника
             */
            $table->boolean('isEmployee')->default(0);

            $table->unsignedBigInteger('organisation')->nullable()->comment('ID организации, если сотрудник.');
            $table->foreign('organisation')->references('id')->on('users');

            /**
             * Токен
             */
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
