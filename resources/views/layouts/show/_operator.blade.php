<div class="panel panel-primary">
	<div class="panel-heading">
		<strong>{{ $operator->last_name }}, {{ $operator->first_name }} {{ $operator->middle_name }}</strong> | Operator ID: {{ $operator->id }}
		<form slot="delete" class="pull-right" method="POST" action="/operators/{{ $operator->id }}">
			{!! csrf_field() !!}
			<input type="hidden" name="_method" value="DELETE">
			<button type="submit" class="btn btn-danger btn-xs "><i class="fa fa-trash-o fa-lg"></i></button>
		</form>
		<span class="pull-right">&nbsp;</span><span class="pull-right">&nbsp;</span>
		<a href="/operators/{{ $operator->id }}/edit" class="btn btn-success btn-xs pull-right">
			<i class="fa fa-pencil-square-o fa-lg"></i>
		</a>
		<span class="pull-right">&nbsp;</span><span class="pull-right">&nbsp;</span>
		<a href="/operators/{{ $operator->id }}/print" class="btn btn-info btn-xs pull-right">
			<i class="fa fa-print fa-lg"></i>
		</a>
		<span class="pull-right">&nbsp;</span><span class="pull-right">&nbsp;</span>
		<a href="/operators/{{ $operator->id }}/export" class="btn btn-warning btn-xs pull-right">
			<i class="fa fa-file-text-o fa-lg"></i>
		</a>
	</div>
	<div class="panel-body">
		<legend>Operator's Information</legend>
		<div class="form-group">
			<div class="col-md-4">
				{!! Form::label('complete-name', 'Complete Name:') !!}
				<div id="complete-name" name="complete-name">{{ $operator->last_name }}, {{ $operator->first_name }} {{ $operator->middle_name }}</div>
			</div>
			<div class="col-md-2">
				{!! Form::label('contact_num', 'Contact Number:') !!}
				<div id="contact_num" name="contact_num">{{ $operator->contact_num }}</div>
			</div>
			<div class="col-md-1">
				{!! Form::label('age', 'Age:') !!}
				<div id="age" name="age">{{ $operator->age }}</div>
			</div>
			<div class="col-md-2">
				{!! Form::label('type', 'Membership Type:') !!}
				<div id="type" name="type">{{ $operator->type }}</div>
			</div>
			<div class="col-md-1">
				{!! Form::label('gender', 'Gender:') !!}
				<div id="gender" name="gender">{{ $operator->gender }}</div>
			</div>
			<div class="col-md-2 pull-right" style="float: left;">
				<img src="/photos/members/{{ $operator->avatar }}" 
					 alt="{{ $operator->last_name }}, {{ $operator->first_name }} {{ $operator->middle_name }}" 
					 class="pull-right" 
					 style="width:110px; height:110px; border: 4px solid #c1c1c1;">
			</div>
		</div>&nbsp;
		<div class="form-group">
			<div class="col-md-6">
				{!! Form::label('city_address', 'City Address:') !!}
				<div id="city_address" name="city_address"><p>{{ $operator->city_address }}</p></div>
			</div>
			<div class="col-md-4">
				{!! Form::label('province_address', 'Province Address:') !!}
				<div id="province_address" name="province_address"><p>{{ $operator->province_address }}</p></div>
			</div>
			<div class="col-md-2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;32</div>
		</div>&nbsp;
		<div class="form-group">
			<div class="col-md-3">
				{!! Form::label('birth_place', 'Place of Birth:') !!}
				<div id="birth_place" name="birth_place">{{ $operator->birth_place }}</div>
			</div>
			<div class="col-md-2">
				{!! Form::label('birth_date', 'Date of Birth:') !!}
				<div id="birth_date" name="birth_date">{{ $operator->birth_date }}</div>
			</div>
			<div class="col-md-2">
				{!! Form::label('civil_status', 'Civil Status:') !!}
				<div id="civil_status" name="civil_status">{{ $operator->civil_status }}</div>
			</div>
			<div class="col-md-2">
				{!! Form::label('citizenship', 'Citizenship:') !!}
				<div id="citizenship" name="citizenship">{{ $operator->citizenship }}</div>
			</div>
			<div class="col-md-1">
				{!! Form::label('weight', 'Weight:') !!}
				<div id="weight" name="weight">{{ $operator->weight }}</div>
			</div>
			<div class="col-md-1">
				{!! Form::label('height', 'Height:') !!}
				<div id="height" name="height">{{ $operator->height }}</div>
			</div>
			<div class="col-md-1">
				{!! Form::label('blood_type', 'BloodType:') !!}
				<div id="blood_type" name="blood_type">{{ $operator->blood_type }}</div>
			</div>
		</div>&nbsp;
		<div class="form-group">
			<div class="col-md-6">
				{!! Form::label('skills', 'Skills:') !!}
				<div id="skills" name="skills">{{ $operator->skills }}</div>
			</div>
			<div class="col-md-6">
				{!! Form::label('computer_skills', 'Skills on Computer:') !!}
				<div id="computer_skills" name="computer_skills">{{ $operator->computer_skills }}</div>
			</div>
		</div>&nbsp;
		<div class="form-group">
			<div class="col-md-3">
				{!! Form::label('pagibig_no', 'Pag-Ibig Number:') !!}
				<div id="pagibig_no" name="pagibig_no">{{ $operator->pagibig_no }}</div>
			</div>
			<div class="col-md-3">
				{!! Form::label('sss_no', 'SSS Number:') !!}
				<div id="sss_no" name="sss_no">{{ $operator->sss_no }}</div>
			</div>
			<div class="col-md-3">
				{!! Form::label('philhealth_no', 'Philhealth Number:') !!}
				<div id="philhealth_no" name="philhealth_no">{{ $operator->philhealth_no }}</div>
			</div>
			<div class="col-md-3">
				{!! Form::label('tax_no', 'Tax Identification Number:') !!}
				<div id="tax_no" name="tax_no">{{ $operator->tax_no }}</div>
			</div>
		</div>&nbsp;
		<div class="form-group">
			<div class="col-md-6">
				{!! Form::label('language', 'Language/Dialects you can speak or write:') !!}
				<div id="language" name="language">{{ $operator->language }}</div>
			</div>
			<div class="col-md-6">
				{!! Form::label('exams', 'Licensure and/or Government Exam Taken:') !!}
				<div id="exams" name="exams">{{ $operator->exams }}</div>
			</div>
		</div>&nbsp;
		<legend>Family Information</legend>
		<div class="form-group">
			<div class="col-md-6">
				{!! Form::label('spouse_name', 'Name of Spouse:') !!}
				<div id="spouse_name" name="spouse_name">{{ $operator->spouse_name }}</div>
			</div>
			<div class="col-md-6">
				{!! Form::label('spouse_job', 'Occupation:') !!}
				<div id="spouse_job" name="spouse_job">{{ $operator->spouse_job }}</div>
			</div>
		</div>&nbsp;
		<div class="form-group">
			<div class="col-md-4">
				{!! Form::label('child1_name', 'Firstborn Child:') !!}
				<div id="child1_name" name="child1_name">{{ $operator->child1_name }}</div>
			</div>
			<div class="col-md-2">
				{!! Form::label('child1_bday', 'Date of Birth:') !!}
				<div id="child1_bday" name="child1_bday">{{ $operator->child1_bday }}</div>
			</div>
			<div class="col-md-4">
				{!! Form::label('child2_name', 'Secondborn Child:') !!}
				<div id="child2_name" name="child2_name">{{ $operator->child2_name }}</div>
			</div>
			<div class="col-md-2">
				{!! Form::label('child2_bday', 'Date of Birth:') !!}
				<div id="child2_bday" name="child2_bday">{{ $operator->child2_bday }}</div>
			</div>
		</div>&nbsp;
		<div class="form-group">
			<div class="col-md-4">
				{!! Form::label('child3_name', 'Thirdborn Child:') !!}
				<div id="child3_name" name="child3_name">{{ $operator->child3_name }}</div>
			</div>
			<div class="col-md-2">
				{!! Form::label('child3_bday', 'Date of Birth:') !!}
				<div id="child3_bday" name="child3_bday">{{ $operator->child3_bday }}</div>
			</div>
			<div class="col-md-4">
				{!! Form::label('child4_name', 'Fourthborn Child:') !!}
				<div id="child4_name" name="child4_name">{{ $operator->child4_name }}</div>
			</div>
			<div class="col-md-2">
				{!! Form::label('child4_bday', 'Date of Birth:') !!}
				<div id="child4_bday" name="child4_bday">{{ $operator->child4_bday }}</div>
			</div>
		</div>&nbsp;
		<div class="form-group">
			<div class="col-md-4">
				{!! Form::label('child5_name', 'Fifthborn Child:') !!}
				<div id="child5_name" name="child5_name">{{ $operator->child5_name }}</div>
			</div>
			<div class="col-md-2">
				{!! Form::label('child5_bday', 'Date of Birth:') !!}
				<div id="child5_bday" name="child5_bday">{{ $operator->child5_bday }}</div>
			</div>
			<div class="col-md-4">
				{!! Form::label('child6_name', 'Sixthborn Child:') !!}
				<div id="child6_name" name="child6_name">{{ $operator->child6_name }}</div>
			</div>
			<div class="col-md-2">
				{!! Form::label('child6_bday', 'Date of Birth:') !!}
				<div id="child6_bday" name="child6_bday">{{ $operator->child6_bday }}</div>
			</div>
		</div>&nbsp;
		<div class="form-group">
			<div class="col-md-4">
				{!! Form::label('child7_name', 'Seventhborn Child:') !!}
				<div id="child7_name" name="child7_name">{{ $operator->child7_name }}</div>
			</div>
			<div class="col-md-2">
				{!! Form::label('child7_bday', 'Date of Birth:') !!}
				<div id="child7_bday" name="child7_bday">{{ $operator->child7_bday }}</div>
			</div>
			<div class="col-md-4">
				{!! Form::label('child8_name', 'Eighthborn Child:') !!}
				<div id="child8_name" name="child8_name">{{ $operator->child8_name }}</div>
			</div>
			<div class="col-md-2">
				{!! Form::label('child8_bday', 'Date of Birth:') !!}
				<div id="child8_bday" name="child8_bday">{{ $operator->child8_bday }}</div>
			</div>
		</div>&nbsp;
		<div class="form-group">
			<div class="col-md-5">
				{!! Form::label('father_name', 'Name of Father:') !!}
				<div id="father_name" name="father_name">{{ $operator->father_name }}</div>
			</div>
			<div class="col-md-7">
				{!! Form::label('father_address', 'Address:') !!}
				<div id="father_address" name="father_address"><p>{{ $operator->father_address }}</p></div>
			</div>
		</div>&nbsp;
		<div class="form-group">
			<div class="col-md-5">
				{!! Form::label('mother_name', 'Name of Mother:') !!}
				<div id="mother_name" name="mother_name">{{ $operator->mother_name }}</div>
			</div>
			<div class="col-md-7">
				{!! Form::label('mother_address', 'Address:') !!}
				<div id="mother_address" name="mother_address"><p>{{ $operator->mother_address }}</p></div>
			</div>
		</div>&nbsp;
		<legend>Educational Background</legend>
		<div class="form-group">
			<div class="col-md-8">
				{!! Form::label('elem_school', 'Elementary School:') !!}
				<div id="elem_school" name="elem_school">{{ $operator->elem_school }}</div>
			</div>
			<div class="col-md-2">
				{!! Form::label('elem_units', 'Units Earned:') !!}
				<div id="elem_units" name="elem_units">{{ $operator->elem_units }}</div>
			</div>
			<div class="col-md-2">
				{!! Form::label('elem_years', 'Year Graduated:') !!}
				<div id="elem_years" name="elem_years">{{ $operator->elem_years }}</div>
			</div>
		</div>&nbsp;
		<div class="form-group">
			<div class="col-md-8">
				{!! Form::label('second_school', 'Secondary School:') !!}
				<div id="second_school" name="second_school">{{ $operator->second_school }}</div>
			</div>
			<div class="col-md-2">
				{!! Form::label('second_units', 'Units Earned:') !!}
				<div id="second_units" name="second_units">{{ $operator->second_units }}</div>
			</div>
			<div class="col-md-2">
				{!! Form::label('second_years', 'Year Graduated:') !!}
				<div id="second_years" name="second_years">{{ $operator->second_years }}</div>
			</div>
		</div>&nbsp;
		<div class="form-group">
			<div class="col-md-8">
				{!! Form::label('voca_school', 'Vocational School:') !!}
				<div id="voca_school" name="voca_school">{{ $operator->voca_school }}</div>
			</div>
			<div class="col-md-2">
				{!! Form::label('voca_units', 'Units Earned:') !!}
				<div id="voca_units" name="voca_units">{{ $operator->voca_units }}</div>
			</div>
			<div class="col-md-2">
				{!! Form::label('voca_years', 'Year Graduated:') !!}
				<div id="voca_years" name="voca_years">{{ $operator->voca_years }}</div>
			</div>
		</div>&nbsp;
		<div class="form-group">
			<div class="col-md-5">
				{!! Form::label('college_school', 'College/University:') !!}
				<div id="college_school" name="college_school">{{ $operator->college_school }}</div>
			</div>
			<div class="col-md-3">
				{!! Form::label('college_course', 'Course:') !!}
				<div id="college_course" name="college_course">{{ $operator->college_course }}</div>
			</div>
			<div class="col-md-2">
				{!! Form::label('college_units', 'Units Earned:') !!}
				<div id="college_units" name="college_units">{{ $operator->college_units }}</div>
			</div>
			<div class="col-md-2">
				{!! Form::label('college_years', 'Year Graduated:') !!}
				<div id="college_years" name="college_years">{{ $operator->college_years }}</div>
			</div>
		</div>&nbsp;
		<div class="form-group">
			<div class="col-md-5">
				{!! Form::label('postgrad_school', 'Post-Graduate University:') !!}
				<div id="postgrad_school" name="postgrad_school">{{ $operator->postgrad_school }}</div>
			</div>
			<div class="col-md-3">
				{!! Form::label('postgrad_course', 'Course:') !!}
				<div id="postgrad_course" name="postgrad_course">{{ $operator->postgrad_course }}</div>
			</div>
			<div class="col-md-2">
				{!! Form::label('postgrad_units', 'Units Earned:') !!}
				<div id="postgrad_units" name="postgrad_units">{{ $operator->postgrad_units }}</div>
			</div>
			<div class="col-md-2">
				{!! Form::label('postgrad_years', 'Year Graduated:') !!}
				<div id="postgrad_years" name="college_years">{{ $operator->postgrad_years }}</div>
			</div>&nbsp;
		</div>
		<legend>Employment History</legend>
		<div class="form-group">
			<div class="col-md-3">
				{!! Form::label('emp_name1', 'Name of Employer:') !!}
				<div id="emp_name1" name="emp_name1">{{ $operator->emp_name1 }}</div>
			</div>
			<div class="col-md-5">
				{!! Form::label('emp_add1', 'Address of Employer/Company:') !!}
				<div id="emp_add1" name="emp_add1">{{ $operator->emp_add1 }}</div>
			</div>
			<div class="col-md-4">
				{!! Form::label('emp_desc1', 'Brief Explanation of Duties:') !!}
				<div id="emp_desc1" name="emp_desc1">{{ $operator->emp_desc1 }}</div>
			</div>
		</div>&nbsp;
		<div class="form-group">
			<div class="col-md-3">
				{!! Form::label('emp_pos1', 'Last Position Held:') !!}
				<div id="emp_pos1" name="emp_pos1">{{ $operator->emp_pos1 }}</div>
			</div>
			<div class="col-md-3">
				{!! Form::label('emp_sal1', 'Salary:') !!}
				<div id="emp_sal1" name="emp_sal1">{{ $operator->emp_sal1 }}</div>
			</div>
			<div class="col-md-3">
				{!! Form::label('emp_date_from1', 'Date Employed From:') !!}
				<div id="emp_date_from1" name="emp_date_from1">{{ $operator->emp_date_from1 }}</div>
			</div>
			<div class="col-md-3">
				{!! Form::label('emp_date_to1', 'Date Employed To:') !!}
				<div id="emp_date_to1" name="emp_date_to1">{{ $operator->emp_date_to1 }}</div>
			</div>
		</div>&nbsp;<hr>
		<div class="form-group">
			<div class="col-md-3">
				{!! Form::label('emp_name2', 'Name of Employer:') !!}
				<div id="emp_name2" name="emp_name2">{{ $operator->emp_name2 }}</div>
			</div>
			<div class="col-md-5">
				{!! Form::label('emp_add2', 'Address of Employer/Company:') !!}
				<div id="emp_add2" name="emp_add2">{{ $operator->emp_add2 }}</div>
			</div>
			<div class="col-md-4">
				{!! Form::label('emp_desc2', 'Brief Explanation of Duties:') !!}
				<div id="emp_desc2" name="emp_desc2">{{ $operator->emp_desc2 }}</div>
			</div>
		</div>&nbsp;
		<div class="form-group">
			<div class="col-md-3">
				{!! Form::label('emp_pos2', 'Last Position Held:') !!}
				<div id="emp_pos2" name="emp_pos2">{{ $operator->emp_pos2 }}</div>
			</div>
			<div class="col-md-3">
				{!! Form::label('emp_sal2', 'Salary:') !!}
				<div id="emp_sal2" name="emp_sal2">{{ $operator->emp_sal2 }}</div>
			</div>
			<div class="col-md-3">
				{!! Form::label('emp_date_from2', 'Date Employed From:') !!}
				<div id="emp_date_from2" name="emp_date_from2">{{ $operator->emp_date_from2 }}</div>
			</div>
			<div class="col-md-3">
				{!! Form::label('emp_date_to2', 'Date Employed To:') !!}
				<div id="emp_date_to2" name="emp_date_to2">{{ $operator->emp_date_to2 }}</div>
			</div>
		</div>&nbsp;<hr>
		<div class="form-group">
			<div class="col-md-3">
				{!! Form::label('emp_name3', 'Name of Employer:') !!}
				<div id="emp_name3" name="emp_name3">{{ $operator->emp_name3 }}</div>
			</div>
			<div class="col-md-5">
				{!! Form::label('emp_add3', 'Address of Employer/Company:') !!}
				<div id="emp_add3" name="emp_add3">{{ $operator->emp_add3 }}</div>
			</div>
			<div class="col-md-4">
				{!! Form::label('emp_desc3', 'Brief Explanation of Duties:') !!}
				<div id="emp_desc3" name="emp_desc3">{{ $operator->emp_desc3 }}</div>
			</div>
		</div>&nbsp;
		<div class="form-group">
			<div class="col-md-3">
				{!! Form::label('emp_pos3', 'Last Position Held:') !!}
				<div id="emp_pos3" name="emp_pos3">{{ $operator->emp_pos3 }}</div>
			</div>
			<div class="col-md-3">
				{!! Form::label('emp_sal3', 'Salary:') !!}
				<div id="emp_sal3" name="emp_sal3">{{ $operator->emp_sal3 }}</div>
			</div>
			<div class="col-md-3">
				{!! Form::label('emp_date_from3', 'Date Employed From:') !!}
				<div id="emp_date_from3" name="emp_date_from3">{{ $operator->emp_date_from3 }}</div>
			</div>
			<div class="col-md-3">
				{!! Form::label('emp_date_to3', 'Date Employed To:') !!}
				<div id="emp_date_to3" name="emp_date_to3">{{ $operator->emp_date_to3 }}</div>
			</div>
		</div>&nbsp;
		<legend>Person to Notify in case of Emergency</legend>
		<div class="form-group">
			<div class="col-md-3">
				{!! Form::label('guard_name', 'Name of Guardian:') !!}
				<div id="guard_name" name="guard_name">{{ $operator->guard_name }}</div>
			</div>
			<div class="col-md-5">
				{!! Form::label('guard_address', 'Address:') !!}
				<div id="guard_address" name="guard_address">{{ $operator->guard_address }}</div>
			</div>
			<div class="col-md-2">
				{!! Form::label('guard_num', 'Contact Number:') !!}
				<div id="guard_num" name="guard_num">{{ $operator->guard_num }}</div>
			</div>
			<div class="col-md-2">
				{!! Form::label('guard_relation', 'Relation to Guardian:') !!}
				<div id="guard_relation" name="guard_relation">{{ $operator->guard_relation }}</div>
			</div>
		</div>&nbsp;<hr>
		<div class="form-group">
			<div class="col-md-12">
				{!! Form::label('references', 'Character Reference:') !!}
				<div id="references" name="references">{{ $operator->references }}</div>
			</div>
		</div>&nbsp;
		<div class="form-group">
			<div class="col-md-6">
				{!! Form::label('reg_date', 'Registration Date:') !!}
				<div id="reg_date" name="reg_date">{{ $operator->reg_date }}</div>
			</div>
			<div class="col-md-6">
				{!! Form::label('upd_date', 'Date Updated:') !!}
				<div id="upd_date" name="upd_date">{{ $operator->upd_date }}</div>
			</div>
		</div>
	</div>
</div>