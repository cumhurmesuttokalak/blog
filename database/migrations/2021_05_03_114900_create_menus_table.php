<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenusTable extends Migration
{

    public function up()
    {
        Schema::create('menus', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('page_id');
            $table->string('title');
            $table->string('url')->nullable();
            $table->boolean('is_deleted')->default(0);
            $table->timestamps();

            $table->foreign('page_id')->references('id')->on('pages');
        });
    }


    public function down()
    {
        Schema::dropIfExists('menus');
    }
}
