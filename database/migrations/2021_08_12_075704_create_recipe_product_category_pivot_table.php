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
                $table->bigInteger('product_category_id')->unsigned()->index();
                $table->bigInteger('product_id')->unsigned()->index();                
                $table->foreign('product_category_id')->references('id')->on('product_categories')->onUpdate('cascade')->onDelete('cascade');               
                $table->foreign('product_id')->references('id')->on('products')->onUpdate('cascade')->onDelete('cascade');   
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
