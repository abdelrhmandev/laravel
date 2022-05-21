<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductCategoryPivotTable extends Migration
{
        /**
         * Run the migrations.
         *
         * @return void
         */
        public function up()
        {
            Schema::create('product_category_pivot', function (Blueprint $table) {
                $table->id();               
                $table->foreignId('product_category_id')->constrained('product_categories')->onUpdate('cascade')->onDelete('cascade');               
                $table->foreignId('product_id')->constrained('products')->onUpdate('cascade')->onDelete('cascade');   
            });  
        }
        /**
         * Reverse the migrations.
         *
         * @return void
         */
        public function down()
        {
            Schema::drop('product_category_pivot');
        }    
}  
