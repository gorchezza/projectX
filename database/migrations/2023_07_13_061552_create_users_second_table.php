<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersSecondTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('second_halves', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->unique();

            $table->string('math')->nullable();
            $table->string('en')->nullable();
            $table->string('cs')->nullable();
            $table->string('history')->nullable();
            $table->string('biology')->nullable();
            $table->string('literature')->nullable();
            $table->string('rus')->nullable();
            $table->string('geography')->nullable();
            $table->string('economics')->nullable();
            $table->string('design')->nullable();
            $table->string('management')->nullable();

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
        Schema::dropIfExists('users_second');
    }
}
