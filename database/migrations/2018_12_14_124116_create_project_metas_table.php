<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectMetasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_metas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('project_id');
            $table->bigInteger('likes');
            $table->bigInteger('views');
            $table->bigInteger('bookmarks');
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
        Schema::dropIfExists('project_metas');
    }
}
