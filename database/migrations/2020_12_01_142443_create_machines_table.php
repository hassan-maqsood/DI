<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMachinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('machines', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('machine_id');
            $table->string('Technology');
            $table->string('machine_type');
            $table->string('machine_type_specification');
            $table->string('manufacturer');
            $table->string('series');
            $table->string('model');
            $table->integer('no_of_axis');
            $table->boolean('simulation_axis_control');
            $table->integer('max_axis_control');
            $table->integer('max_x_axis_travel');
            $table->integer('max_y_axis_travel');
            $table->integer('max_z_axis_travel');
            $table->integer('loading_weight');
            $table->string('table_type');
            $table->integer('table_length');
            $table->integer('table_width');
            $table->integer('table_diameter');
            $table->boolean('hsc');
            $table->integer('spindel_speed');
            $table->integer('max_tools');
            $table->boolean('tool_measuring_system');
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
        Schema::dropIfExists('machines');
    }
}
