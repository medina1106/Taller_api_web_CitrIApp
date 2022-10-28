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
        Schema::create('register_cultives', function (Blueprint $table) {
            $table->id();
             $table->string('name_cultive');
            $table->string('type_cultive');
            $table->string('ubication_cultive');
            $table->string('start_production');
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
        Schema::dropIfExists('register_cultives');
    }
};
