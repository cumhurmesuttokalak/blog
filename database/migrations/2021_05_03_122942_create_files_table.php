<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFilesTable extends Migration
{

    public function up()
    {
        Schema::create('files', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('content_id');
            $table->unsignedBigInteger('type');
            $table->string('path');
            $table->boolean('is_deleted')->default(0);
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('files');
    }
}
