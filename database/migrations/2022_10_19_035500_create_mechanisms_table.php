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
        Schema::create('mechanisms', function (Blueprint $table) {
            $table->bigIncrements('mechanism_id');
            $table->string('name');
            $table->string('number');

            $table->bigInteger('machine_id')->unsigned();
            $table->foreign('machine_id')
                  ->references('mechanism_id')
                  ->on('machines')->onDelete('cascade');

            $table->bigInteger('parts_id')->unsigned();
            $table->foreign('parts_id')
                  ->references('mechanism_id')
                  ->on('parts')->onDelete('cascade');
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
        Schema::dropIfExists('mechanisms');
    }
};
