<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductCategoryItemTable extends Migration
{
        /**
         * Run the migrations.
         *
         * @return void
         */
        public function up()
        {
            Schema::create('product_category_item', function (Blueprint $table) {
                $table->id();
                $table->unique(['product_id']);
                $table->foreignId('product_id')->constrained('products')->onDelete('cascade');
                $table->foreignId('product_category_id')->constrained('product_categories')->onDelete('cascade');    
            });  
        }
        /**
         * Reverse the migrations.
         *
         * @return void
         */
        public function down()
        {
            Schema::drop('product_category_item');
        }    
}  
