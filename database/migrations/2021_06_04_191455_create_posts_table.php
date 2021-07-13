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
            $table->string('post_code')->nullable()->unique();;
            $table->unsignedBigInteger('user_id')->index();
            $table->unsignedBigInteger('category_id')->index();
            $table->string('name');
            $table->string('slug',128)->unique();
            $table->enum('status',['PUBLISHED','DRAFT'])->default('DRAFT');
            $table->mediumText('abstract')->nullable();
            $table->longtext('body');
            $table->string('picture',128)->nullable();
            $table->string('image',128)->nullable();

            //Relation - Relaciones 
            //Si eliminamos un usuario se eliminan los post pertenecientes al usuario
            $table->foreign('user_id')->references('id')->on('users')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            //Si eliminamos una categoria se eliminan los post pertenecientes a la categoria   
            $table->foreign('category_id')->references('id')->on('categories')
                ->onDelete('cascade')
                ->onUpdate('cascade');
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
        Schema::dropIfExists('posts');
    }
}
