<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductCategoriesTable  extends Migration
{
        /**
         * Run the migrations.
         *
         * @return void
         */
        public function up()
        {
            Schema::create('product_categories', function (Blueprint $table) {
                $table->id();
                $table->unsignedBigInteger('parent_id')->default(0)->nullable();
                $table->string('image',150)->nullable();
                $table->enum('published', ['0','1'])->default(1);
                $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
                $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
                });  

            Schema::create('product_categories_translations', function (Blueprint $table) {
                $table->id();               
                $table->string('title');
                $table->string('slug')->unique();
                $table->longText('description')->nullable();
                $table->string('lang')->index();			
                $table->unsignedBigInteger('product_category_id');
                $table->unique(['product_category_id','lang']);  
                $table->foreign('product_category_id')->references('id')->on('products_categories')->onDelete('cascade');   
            });  
    
            }
        /**
         * Reverse the migrations.
         *
         * @return void
         */
        public function down()
        {
            Schema::drop('product_categories');
            Schema::drop('product_categories_translations');
        }    
}  
