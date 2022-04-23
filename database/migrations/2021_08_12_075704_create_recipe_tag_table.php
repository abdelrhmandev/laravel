<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecipeTagTable extends Migration
{
        /**
         * Run the migrations.
         *
         * @return void
         */
        public function up()
        {
            Schema::create('recipe_tag', function (Blueprint $table) {
                $table->bigInteger('recipe_id')->unsigned()->index();
                $table->bigInteger('tag_id')->unsigned()->index();                
                $table->foreign('recipe_id')->references('id')->on('recipes')->onUpdate('cascade')->onDelete('cascade');               
                $table->foreign('tag_id')->references('id')->on('tags')->onUpdate('cascade')->onDelete('cascade');   
            });  
        }
        /**
         * Reverse the migrations.
         *
         * @return void
         */
        public function down()
        {
            Schema::drop('recipe_tag');
        }    
}  
