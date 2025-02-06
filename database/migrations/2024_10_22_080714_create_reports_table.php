<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reports', function (Blueprint $table) {
            $table->id();
            // $table->unsignedBigInteger('user_id'); 
            $table->string('nama');
            $table->integer('P');
            $table->integer('I');
            $table->integer('J');
            $table->integer('T');
            $table->integer('E');
            $table->integer('N');
            $table->integer('S');
            $table->integer('F');
            $table->char('result', 10);
            $table->timestamps();

            // Menambahkan foreign key 
            // $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reports');
    }
};
