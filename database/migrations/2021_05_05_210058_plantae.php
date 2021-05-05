<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Plantae extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plantaes', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("category");
            $table->string("subkingdom");
            $table->string("divisions");
            $table->string("class");
            $table->string("pictures");
            $table->timestamps();
        });    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('plantaes');
    }
}
