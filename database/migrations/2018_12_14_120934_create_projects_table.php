<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('owner_id');
            $table->string('name');
            $table->string('slug');
            $table->text('location')->nullable();
            $table->string('web_site')->nullable();
            $table->string('short_description')->nullable();
            $table->string('problem_solved');
            $table->text('description');
            $table->string('license_type')->default('free');
            $table->integer('category_id')->nullable();
            $table->text('tags');
            $table->string('thumbnail');
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
        Schema::dropIfExists('projects');
    }
}
