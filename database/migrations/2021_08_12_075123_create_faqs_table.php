<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFaqsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('faqs', function (Blueprint $table) {
            $table->id();
			$table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));

       });
        Schema::create('faq_translations', function (Blueprint $table) {                 
            $table->id();  
            $table->string('question');
            $table->string('answer');
			$table->string('lang')->index();			
            $table->unsignedBigInteger('faq_id');
			$table->unique(['faq_id','lang']);  
            $table->foreign('faq_id')->references('id')->on('faqs')->onDelete('cascade');               
        });	
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('faqs');
        Schema::dropIfExists('faq_translations');
    }
}
