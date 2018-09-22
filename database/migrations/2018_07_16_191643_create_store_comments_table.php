<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStoreCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('store_comments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned()->nullable();
            // $table->foreign('user_id')->references('id')->on('users');
            $table->string ('name');
            $table->integer('category');
            $table->text   ('description');
            $table->integer('rating');
            $table->date   ('date')->nullable(true);
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
        // Schema::table('store_comments', function (Blueprint $table) {
        //     $table->dropForeign(['user_id']);
        // });
        Schema::dropIfExists('store_comments');
    }
}
