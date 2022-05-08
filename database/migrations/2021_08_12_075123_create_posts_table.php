<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('post_category_id')->index()->nullable();
            $table->foreign('post_category_id')->references('id')->on('post_categories')->onDelete('cascade');

            // $table->foreignId('user_id')->nullable()->constrained();


            $table->enum('published', ['0','1'])->default(1);
            $table->boolean('featured')->default(0);
            $table->string('image',150)->nullable();
            $table->string('author');
			$table->softDeletes(); //////Option 
			$table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));

       });
        Schema::create('post_translations', function (Blueprint $table) {                 
            $table->id();  
            $table->string('title');
            $table->string('slug')->unique();
            $table->longText('description')->nullable();
			$table->string('lang')->index();			
            $table->unsignedBigInteger('post_id');
			$table->unique(['post_id','lang']);  
            $table->foreign('post_id')->references('id')->on('posts')->onDelete('cascade');               
        });	
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
        Schema::dropIfExists('post_translations');
    }
}
