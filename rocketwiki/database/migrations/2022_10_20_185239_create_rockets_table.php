<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRocketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rockets', function (Blueprint $table) {
            $table->increments('id');
            $table->string("name");
            $table->boolean("active");
            $table->float("cost_per_launch");
            $table->float("success_rate_pct");
            $table->date("first_flight");
            $table->text("description");
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
        Schema::dropIfExists('rockets');
    }
}
