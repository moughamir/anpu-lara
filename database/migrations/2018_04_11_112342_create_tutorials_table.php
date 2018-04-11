<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTutorialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tutorials', function (Blueprint $table) {
            $table->increments('id');
            $table->uuid('oid');
            $table->string('title');
            $table->string('subtitle')->nullable($value = true);
            $table->string('image');
            $table->string('videoId')->unique()->comment('Youtube video Id');
            $table->text('intro');
            $table->text('article');
            $table->boolean('published')->default($value = false);
            $table->boolean('featured')->default($value = false);
            $table->string('attachement')->nullable($value = true);
            $table->string('url')->unique();
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
        Schema::dropIfExists('tutorials');
    }
}
