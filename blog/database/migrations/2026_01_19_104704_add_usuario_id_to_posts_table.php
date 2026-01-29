<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUsuarioIdToPostsTable extends Migration
{
    public function up()
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->unsignedBigInteger('usuario_id')->nullable();
            $table->foreign('usuario_id')->references('id')->on('usuarios')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->dropForeign(['usuario_id']);
            $table->dropColumn('usuario_id');
        });
    }
}
