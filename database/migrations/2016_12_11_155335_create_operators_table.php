<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOperatorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('operators', function (Blueprint $table) {
            $table->increments('id');
            // $table->string('operator_id');
            $table->string('avatar')->default('default.png');
            $table->string('last_name', 30);
            $table->string('first_name', 30);
            $table->string('middle_name', 30);
            $table->string('type')->default('Operator');
            $table->string('contact_num');
            $table->text('city_address');
            $table->text('province_address');
            $table->string('citizenship')->default('Filipino');
            $table->string('birth_date')->nullable();
            $table->text('birth_place');
            $table->string('age');
            $table->string('gender');
            $table->string('civil_status');
            $table->string('blood_type');
            $table->string('weight');
            $table->string('height');
            $table->string('spouse_name', 70);
            $table->string('spouse_job');
            $table->string('child1_name', 70);
            $table->string('child1_bday')->nullable();
            $table->string('child2_name', 70);
            $table->string('child2_bday')->nullable();
            $table->string('child3_name', 70);
            $table->string('child3_bday')->nullable();
            $table->string('child4_name', 70);
            $table->string('child4_bday')->nullable();
            $table->string('child5_name', 70);
            $table->string('child5_bday')->nullable();
            $table->string('child6_name', 70);
            $table->string('child6_bday')->nullable();
            $table->string('child7_name', 70);
            $table->string('child7_bday')->nullable();
            $table->string('child8_name', 70);
            $table->string('child8_bday')->nullable();
            $table->string('father_name',70);
            $table->text('father_address');
            $table->string('mother_name',70);
            $table->text('mother_address');
            $table->string('language');
            $table->string('pagibig_no', 15);
            $table->string('sss_no', 15);
            $table->string('philhealth_no', 15);
            $table->string('tax_no', 15);
            $table->string('elem_school', 70);
            $table->string('elem_units', 5);
            $table->string('elem_year', 10);
            $table->string('second_school', 70);
            $table->string('second_units', 5);
            $table->string('second_year', 10);
            $table->string('voca_school', 70);
            $table->string('voca_units', 5);
            $table->string('voca_year', 10);
            $table->string('college_school', 70);
            $table->string('college_course');
            $table->string('college_units', 5);
            $table->string('college_year', 10);
            $table->string('postgrad_school', 70);
            $table->string('postgrad_course');
            $table->string('postgrad_units', 5);
            $table->string('postgrad_year', 10);
            $table->string('skills');
            $table->string('computer_skills');
            $table->text('exams');
            $table->string('emp_name1', 70);
            $table->text('emp_add1');
            $table->string('emp_date_from1')->nullable();
            $table->string('emp_date_to1')->nullable();
            $table->text('emp_desc1');
            $table->string('emp_pos1');
            $table->string('emp_sal1', 8);
            $table->string('emp_name2', 70);
            $table->text('emp_add2');
            $table->string('emp_date_from2')->nullable();
            $table->string('emp_date_to2')->nullable();
            $table->text('emp_desc2');
            $table->string('emp_pos2');
            $table->string('emp_sal2', 8);
            $table->string('emp_name3', 70);
            $table->text('emp_add3');
            $table->string('emp_date_from3')->nullable();
            $table->string('emp_date_to3')->nullable();
            $table->text('emp_desc3');
            $table->string('emp_pos3');
            $table->string('emp_sal3', 8);
            $table->string('guard_name', 70);
            $table->text('guard_address');
            $table->string('guard_num');
            $table->string('guard_relation');
            $table->text('references');
            $table->string('reg_date')->nullable();
            $table->string('upd_date')->nullable();
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
        Schema::dropIfExists('operators');
    }
}
