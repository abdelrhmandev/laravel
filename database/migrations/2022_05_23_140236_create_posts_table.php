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
            $table->enum('published', ['0','1'])->default(1);
            $table->boolean('featured')->default(0);
            $table->string('image',150)->nullable();
 			$table->softDeletes(); //////Option 
             $table->foreignId('post_category_id')->nullable()->constrained('post_categories')->onDelete('cascade');
             $table->foreignId('user_id')->constrained('users')->onDelete('cascade'); 
             $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
			 $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
       });
        Schema::create('post_translations', function (Blueprint $table) {                 
            $table->id();  
            $table->string('title');
            $table->string('slug')->unique();
            $table->longText('description')->nullable();
            $table->string('meta_title')->nullable();
            $table->longText('meta_description')->nullable();
			$table->string('lang')->index();			
			$table->unique(['post_id','lang']);  
            $table->index(['title','slug']);
            $table->foreignId('post_id')->constrained('posts')->onDelete('cascade');
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
