<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCitiesTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('cities', function (Blueprint $table) {
            $table->id();
			$table->unsignedBigInteger('country_id');
			$table->foreign('country_id')->references('id')->on('countries')->onDelete('cascade');
			$table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
			});
		Schema::create('city_translations', function (Blueprint $table) {            
			$table->id();
			$table->string('title');
            $table->string('slug')->unique();
			$table->string('lang')->index();			
            $table->unsignedBigInteger('city_id');
			$table->unique(['city_id','lang']);  
            $table->foreign('city_id')->references('id')->on('cities')->onDelete('cascade');         
		});	
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {		
		Schema::dropIfExists('cities');
		Schema::dropIfExists('city_translations');
	}
}
