<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoadmapItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roadmap_items', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('project_id');
            $table->integer('position');
            $table->boolean('is_currently_step')->default(false);
            $table->string('description');
            $table->integer('circle_size')->default(16); // available 16, 32
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
        Schema::dropIfExists('roadmap_items');
    }
}
