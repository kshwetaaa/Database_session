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
        Schema::create('machines', function (Blueprint $table) {
            $table->bigIncrements('machine_id');
            $table->string('machine_name');
            $table->string('machine_number');
        
            $table->bigInteger('mechanism_id')->unsigned();
            $table->foreign('mechanism_id')
              ->references('machine_id')
              ->on('mechanisms')->onDelete('cascade');
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
        Schema::dropIfExists('machines');
    }
};
