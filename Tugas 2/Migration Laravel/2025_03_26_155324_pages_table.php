<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('pages', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('seotitle');
            $table->unsignedBigInteger('users_id');
            $table->foreign('users_id')
                  ->references('id')->on('users')
                  ->onDelete('cascade');
            $table->text('content');
            $table->string('image')->default('noimage.jpg');
            $table->integer('hits')->default('0');
            $table->enum('active', ['Yes', 'No'])->default('Yes');
            $table->enum('status', ['publish', 'draft'])->default('publish');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
