<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLanguagesTable extends Migration
{
        /**
         * Run the migrations.
         *
         * @return void
         */
        public function up()
        {
            Schema::create('languages', function (Blueprint $table) {
                $table->increments('id');
                $table->string('title',20);
                $table->string('dir',3);                
                $table->string('code',4);
                $table->string('flag');
                $table->enum('published', ['0','1'])->default(1);
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
            Schema::drop('languages');
        }    
}  
