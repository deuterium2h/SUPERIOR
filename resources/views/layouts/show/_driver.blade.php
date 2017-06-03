<div class="panel panel-primary">
	<div class="panel-heading">
		<strong>{{ $driver->last_name }}, {{ $driver->first_name }} {{ $driver->middle_name }}</strong> | Driver ID: {{ $driver->id }}
		<form slot="delete" class="pull-right" method="POST" action="/drivers/{{ $driver->id }}">
			{!! csrf_field() !!}
			<input type="hidden" name="_method" value="DELETE">
			<button type="submit" class="btn btn-danger btn-xs "><i class="fa fa-trash-o fa-lg"></i></button>
		</form>
		<span class="pull-right">&nbsp;</span><span class="pull-right">&nbsp;</span>
		<a href="/drivers/{{ $driver->id }}/edit" class="btn btn-success btn-xs pull-right">
			<i class="fa fa-pencil-square-o fa-lg"></i>
		</a>
		<span class="pull-right">&nbsp;</span><span class="pull-right">&nbsp;</span>
		<a href="/drivers/{{ $driver->id }}/print" class="btn btn-info btn-xs pull-right">
			<i class="fa fa-print fa-lg"></i>
		</a>
		<span class="pull-right">&nbsp;</span><span class="pull-right">&nbsp;</span>
		<a href="/drivers/{{ $driver->id }}/export" class="btn btn-warning btn-xs pull-right">
			<i class="fa fa-file-text-o fa-lg"></i>
		</a>
	</div>
	<div class="panel-body">
		<legend>Driver's Information</legend>
		<div class="form-group">
			<div class="col-md-4">
				{!! Form::label('complete-name', 'Complete Name:') !!}
				<div id="complete-name" name="complete-name">{{ $driver->last_name }}, {{ $driver->first_name }} {{ $driver->middle_name }}</div>
			</div>
			<div class="col-md-2">
				{!! Form::label('contact_num', 'Contact Number:') !!}
				<div id="contact_num" name="contact_num">{{ $driver->contact_num }}</div>
			</div>
			<div class="col-md-1">
				{!! Form::label('age', 'Age:') !!}
				<div id="age" name="age">{{ $driver->age }}</div>
			</div>
			<div class="col-md-2">
				{!! Form::label('type', 'Member Type:') !!}
				<div id="type" name="type">{{ $driver->type }}</div>
			</div>
			<div class="col-md-1">
				{!! Form::label('gender', 'Gender:') !!}
				<div id="gender" name="gender">{{ $driver->gender }}</div>
			</div>
			<div class="col-md-2 pull-right" style="float: left;">
				<img src="/photos/members/{{ $driver->avatar }}" 
					 alt="{{ $driver->last_name }}, {{ $driver->first_name }} {{ $driver->middle_name }}" 
					 class="pull-right" 
					 style="width:110px; height:110px; border: 4px solid #c1c1c1;">
			</div>
		</div>&nbsp;
		<div class="form-group">
			<div class="col-md-6">
				{!! Form::label('city_address', 'City Address:') !!}
				<div id="city_address" name="city_address"><p>{{ $driver->city_address }}</p></div>
			</div>
			<div class="col-md-4">
				{!! Form::label('province_address', 'Province Address:') !!}
				<div id="province_address" name="province_address"><p>{{ $driver->province_address }}</p></div>
			</div>
			<div class="col-md-2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
		</div>&nbsp;
		<div class="form-group">
			<div class="col-md-3">
				{!! Form::label('birth_place', 'Place of Birth:') !!}
				<div id="birth_place" name="birth_place">{{ $driver->birth_place }}</div>
			</div>
			<div class="col-md-2">
				{!! Form::label('birth_date', 'Date of Birth:') !!}
				<div id="birth_date" name="birth_date">{{ $driver->birth_date }}</div>
			</div>
			<div class="col-md-2">
				{!! Form::label('civil_status', 'Civil Status:') !!}
				<div id="civil_status" name="civil_status">{{ $driver->civil_status }}</div>
			</div>
			<div class="col-md-2">
				{!! Form::label('citizenship', 'Citizenship:') !!}
				<div id="citizenship" name="citizenship">{{ $driver->citizenship }}</div>
			</div>
			<div class="col-md-1">
				{!! Form::label('weight', 'Weight:') !!}
				<div id="weight" name="weight">{{ $driver->weight }}</div>
			</div>
			<div class="col-md-1">
				{!! Form::label('height', 'Height:') !!}
				<div id="height" name="height">{{ $driver->height }}</div>
			</div>
			<div class="col-md-1">
				{!! Form::label('blood_type', 'BloodType:') !!}
				<div id="blood_type" name="blood_type">{{ $driver->blood_type }}</div>
			</div>
		</div>&nbsp;
		<div class="form-group">
			<div class="col-md-6">
				{!! Form::label('skills', 'Skills:') !!}
				<div id="skills" name="skills">{{ $driver->skills }}</div>
			</div>
			<div class="col-md-6">
				{!! Form::label('computer_skills', 'Skills on Computer:') !!}
				<div id="computer_skills" name="computer_skills">{{ $driver->computer_skills }}</div>
			</div>
		</div>&nbsp;
		<div class="form-group">
			<div class="col-md-3">
				{!! Form::label('pagibig_no', 'Pag-Ibig Number:') !!}
				<div id="pagibig_no" name="pagibig_no">{{ $driver->pagibig_no }}</div>
			</div>
			<div class="col-md-3">
				{!! Form::label('sss_no', 'SSS Number:') !!}
				<div id="sss_no" name="sss_no">{{ $driver->sss_no }}</div>
			</div>
			<div class="col-md-3">
				{!! Form::label('philhealth_no', 'Philhealth Number:') !!}
				<div id="philhealth_no" name="philhealth_no">{{ $driver->philhealth_no }}</div>
			</div>
			<div class="col-md-3">
				{!! Form::label('tax_no', 'Tax Identification Number:') !!}
				<div id="tax_no" name="tax_no">{{ $driver->tax_no }}</div>
			</div>
		</div>&nbsp;
		<div class="form-group">
			<div class="col-md-6">
				{!! Form::label('language', 'Language/Dialects you can speak or write:') !!}
				<div id="language" name="language">{{ $driver->language }}</div>
			</div>
			<div class="col-md-6">
				{!! Form::label('exams', 'Licensure and/or Government Exam Taken:') !!}
				<div id="exams" name="exams">{{ $driver->exams }}</div>
			</div>
		</div>&nbsp;
		<legend>Driver's Vehicle Registration Information</legend>
		<div class="form-group">
			<div class="col-md-4">
				{!! Form::label('license', 'Driver\'s License Number:') !!}
				<div id="license" name="license">{{ $driver->license }}</div>
			</div>
			<div class="col-md-2">
				{!! Form::label('license_exp', 'Expiry Date:') !!}
				<div id="license_exp" name="license_exp">{{ $driver->license_exp }}</div>
			</div>
			<div class="col-md-4">
				{!! Form::label('nbi_num', 'NBI Number:') !!}
				<div id="nbi_num" name="nbi_num">{{ $driver->nbi_num }}</div>
			</div>
			<div class="col-md-2">
				{!! Form::label('nbi_exp', 'Expiry Date:') !!}
				<div id="nbi_exp" name="nbi_exp">{{ $driver->nbi_exp }}</div>
			</div>
		</div>&nbsp;
		<div class="form-group">
			<div class="col-md-4">
				{!! Form::label('sbma_num', 'SBMA ID Number:') !!}
				<div id="sbma_num" name="sbma_num">{{ $driver->sbma_num }}</div>
			</div>
			<div class="col-md-2">
				{!! Form::label('sbma_exp', 'Expiry Date:') !!}
				<div id="sbma_exp" name="sbma_exp">{{ $driver->sbma_exp }}</div>
			</div>
			<div class="col-md-4">
				{!! Form::label('sbma_led_cert_num', 'SBMA Led Certificate Number:') !!}
				<div id="sbma_led_cert_num" name="sbma_led_cert_num">{{ $driver->sbma_led_cert_num }}</div>
			</div>
			<div class="col-md-2">
				{!! Form::label('sbma_led_cert_exp', 'Expiry Date:') !!}
				<div id="sbma_led_cert_exp" name="sbma_led_cert_exp">{{ $driver->sbma_led_cert_exp }}</div>
			</div>
		</div>&nbsp;
		<div class="form-group">
			<div class="col-md-4">
				{!! Form::label('pwg_num', 'PWG ID Number:') !!}
				<div id="pwg_num" name="pwg_num">{{ $driver->pwg_num }}</div>
			</div>
			<div class="col-md-2">
				{!! Form::label('pwg_exp', 'Expiry Date:') !!}
				<div id="pwg_exp" name="pwg_exp">{{ $driver->pwg_exp }}</div>
			</div>
			<div class="col-md-4">
				{!! Form::label('med_cert_num', 'Medical Certificate Number:') !!}
				<div id="med_cert_num" name="med_cert_num">{{ $driver->med_cert_num }}</div>
			</div>
			<div class="col-md-2">
				{!! Form::label('med_cert_exp', 'Expiry Date:') !!}
				<div id="med_cert_exp" name="med_cert_exp">{{ $driver->med_cert_exp }}</div>
			</div>
		</div>&nbsp;
		<legend>Family Information</legend>
		<div class="form-group">
			<div class="col-md-6">
				{!! Form::label('spouse_name', 'Name of Spouse:') !!}
				<div id="spouse_name" name="spouse_name">{{ $driver->spouse_name }}</div>
			</div>
			<div class="col-md-6">
				{!! Form::label('spouse_job', 'Occupation:') !!}
				<div id="spouse_job" name="spouse_job">{{ $driver->spouse_job }}</div>
			</div>
		</div>&nbsp;
		<div class="form-group">
			<div class="col-md-4">
				{!! Form::label('child1_name', 'Firstborn Child:') !!}
				<div id="child1_name" name="child1_name">{{ $driver->child1_name }}</div>
			</div>
			<div class="col-md-2">
				{!! Form::label('child1_bday', 'Date of Birth:') !!}
				<div id="child1_bday" name="child1_bday">{{ $driver->child1_bday }}</div>
			</div>
			<div class="col-md-4">
				{!! Form::label('child2_name', 'Secondborn Child:') !!}
				<div id="child2_name" name="child2_name">{{ $driver->child2_name }}</div>
			</div>
			<div class="col-md-2">
				{!! Form::label('child2_bday', 'Date of Birth:') !!}
				<div id="child2_bday" name="child2_bday">{{ $driver->child2_bday }}</div>
			</div>
		</div>&nbsp;
		<div class="form-group">
			<div class="col-md-4">
				{!! Form::label('child3_name', 'Thirdborn Child:') !!}
				<div id="child3_name" name="child3_name">{{ $driver->child3_name }}</div>
			</div>
			<div class="col-md-2">
				{!! Form::label('child3_bday', 'Date of Birth:') !!}
				<div id="child3_bday" name="child3_bday">{{ $driver->child3_bday }}</div>
			</div>
			<div class="col-md-4">
				{!! Form::label('child4_name', 'Fourthborn Child:') !!}
				<div id="child4_name" name="child4_name">{{ $driver->child4_name }}</div>
			</div>
			<div class="col-md-2">
				{!! Form::label('child4_bday', 'Date of Birth:') !!}
				<div id="child4_bday" name="child4_bday">{{ $driver->child4_bday }}</div>
			</div>
		</div>&nbsp;
		<div class="form-group">
			<div class="col-md-4">
				{!! Form::label('child5_name', 'Fifthborn Child:') !!}
				<div id="child5_name" name="child5_name">{{ $driver->child5_name }}</div>
			</div>
			<div class="col-md-2">
				{!! Form::label('child5_bday', 'Date of Birth:') !!}
				<div id="child5_bday" name="child5_bday">{{ $driver->child5_bday }}</div>
			</div>
			<div class="col-md-4">
				{!! Form::label('child6_name', 'Sixthborn Child:') !!}
				<div id="child6_name" name="child6_name">{{ $driver->child6_name }}</div>
			</div>
			<div class="col-md-2">
				{!! Form::label('child6_bday', 'Date of Birth:') !!}
				<div id="child6_bday" name="child6_bday">{{ $driver->child6_bday }}</div>
			</div>
		</div>&nbsp;
		<div class="form-group">
			<div class="col-md-4">
				{!! Form::label('child7_name', 'Seventhborn Child:') !!}
				<div id="child7_name" name="child7_name">{{ $driver->child7_name }}</div>
			</div>
			<div class="col-md-2">
				{!! Form::label('child7_bday', 'Date of Birth:') !!}
				<div id="child7_bday" name="child7_bday">{{ $driver->child7_bday }}</div>
			</div>
			<div class="col-md-4">
				{!! Form::label('child8_name', 'Eighthborn Child:') !!}
				<div id="child8_name" name="child8_name">{{ $driver->child8_name }}</div>
			</div>
			<div class="col-md-2">
				{!! Form::label('child8_bday', 'Date of Birth:') !!}
				<div id="child8_bday" name="child8_bday">{{ $driver->child8_bday }}</div>
			</div>
		</div>&nbsp;
		<div class="form-group">
			<div class="col-md-5">
				{!! Form::label('father_name', 'Name of Father:') !!}
				<div id="father_name" name="father_name">{{ $driver->father_name }}</div>
			</div>
			<div class="col-md-7">
				{!! Form::label('father_address', 'Address:') !!}
				<div id="father_address" name="father_address"><p>{{ $driver->father_address }}</p></div>
			</div>
		</div>&nbsp;
		<div class="form-group">
			<div class="col-md-5">
				{!! Form::label('mother_name', 'Name of Mother:') !!}
				<div id="mother_name" name="mother_name">{{ $driver->mother_name }}</div>
			</div>
			<div class="col-md-7">
				{!! Form::label('mother_address', 'Address:') !!}
				<div id="mother_address" name="mother_address"><p>{{ $driver->mother_address }}</p></div>
			</div>
		</div>&nbsp;
		<legend>Educational Background</legend>
		<div class="form-group">
			<div class="col-md-8">
				{!! Form::label('elem_school', 'Elementary School:') !!}
				<div id="elem_school" name="elem_school">{{ $driver->elem_school }}</div>
			</div>
			<div class="col-md-2">
				{!! Form::label('elem_units', 'Units Earned:') !!}
				<div id="elem_units" name="elem_units">{{ $driver->elem_units }}</div>
			</div>
			<div class="col-md-2">
				{!! Form::label('elem_years', 'Year Graduated:') !!}
				<div id="elem_year" name="elem_year">{{ $driver->elem_year }}</div>
			</div>
		</div>&nbsp;
		<div class="form-group">
			<div class="col-md-8">
				{!! Form::label('second_school', 'Secondary School:') !!}
				<div id="second_school" name="second_school">{{ $driver->second_school }}</div>
			</div>
			<div class="col-md-2">
				{!! Form::label('second_units', 'Units Earned:') !!}
				<div id="second_units" name="second_units">{{ $driver->second_units }}</div>
			</div>
			<div class="col-md-2">
				{!! Form::label('second_year', 'Year Graduated:') !!}
				<div id="second_year" name="second_year">{{ $driver->second_year }}</div>
			</div>
		</div>&nbsp;
		<div class="form-group">
			<div class="col-md-8">
				{!! Form::label('voca_school', 'Vocational School:') !!}
				<div id="voca_school" name="voca_school">{{ $driver->voca_school }}</div>
			</div>
			<div class="col-md-2">
				{!! Form::label('voca_units', 'Units Earned:') !!}
				<div id="voca_units" name="voca_units">{{ $driver->voca_units }}</div>
			</div>
			<div class="col-md-2">
				{!! Form::label('voca_year', 'Year Graduated:') !!}
				<div id="voca_year" name="voca_year">{{ $driver->voca_year }}</div>
			</div>
		</div>&nbsp;
		<div class="form-group">
			<div class="col-md-5">
				{!! Form::label('college_school', 'College/University:') !!}
				<div id="college_school" name="college_school">{{ $driver->college_school }}</div>
			</div>
			<div class="col-md-3">
				{!! Form::label('college_course', 'Course:') !!}
				<div id="college_course" name="college_course">{{ $driver->college_course }}</div>
			</div>
			<div class="col-md-2">
				{!! Form::label('college_units', 'Units Earned:') !!}
				<div id="college_units" name="college_units">{{ $driver->college_units }}</div>
			</div>
			<div class="col-md-2">
				{!! Form::label('college_year', 'Year Graduated:') !!}
				<div id="college_year" name="college_year">{{ $driver->college_year }}</div>
			</div>
		</div>&nbsp;
		<div class="form-group">
			<div class="col-md-5">
				{!! Form::label('postgrad_school', 'Post-Graduate University:') !!}
				<div id="postgrad_school" name="postgrad_school">{{ $driver->postgrad_school }}</div>
			</div>
			<div class="col-md-3">
				{!! Form::label('postgrad_course', 'Course:') !!}
				<div id="postgrad_course" name="postgrad_course">{{ $driver->postgrad_course }}</div>
			</div>
			<div class="col-md-2">
				{!! Form::label('postgrad_units', 'Units Earned:') !!}
				<div id="postgrad_units" name="postgrad_units">{{ $driver->postgrad_units }}</div>
			</div>
			<div class="col-md-2">
				{!! Form::label('postgrad_year', 'Year Graduated:') !!}
				<div id="postgrad_year" name="college_year">{{ $driver->postgrad_year }}</div>
			</div>
		</div>&nbsp;
		<legend>Employment History</legend>
		<div class="form-group">
			<div class="col-md-3">
				{!! Form::label('emp_name1', 'Name of Employer:') !!}
				<div id="emp_name1" name="emp_name1">{{ $driver->emp_name1 }}</div>
			</div>
			<div class="col-md-5">
				{!! Form::label('emp_add1', 'Address of Employer/Company:') !!}
				<div id="emp_add1" name="emp_add1">{{ $driver->emp_add1 }}</div>
			</div>
			<div class="col-md-4">
				{!! Form::label('emp_desc1', 'Brief Explanation of Duties:') !!}
				<div id="emp_desc1" name="emp_desc1">{{ $driver->emp_desc1 }}</div>
			</div>
		</div>&nbsp;
		<div class="form-group">
			<div class="col-md-3">
				{!! Form::label('emp_pos1', 'Last Position Held:') !!}
				<div id="emp_pos1" name="emp_pos1">{{ $driver->emp_pos1 }}</div>
			</div>
			<div class="col-md-3">
				{!! Form::label('emp_sal1', 'Salary:') !!}
				<div id="emp_sal1" name="emp_sal1">{{ $driver->emp_sal1 }}</div>
			</div>
			<div class="col-md-3">
				{!! Form::label('emp_date_from1', 'Date Employed From:') !!}
				<div id="emp_date_from1" name="emp_date_from1">{{ $driver->emp_date_from1 }}</div>
			</div>
			<div class="col-md-3">
				{!! Form::label('emp_date_to1', 'Date Employed To:') !!}
				<div id="emp_date_to1" name="emp_date_to1">{{ $driver->emp_date_to1 }}</div>
			</div>
		</div>&nbsp;<hr>
		<div class="form-group">
			<div class="col-md-3">
				{!! Form::label('emp_name2', 'Name of Employer:') !!}
				<div id="emp_name2" name="emp_name2">{{ $driver->emp_name2 }}</div>
			</div>
			<div class="col-md-5">
				{!! Form::label('emp_add2', 'Address of Employer/Company:') !!}
				<div id="emp_add2" name="emp_add2">{{ $driver->emp_add2 }}</div>
			</div>
			<div class="col-md-4">
				{!! Form::label('emp_desc2', 'Brief Explanation of Duties:') !!}
				<div id="emp_desc2" name="emp_desc2">{{ $driver->emp_desc2 }}</div>
			</div>
		</div>&nbsp;
		<div class="form-group">
			<div class="col-md-3">
				{!! Form::label('emp_pos2', 'Last Position Held:') !!}
				<div id="emp_pos2" name="emp_pos2">{{ $driver->emp_pos2 }}</div>
			</div>
			<div class="col-md-3">
				{!! Form::label('emp_sal2', 'Salary:') !!}
				<div id="emp_sal2" name="emp_sal2">{{ $driver->emp_sal2 }}</div>
			</div>
			<div class="col-md-3">
				{!! Form::label('emp_date_from2', 'Date Employed From:') !!}
				<div id="emp_date_from2" name="emp_date_from2">{{ $driver->emp_date_from2 }}</div>
			</div>
			<div class="col-md-3">
				{!! Form::label('emp_date_to2', 'Date Employed To:') !!}
				<div id="emp_date_to2" name="emp_date_to2">{{ $driver->emp_date_to2 }}</div>
			</div>
		</div>&nbsp;<hr>
		<div class="form-group">
			<div class="col-md-3">
				{!! Form::label('emp_name3', 'Name of Employer:') !!}
				<div id="emp_name3" name="emp_name3">{{ $driver->emp_name3 }}</div>
			</div>
			<div class="col-md-5">
				{!! Form::label('emp_add3', 'Address of Employer/Company:') !!}
				<div id="emp_add3" name="emp_add3">{{ $driver->emp_add3 }}</div>
			</div>
			<div class="col-md-4">
				{!! Form::label('emp_desc3', 'Brief Explanation of Duties:') !!}
				<div id="emp_desc3" name="emp_desc3">{{ $driver->emp_desc3 }}</div>
			</div>
		</div>&nbsp;
		<div class="form-group">
			<div class="col-md-3">
				{!! Form::label('emp_pos3', 'Last Position Held:') !!}
				<div id="emp_pos3" name="emp_pos3">{{ $driver->emp_pos3 }}</div>
			</div>
			<div class="col-md-3">
				{!! Form::label('emp_sal3', 'Salary:') !!}
				<div id="emp_sal3" name="emp_sal3">{{ $driver->emp_sal3 }}</div>
			</div>
			<div class="col-md-3">
				{!! Form::label('emp_date_from3', 'Date Employed From:') !!}
				<div id="emp_date_from3" name="emp_date_from3">{{ $driver->emp_date_from3 }}</div>
			</div>
			<div class="col-md-3">
				{!! Form::label('emp_date_to3', 'Date Employed To:') !!}
				<div id="emp_date_to3" name="emp_date_to3">{{ $driver->emp_date_to3 }}</div>
			</div>
		</div>&nbsp;
		<legend>Person to Notify in case of Emergency</legend>
		<div class="form-group">
			<div class="col-md-3">
				{!! Form::label('guard_name', 'Name of Guardian:') !!}
				<div id="guard_name" name="guard_name">{{ $driver->guard_name }}</div>
			</div>
			<div class="col-md-5">
				{!! Form::label('guard_address', 'Address:') !!}
				<div id="guard_address" name="guard_address">{{ $driver->guard_address }}</div>
			</div>
			<div class="col-md-2">
				{!! Form::label('guard_num', 'Contact Number:') !!}
				<div id="guard_num" name="guard_num">{{ $driver->guard_num }}</div>
			</div>
			<div class="col-md-2">
				{!! Form::label('guard_relation', 'Relation to Guardian:') !!}
				<div id="guard_relation" name="guard_relation">{{ $driver->guard_relation }}</div>
			</div>
		</div>&nbsp;<hr>
		<div class="form-group">
			<div class="col-md-12">
				{!! Form::label('references', 'Character Reference:') !!}
				<div id="references" name="references">{{ $driver->references }}</div>
			</div>
		</div>&nbsp;
		<div class="form-group">
			<div class="col-md-6">
				{!! Form::label('reg_date', 'Registration Date:') !!}
				<div id="reg_date" name="reg_date">{{ $driver->reg_date }}</div>
			</div>
			<div class="col-md-6">
				{!! Form::label('upd_date', 'Date Updated:') !!}
				<div id="upd_date" name="upd_date">{{ $driver->upd_date }}</div>
			</div>
		</div>
	</div>
</div>