<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecipeNutrationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recipe_nutration', function (Blueprint $table) {    
            $table->id();
            $table->bigInteger('recipe_id')->unsigned()->index();            
            $table->foreign('recipe_id')->references('id')->on('recipes')->onDelete('cascade');                           
            $table->bigInteger('nutration_id')->unsigned()->index();            
            $table->foreign('nutration_id')->references('id')->on('nutrations')->onDelete('cascade');   
            $table->tinyInteger('amount');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recipe_nutration');
    }
}
