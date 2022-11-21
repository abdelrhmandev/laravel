<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMediaRecipeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('media_recipe', function (Blueprint $table) {
            $table->id();
            $table->string('url');
            $table->string('type');
            $table->foreignId('recipe_id')->constrained('recipes')->onDelete('cascade');
 
        });
 
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('media_recipe');
    }
}
