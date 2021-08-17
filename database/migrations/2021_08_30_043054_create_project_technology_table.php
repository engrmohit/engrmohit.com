<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectTechnologyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_technology', function (Blueprint $table) {
            $table->unsignedMediumInteger('id')->autoIncrement();
            $table->unsignedSmallInteger('project_id');
            $table->unsignedSmallInteger('technology_id');
            $table->timestamps();

            $table->foreign('project_id')
                    ->references('id')
                    ->on('projects')
                    ->onDelete('CASCADE')
                    ->onUpdate('CASCADE');

            $table->foreign('technology_id')
                    ->references('id')
                    ->on('technologies')
                    ->onDelete('CASCADE')
                    ->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('project_technology');
    }
}
