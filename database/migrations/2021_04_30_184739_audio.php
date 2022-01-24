<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Audio extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('audio', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title', 256)->unique();
            $table->string('slug', 200)->unique();
            $table->string('body');
            $table->string('user_id');
            $table->boolean('published')->nullable();
            $table->integer('posted_by')->nullable();
            $table->string('image')->nullable();
            $table->string('category', 30);
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
        //
    }
}
