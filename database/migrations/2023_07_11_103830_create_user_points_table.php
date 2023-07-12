<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserPointsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_points', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->string('half_number');

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
        Schema::dropIfExists('user_points');
    }
}
