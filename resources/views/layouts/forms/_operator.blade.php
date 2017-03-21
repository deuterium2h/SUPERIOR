<div id="accordion">
	<div id="applicant-info">
		<b><legend>Applicant's Information</legend></b>
		<div class="form-group">
			<div class="col-md-2">
				{!! Form::label(null, 'Complete Name: ') !!}
				{!! Form::text('last_name', old('last_name'), ['class' => 'form-control', 'placeholder' => 'Last Name', 'required']) !!}	
			</div>
			<div class="col-md-3">
				{!! Form::label(null, '&nbsp;') !!}
				{!! Form::text('first_name', old('first_name'), ['class' => 'form-control', 'placeholder' => 'First Name', 'required']) !!}	
			</div>
			<div class="col-md-2">
				{!! Form::label(null, '&nbsp;') !!}
				{!! Form::text('middle_name', old('middle_name'), ['class' => 'form-control', 'placeholder' => 'Middle Name', 'required']) !!}	
			</div>
			<div class="col-md-2">
				{!! Form::label('contact_num', 'Contact Number:') !!}
				{!! Form::text('contact_num', old('contact_num'), ['class' => 'form-control', 'placeholder' => '(09XX) XXX-XXXX', 'required', 'data-mask' => '(0999) 999-9999']) !!}
			</div>
			<div class="col-md-3">
				{!! Form::label('avatar', 'Applicant Photo:') !!}
				{!! Form::file('avatar', ['class' => 'form-control']) !!}
			</div>
		</div>&nbsp;
		<div class="form-group">
			<div class="col-md-6">
				{!! Form::label('city_address', 'City Address: ') !!}
				{!! Form::textarea('city_address', old('city_address'), ['class' => 'form-control', 'placeholder' => '#St., Subd., Brgy., Road, City', 'rows' => '2', 'required']) !!}	
			</div>
			<div class="col-md-6">
				{!! Form::label('province_address', 'Provincial Address:') !!}
				{!! Form::textarea('province_address', old('province_address'), ['class' => 'form-control', 'placeholder' => '#St., Subd., Brgy., City, Province', 'rows' => '2', 'required']) !!}	
			</div>
		</div>&nbsp;
		<div class="form-group">
			<div class="col-md-2">
				{!! Form::label('citizenship', 'Citizenship: ') !!}
				{!! Form::text('citizenship', 'Filipino', ['class' => 'form-control', 'required']) !!}	
			</div>
			<div class="col-md-3">
				{!! Form::label('birth_date', 'Date of Birth:') !!}
				{!! Form::date('birth_date', old('birth_date'), ['class' => 'form-control', 'required']) !!}
			</div>
			<div class="col-md-4">
				{!! Form::label('birth_place', 'Place of Birth:') !!}
				{!! Form::text('birth_place', old('birth_place'), ['class' => 'form-control', 'placeholder' => 'Barangay, City', 'required']) !!}
			</div>
			<div class="col-md-1">
				{!! Form::label('age', 'Age:') !!}
				{!! Form::text('age', old('age'), ['class' => 'form-control', 'placeholder' => 'XX', 'required', 'data-mask' => '99']) !!}
			</div>
			<div class="col-md-2">
				{!! Form::label('gender', 'Gender:') !!}
				{!! Form::select('gender', ['Male' => 'Male', 'Female' => 'Female'], null, ['class' => 'form-control', 'placeholder' => 'Select a Gender', 'required']) !!}
			</div>
		</div>&nbsp;
		<div class="form-group">
			<div class="col-md-3">
				{!! Form::label('civil_status', 'Civil Status:') !!}
				{!! Form::select('civil_status', ['Single' => 'Single', 'Married' => 'Married'], null, ['class' => 'form-control', 'placeholder' => 'Select Civil Status'], 'required') !!}
			</div>
			<div class="col-md-3">
				{!! Form::label('blood_type', 'Blood Type:') !!}
				{!! Form::select('blood_type', 
				['AB+' => 'AB+', 'AB-' => 'AB-', 'A+' => 'A+', 'A-' => 'A-', 'B+' => 'B+', 'B-' => 'B-', 'O+' => 'O+', 'O-' => 'O-' ], null, ['class' => 'form-control', 'placeholder' => 'Select a Blood Type']) !!}
			</div>
			<div class="col-md-3">
				{!! Form::label('weight', 'Weight:') !!}
				<div class="input-group">
					{!! Form::text('weight', old('weight'), ['placeholder' => 'XXX', 'class' => 'form-control', 'aria-describedby' => 'weight-addon', 'required', 'data-mask' => '999']) !!}
					<i class="input-group-addon" id="weight-addon">Kg</i>
				</div>
			</div>
			<div class="col-md-3">
				{!! Form::label('height', 'Height:') !!}
				<div class="input-group">
					{!! Form::text('height', old('height'), ['placeholder' => 'XXX', 'class' => 'form-control', 'aria-describedby' => 'height-addon', 'required', 'data-mask' => '999']) !!}
					<i class="input-group-addon" id="height-addon">cm</i>
				</div>
			</div>
		</div>&nbsp;
		<div class="form-group">
			<div class="col-md-12">
				{!! Form::label('language', 'Language/Dialects you can speak or write:') !!}
				{!! Form::text('language', old('language'), ['class' => 'form-control', 'placeholder' => 'e.g.: Filipino, English, Bicolano, Ilocano']) !!}
			</div>
		</div>&nbsp;
		<div class="form-group">
			<div class="col-md-3">
				{!! Form::label('pagibig_no', 'Pag-Ibig Number:') !!}
				{!! Form::text('pagibig_no', old('pagibig_no'), ['class' => 'form-control', 'placeholder' => 'XXXX-XXXX-XXXX', 'required', 'data-mask' => '9999-9999-9999']) !!}
			</div>
			<div class="col-md-3">
				{!! Form::label('sss_no', 'SSS Number:') !!}
				{!! Form::text('sss_no', old('sss_no'), ['class' => 'form-control', 'placeholder' => 'XXX-XXX-XXX', 'required', 'data-mask' => '999-999-999']) !!}
			</div>
			<div class="col-md-3">
				{!! Form::label('philhealth_no', 'Philhealth:') !!}
				{!! Form::text('philhealth_no', old('philhealth_no'), ['class' => 'form-control', 'placeholder' => 'XX-XXXXXXXX-X', 'required', 'data-mask' => '99-99999999-9']) !!}
			</div>
			<div class="col-md-3">
				{!! Form::label('tax_no', 'Tax Identification Number:') !!}
				{!! Form::text('tax_no', old('tax_no'), ['class' => 'form-control', 'placeholder' => 'XXX-XXX-XXX-XXX', 'required', 'data-mask' => '999-999-999-999']) !!}
			</div>
		</div>&nbsp;
		<div class="form-group">
			<div class="col-md-6">
				{!! Form::label('skills', 'Skills:') !!}
				{!! Form::text('skills', old('skills'), ['class' => 'form-control', 'placeholder' => 'e.g.: Wood Carving, Car Mechanic, Welding']) !!}
			</div>
			<div class="col-md-6">
				{!! Form::label('computer_skills', 'Skills on Computer:') !!}
				{!! Form::text('computer_skills', old('computer_skills'), ['class' => 'form-control', 'placeholder' => 'e.g.: Microsoft Office, Computer Technician']) !!}
			</div>
		</div>&nbsp;
		<div class="form-group">
			<div class="col-md-12">
				{!! Form::label('exams', 'Licensure and/or Government Exam Taken:') !!}
				{!! Form::textarea('exams', old('exams'), ['class' => 'form-control', 'rows' => '2', 'placeholder' => 'e.g.: Automotive Servicing: NCII, Bookkeeping: NCII, CPA Board Exam, DMD Board Exam']) !!}
			</div>
		</div>&nbsp;
	</div>
	<div id="family-info">
		<b><legend>Family Information</legend></b>
		<div class="form-group">
			<div class="col-md-6">
				{!! Form::label('spouse_name', 'Name of Spouse:') !!}
				{!! Form::text('spouse_name', old('spouse_name'), ['class' => 'form-control', 'placeholder' => '[First Name] [Maiden Name]-[Last Name]']) !!}
			</div>
			<div class="col-md-6">
				{!! Form::label('spouse_job', 'Occupation:') !!}
				{!! Form::text('spouse_job', old('spouse_job'), ['class' => 'form-control', 'placeholder' => 'e.g.: Accountant']) !!}
			</div>
		</div>&nbsp;
		<div class="form-group">
			{{-- 1st & 2nd Child --}}
			<div id="batch1">
				<div class="col-md-4">
					{!! Form::label('child1_name', 'Name of Child:') !!}
					{!! Form::text('child1_name', old('child1_name'), ['class' => 'form-control', 'placeholder' => 'Firstborn Child']) !!}
				</div>
				<div class="col-md-2">
					{!! Form::label('child1_bday', 'Date of Birth:') !!}
					{!! Form::date('child1_bday', old('child1_bday'), ['class' => 'form-control']) !!}
				</div>
				<div class="col-md-4">
					{!! Form::label('child2_name', '&nbsp;') !!}
					{!! Form::text('child2_name', old('child2_name'), ['class' => 'form-control', 'placeholder' => 'Secondborn Child']) !!}
				</div>
				<div class="col-md-2">
					{!! Form::label('child2_bday', '&nbsp;') !!}
					{!! Form::date('child2_bday', old('child2_bday'), ['class' => 'form-control']) !!}
				</div>
			</div>
			{{-- 3rd & 4th Child --}}
			<div id="batch2">
				<div class="col-md-4">
					{!! Form::label('child3_name', '&nbsp;') !!}
					{!! Form::text('child3_name', old('child3_name'), ['class' => 'form-control', 'placeholder' => 'Thirdborn Child']) !!}
				</div>
				<div class="col-md-2">
					{!! Form::label('child3_bday', '&nbsp;') !!}
					{!! Form::date('child3_bday', old('child3_bday'), ['class' => 'form-control']) !!}
				</div>
				<div class="col-md-4">
					{!! Form::label('child4_name', '&nbsp;') !!}
					{!! Form::text('child4_name', old('child4_name'), ['class' => 'form-control', 'placeholder' => 'Fourthborn Child']) !!}
				</div>
				<div class="col-md-2">
					{!! Form::label('child4_bday', '&nbsp;') !!}
					{!! Form::date('child4_bday', old('child4_bday'), ['class' => 'form-control']) !!}
				</div>
			</div>
			{{-- 5th & 6th Child --}}
			<div id="batch3">
				<div class="col-md-4">
					{!! Form::label('child5_name', '&nbsp;') !!}
					{!! Form::text('child5_name', old('child5_name'), ['class' => 'form-control', 'placeholder' => 'Fifthborn Child']) !!}
				</div>
				<div class="col-md-2">
					{!! Form::label('child5_bday', '&nbsp;') !!}
					{!! Form::date('child5_bday', old('child5_bday'), ['class' => 'form-control']) !!}
				</div>
				<div class="col-md-4">
					{!! Form::label('child6_name', '&nbsp;') !!}
					{!! Form::text('child6_name', old('child6_name'), ['class' => 'form-control', 'placeholder' => 'Sixthborn Child']) !!}
				</div>
				<div class="col-md-2">
					{!! Form::label('child6_bday', '&nbsp;') !!}
					{!! Form::date('child6_bday', old('child6_bday'), ['class' => 'form-control']) !!}
				</div>
			</div>
			{{-- 7th & 8th Child --}}
			<div id="batch4">
				<div class="col-md-4">
					{!! Form::label('child7_name', '&nbsp;') !!}
					{!! Form::text('child7_name', old('child7_name'), ['class' => 'form-control', 'placeholder' => 'Seventhborn Child']) !!}
				</div>
				<div class="col-md-2">
					{!! Form::label('child7_bday', '&nbsp;') !!}
					{!! Form::date('child7_bday', old('child7_bday'), ['class' => 'form-control']) !!}
				</div>
				<div class="col-md-4">
					{!! Form::label('child8_name', '&nbsp;') !!}
					{!! Form::text('child8_name', old('child8_name'), ['class' => 'form-control', 'placeholder' => 'Eighthborn Child']) !!}
				</div>
				<div class="col-md-2">
					{!! Form::label('child8_bday', '&nbsp;') !!}
					{!! Form::date('child8_bday', old('child8_bday'), ['class' => 'form-control']) !!}
				</div>
			</div>
		</div>&nbsp;
		<div class="form-group">
			<div class="col-md-6">
				{!! Form::label('father_name', 'Name of Father:') !!}
				{!! Form::text('father_name', old('father_name'), ['class' => 'form-control','placeholder' => '[First Name] [Middle Name] [Last Name]']) !!}
			</div>
			<div class="col-md-6">
				{!! Form::label('father_address', 'Address:') !!}
				{!! Form::textarea('father_address', old('father_address'), ['class' => 'form-control', 'rows' => '2', 'placeholder' => '#St., Subd., Brgy., City, Province']) !!}
			</div>
		</div>&nbsp;
		<div class="form-group">
			<div class="col-md-6">
				{!! Form::label('mother_name', 'Name of Mother:') !!}
				{!! Form::text('mother_name', old('mother_name'), ['class' => 'form-control','placeholder' => '[First Name] [Middle Name] [Last Name]']) !!}
			</div>
			<div class="col-md-6">
				{!! Form::label('mother_address', 'Address:') !!}
				{!! Form::textarea('mother_address', old('mother_address'), ['class' => 'form-control', 'rows' => '2', 'placeholder' => '#St., Subd., Brgy., City, Province']) !!}
			</div>
		</div>&nbsp;
	</div>
	<div id="education-info">
		<b><legend>Educational Background</legend></b>
		<div class="form-group">
			<div id="elementary">
				<div class="col-md-8">
					{!! Form::label('elem_school', 'Name of School:') !!}
					{!! Form::text('elem_school', old('elem_school'), ['class' => 'form-control', 'placeholder' => 'Elementary']) !!}
				</div>
				<div class="col-md-2">
					{!! Form::label('elem_units', '&nbsp;') !!}
					{!! Form::text('elem_units', old('elem_units'), ['class' => 'form-control', 'placeholder' => 'Units Earned']) !!}
				</div>
				<div class="col-md-2">
					{!! Form::label('elem_year', 'Year Graduated:') !!}
					{!! Form::text('elem_year', old('elem_year'), ['class' => 'form-control', 'placeholder' => 'XXXX', 'data-mask' => '9999']) !!}
				</div>
			</div>
			{{-- High School --}}
			<div id="highschool">
				<div class="col-md-8">
					{!! Form::label('second_school', '&nbsp;') !!}
					{!! Form::text('second_school', old('second_school'), ['class' => 'form-control', 'placeholder' => 'Secondary']) !!}
				</div>
				<div class="col-md-2">
					{!! Form::label('second_units', '&nbsp;') !!}
					{!! Form::text('second_units', old('second_units'), ['class' => 'form-control', 'placeholder' => 'Units Earned']) !!}
				</div>
				<div class="col-md-2">
					{!! Form::label('second_year', '&nbsp;') !!}
					{!! Form::text('second_year', old('second_year'), ['class' => 'form-control', 'placeholder' => 'XXXX', 'data-mask' => '9999']) !!}
				</div>
			</div>
			{{-- Vocational --}}
			<div id="vocational">
				<div class="col-md-8">
					{!! Form::label('voca_school', '&nbsp;') !!}
					{!! Form::text('voca_school', old('voca_school'), ['class' => 'form-control', 'placeholder' => 'Vocational']) !!}
				</div>
				<div class="col-md-2">
					{!! Form::label('voca_units', '&nbsp;') !!}
					{!! Form::text('voca_units', old('voca_units'), ['class' => 'form-control', 'placeholder' => 'Units Earned']) !!}
				</div>
				<div class="col-md-2">
					{!! Form::label('voca_year', '&nbsp;') !!}
					{!! Form::text('voca_year', old('voca_year'), ['class' => 'form-control', 'placeholder' => 'XXXX', 'data-mask' => '9999']) !!}
				</div>
			</div>
			{{-- College --}}
			<div id="college">
				<div class="col-md-6">
					{!! Form::label('college_school', '&nbsp;') !!}
					{!! Form::text('college_school', old('college_school'), ['class' => 'form-control', 'placeholder' => 'College']) !!}
				</div>
				<div class="col-md-2">
					{!! Form::label('college_course', '&nbsp;') !!}
					{!! Form::text('college_course', old('college_course'), ['class' => 'form-control', 'placeholder' => 'Course']) !!}
				</div>
				<div class="col-md-2">
					{!! Form::label('college_units', '&nbsp;') !!}
					{!! Form::text('college_units', old('college_units'), ['class' => 'form-control', 'placeholder' => 'Units Earned']) !!}
				</div>
				<div class="col-md-2">
					{!! Form::label('college_year', '&nbsp;') !!}
					{!! Form::text('college_year', old('college_year'), ['class' => 'form-control', 'placeholder' => 'XXXX', 'data-mask' => '9999']) !!}
				</div>	
			</div>
			{{-- Post_Graduate (Masteral/Doctoral) --}}
			<div id="postgrad">
				<div class="col-md-6">
					{!! Form::label('postgrad_school', '&nbsp;') !!}
					{!! Form::text('postgrad_school', old('postgrad_school'), ['class' => 'form-control', 'placeholder' => 'Post-Graduate']) !!}
				</div>
				<div class="col-md-2">
					{!! Form::label('postgrad_course', '&nbsp;') !!}
					{!! Form::text('postgrad_course', old('postgrad_course'), ['class' => 'form-control', 'placeholder' => 'Course']) !!}
				</div>
				<div class="col-md-2">
					{!! Form::label('postgrad_units', '&nbsp;') !!}
					{!! Form::text('postgrad_units', old('postgrad_units'), ['class' => 'form-control', 'placeholder' => 'Units Earned']) !!}
				</div>
				<div class="col-md-2">
					{!! Form::label('postgrad_year', '&nbsp;') !!}
					{!! Form::text('postgrad_year', old('postgrad_year'), ['class' => 'form-control', 'placeholder' => 'XXXX', 'data-mask' => '9999']) !!}
				</div>	
			</div>
		</div>&nbsp;
	</div>
	<div id="employment-history">
		<b><legend>Employment History</legend></b>
		{{-- Employment Record 1 --}}
		<div id="emp1">
			<div class="form-group">
				<div class="col-md-3">
					{!! Form::label('emp_name1', 'Name of Employer:') !!}
					{!! Form::text('emp_name1', old('emp_name1'), ['class' => 'form-control', 'placeholder' => 'Complete Name']) !!}
				</div>
				<div class="col-md-3">
					{!! Form::label('emp_add1', 'Address of Employer:') !!}
					{!! Form::text('emp_add1', old('emp_add1'), ['class' => 'form-control', 'placeholder' => 'Complete Address']) !!}
				</div>
				<div class="col-md-3">
					{!! Form::label('emp_date_from1', 'Date Employed From:') !!}
					{!! Form::date('emp_date_from1', old('emp_date_from1'), ['class' => 'form-control']) !!}
				</div>
				<div class="col-md-3">
					{!! Form::label('emp_date_to1', 'Date Employed To:') !!}
					{!! Form::date('emp_date_to1', old('emp_date_to1'), ['class' => 'form-control']) !!}
				</div>
			</div>&nbsp;
			<div class="form-group">
				<div class="col-md-6">
					{!! Form::label('emp_desc1', 'Brief Explanation of Duties:') !!}
					{!! Form::text('emp_desc1', old('emp_desc1'), ['class' => 'form-control', 'placeholder' => 'Summary of what you do on former company.']) !!}
				</div>
				<div class="col-md-3">
					{!! Form::label('emp_pos1', 'Last Position Held:') !!}
					{!! Form::text('emp_pos1', old('emp_pos1'), ['class' => 'form-control', 'placeholder' => 'e.g.: Supervisor']) !!}
				</div>
				<div class="col-md-3">
					{!! Form::label('emp_sal1', 'Salary:') !!}
					{!! Form::text('emp_sal1', old('emp_sal1'), ['class' => 'form-control', 'placeholder' => 'e.g.: 20,000']) !!}
				</div>
			</div>&nbsp;
		</div>
		<hr>
		{{-- Employment Record 2 --}}
		<div id="emp2">
			<div class="form-group">
				<div class="col-md-3">
					{!! Form::label('emp_name2', 'Name of Employer:') !!}
					{!! Form::text('emp_name2', old('emp_name2'), ['class' => 'form-control', 'placeholder' => 'Complete Name']) !!}
				</div>
				<div class="col-md-3">
					{!! Form::label('emp_add2', 'Address of Employer:') !!}
					{!! Form::text('emp_add2', old('emp_add2'), ['class' => 'form-control', 'placeholder' => 'Complete Address']) !!}
				</div>
				<div class="col-md-3">
					{!! Form::label('emp_date_from2', 'Date Employed From:') !!}
					{!! Form::date('emp_date_from2', old('emp_date_from2'), ['class' => 'form-control']) !!}
				</div>
				<div class="col-md-3">
					{!! Form::label('emp_date_to2', 'Date Employed To:') !!}
					{!! Form::date('emp_date_to2', old('emp_date_to2'), ['class' => 'form-control']) !!}
				</div>
			</div>&nbsp;
			<div class="form-group">
				<div class="col-md-6">
					{!! Form::label('emp_desc2', 'Brief Explanation of Duties:') !!}
					{!! Form::text('emp_desc2', old('emp_desc2'), ['class' => 'form-control', 'placeholder' => 'Summary of what you do on former company.']) !!}
				</div>
				<div class="col-md-3">
					{!! Form::label('emp_pos2', 'Last Position Held:') !!}
					{!! Form::text('emp_pos2', old('emp_pos2'), ['class' => 'form-control', 'placeholder' => 'e.g.: Supervisor']) !!}
				</div>
				<div class="col-md-3">
					{!! Form::label('emp_sal2', 'Salary:') !!}
					{!! Form::text('emp_sal2', old('emp_sal2'), ['class' => 'form-control', 'placeholder' => 'e.g.: 20,000']) !!}
				</div>
			</div>&nbsp;
		</div>
		<hr>
		{{-- Employment Record 3 --}}
		<div id="emp3">
			<div class="form-group">
				<div class="col-md-3">
					{!! Form::label('emp_name3', 'Name of Employer:') !!}
					{!! Form::text('emp_name3', old('emp_name3'), ['class' => 'form-control', 'placeholder' => 'Complete Name']) !!}
				</div>
				<div class="col-md-3">
					{!! Form::label('emp_add3', 'Address of Employer:') !!}
					{!! Form::text('emp_add3', old('emp_add3'), ['class' => 'form-control', 'placeholder' => 'Complete Address']) !!}
				</div>
				<div class="col-md-3">
					{!! Form::label('emp_date_from3', 'Date Employed From:') !!}
					{!! Form::date('emp_date_from3', old('emp_date_from3'), ['class' => 'form-control']) !!}
				</div>
				<div class="col-md-3">
					{!! Form::label('emp_date_to3', 'Date Employed To:') !!}
					{!! Form::date('emp_date_to3', old('emp_date_to3'), ['class' => 'form-control']) !!}
				</div>
			</div>&nbsp;
			<div class="form-group">
				<div class="col-md-6">
					{!! Form::label('emp_desc3', 'Brief Explanation of Duties:') !!}
					{!! Form::text('emp_desc3', old('emp_desc3'), ['class' => 'form-control', 'placeholder' => 'Summary of what you do on former company.']) !!}
				</div>
				<div class="col-md-3">
					{!! Form::label('emp_pos3', 'Last Position Held:') !!}
					{!! Form::text('emp_pos3', old('emp_pos3'), ['class' => 'form-control', 'placeholder' => 'e.g.: Supervisor']) !!}
				</div>
				<div class="col-md-3">
					{!! Form::label('emp_sal3', 'Salary:') !!}
					{!! Form::text('emp_sal3', old('emp_sal3'), ['class' => 'form-control', 'placeholder' => 'e.g.: 20,000']) !!}
				</div>
			</div>
		</div>&nbsp;
	</div>
	<div id="guardian-info">
		<b><legend>Person to Notify in case of Emergency</legend></b>
		<div class="form-group">
			<div class="col-md-3">
				{!! Form::label('guard_name', 'Name of Guardian:') !!}
				{!! Form::text('guard_name', old('guard_name'), ['class' => 'form-control', 'placeholder' => '[First Name] [Last Name]', 'required']) !!}
			</div>
			<div class="col-md-5">
				{!! Form::label('guard_address', 'Address:') !!}
				{!! Form::text('guard_address', old('guard_address'), ['class' => 'form-control', 'placeholder' => 'Complete Address', 'required']) !!}
			</div>
			<div class="col-md-2">
				{!! Form::label('guard_num', 'Contact Number:') !!}
				{!! Form::text('guard_num', old('guard_num'), ['class' => 'form-control', 'placeholder' => '(09XX) XXX-XXXX', 'required', 'data-mask' => '(0999) 999-9999']) !!}
			</div>
			<div class="col-md-2">
				{!! Form::label('guard_relation', 'Relation to Guardian:') !!}
				{!! Form::text('guard_relation', old('guard_relation'), ['class' => 'form-control', 'placeholder' => 'e.g.: Mother', 'required']) !!}
			</div>
		</div>&nbsp;
		<div class="form-group">
			<div class="col-md-12">
				{!! Form::label('references', 'References:') !!}
				{!! Form::textarea('references', old('references'), ['class' => 'form-control', 'rows' => '3', 'placeholder' => 'Complete Name, separated by a semi-colon (;) (e.g.: Juan Dela Cruz; James Bond; Andres Bonifacio)']) !!}
			</div>
		</div>&nbsp;
		<div class="form-group">
			<div class="col-md-6">
				{!! Form::label('reg_date', 'Registration Date:') !!}
				{!! Form::text('reg_date', $submitButton=='Add New Operator' ? date('Y-m-d') : old('reg_date'), ['class' => 'form-control', 'readonly']) !!}
			</div>
			<div class="col-md-6">
				{!! Form::label('upd_date', 'Date Updated:') !!}
				{!! Form::text('upd_date', date('Y-m-d'), ['class' => 'form-control', 'readonly']) !!}
			</div>
		</div>
	</div>
</div>
<div class="form-group">&nbsp;
	<div class="col-md-12">
		{!! Form::submit($submitButton, ['class' => 'btn btn-primary form-control']) !!}
	</div>
</div>
{!! Form::close() !!}