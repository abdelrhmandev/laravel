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
            Schema::create('recipexxxx_tag', function (Blueprint $table) {
                $table->integer('rate')->nullable();
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
            Schema::drop('recipexxxx_tag');
        }    
}  
