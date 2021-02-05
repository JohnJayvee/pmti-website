<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRequestDemoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('request_demo', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->String('name');
            $table->String('company');
            $table->String('email');
            $table->String('phone');
            $table->String('message');
            $table->timestamps('deleted_at');
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
        Schema::dropIfExists('request_demo');
    }
}
