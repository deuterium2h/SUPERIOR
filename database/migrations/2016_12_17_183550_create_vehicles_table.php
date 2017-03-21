<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVehiclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('plate_num', 8)->unique();
            $table->string('ltfrb_num');
            $table->string('ltfrb_exp')->nullable();
            $table->string('dot_num');
            $table->string('dot_exp')->nullable();
            $table->string('agree_date')->nullable();
            $table->string('opr_name', 50);
            $table->text('opr_add');
            $table->string('opr_num', 25);
            $table->string('opr_or_num');
            $table->string('opr_cr_num');
            $table->string('make');
            $table->string('body_type');
            $table->string('year_model', 7);
            $table->string('chasis_num');
            $table->string('engine_num');
            $table->string('tpl_insure_date')->nullable();
            $table->string('pam_insure_date')->nullable();
            $table->string('emission_test_date')->nullable();
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
        Schema::dropIfExists('vehicles');
    }
}
