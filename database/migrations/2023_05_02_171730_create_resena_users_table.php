<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResenaUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resena_users', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_usuario_emisor');
            $table->foreign('id_usuario_emisor')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('id_usuario_receptor');
            $table->foreign('id_usuario_receptor')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('id_resena');
            $table->foreign('id_resena')->references('id')->on('resenas')->onDelete('cascade');
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
        Schema::dropIfExists('resena_users');
    }
}
