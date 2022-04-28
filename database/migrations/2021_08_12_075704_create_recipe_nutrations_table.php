<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecipeNutrationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recipe_nutrations', function (Blueprint $table) {    
            $table->tinyInteger('amount');
            $table->bigInteger('recipe_id')->unsigned()->index();            
            $table->foreign('recipe_id')->references('id')->on('recipes')->onDelete('cascade');   
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recipe_nutrations');
    }
}
