<div class="panel panel-primary">
	<div class="panel-heading">
	{{ $vehicle->plate_num }} | {{ $vehicle->opr_name }}
	<form slot="delete" class="pull-right" method="POST" action="/vehicles/{{ $vehicle->id }}">
		{!! csrf_field() !!}
		<input type="hidden" name="_method" value="DELETE">
		<button type="submit" class="btn btn-danger btn-xs "><i class="fa fa-trash-o fa-lg"></i></button>
	</form>
	<span class="pull-right">&nbsp;</span><span class="pull-right">&nbsp;</span>
	<a href="/vehicles/{{ $vehicle->plate_num }}/edit" slot="update" class="btn btn-success btn-xs pull-right">
		<i class="fa fa-pencil-square-o fa-lg"></i>
	</a>
	</div>
	<div class="panel-body">
		<div id="vehicle-reg">
			<b><legend>Vehicle's Registration Information</legend></b>
			<div class="form-group">
				<div class="col-md-6">
					{!! Form::label('plate_num', 'Plate Number:') !!}
					<div id="plate_num" name="plate_num">{{ $vehicle->plate_num }}</div>
				</div>
				<div class="col-md-6">
					{!! Form::label('agree_date', 'Management Agreement Date:') !!}
					<div id="agree_date" name="agree_date">{{ $vehicle->agree_date }}</div>
				</div>
			</div>&nbsp;
			<div class="form-group">
				<div class="col-md-4">
					{!! Form::label('ltfrb_num', 'LTFRB Frachise Number:') !!}
					<div id="ltfrb_num" name="ltfrb_num">{{ $vehicle->ltfrb_num }}</div>
				</div>
				<div class="col-md-2">
					{!! Form::label('ltfrb_exp', 'Expiration Date:') !!}
					<div id="ltfrb_exp" name="ltfrb_exp">{{ $vehicle->ltfrb_exp }}</div>
				</div>
				<div class="col-md-4">
					{!! Form::label('dot_num', 'Department of Tourism Number:') !!}
					<div id="dot_num" name="dot_num">{{ $vehicle->dot_num }}</div>
				</div>
				<div class="col-md-2">
					{!! Form::label('dot_exp', 'Expiration Date:') !!}
					<div id="dot_exp" name="dot_exp">{{ $vehicle->dot_exp }}</div>
				</div>
			</div>&nbsp;
		</div>
		<div id="vehicle-owner">
			<b><legend>Vehicle Operator</legend></b>
			<div class="form-group">
				<div class="col-md-4">
					{!! Form::label('opr_name', 'Operator:') !!}
					<div id="opr_name" name="opr_name">{{ $vehicle->opr_name }}</div>
				</div>
				<div class="col-md-8">
					{!! Form::label('opr_add', 'Address:') !!}
					<div id="opr_add" name="opr_add">{{ $vehicle->opr_add }}</div>
				</div>
			</div>&nbsp;
			<div class="form-group">
				<div class="col-md-4">
					{!! Form::label('opr_num', 'Contact Number:') !!}
					<div id="opr_num" name="opr_num">{{ $vehicle->opr_num }}</div>
				</div>
				<div class="col-md-4">
					{!! Form::label('opr_or_num', 'O.R. Number:') !!}
					<div id="opr_or_num" name="opr_or_num">{{ $vehicle->opr_or_num }}</div>
				</div>
				<div class="col-md-4">
					{!! Form::label('opr_cr_num', 'C.R. Number:') !!}
					<div id="opr_cr_num" name="opr_cr_num">{{ $vehicle->opr_cr_num }}</div>
				</div>
			</div>&nbsp;
		</div>
		<div id="vehicle-specs">
			<b><legend>Vehicle Specifications</legend></b>
			<div class="form-group">
				<div class="col-md-3">
					{!! Form::label('make', 'Make:') !!}
					<div id="make" name="make">{{ $vehicle->make }}</div>
				</div>
				<div class="col-md-3">
					{!! Form::label('body_type', 'Body Type:') !!}
					<div id="body_type" name="body_type">{{ $vehicle->body_type }}</div>
				</div>
				<div class="col-md-2">
					{!! Form::label('year_model', 'Year Model:') !!}
					<div id="year_model" name="year_model">{{ $vehicle->year_model }}</div>
				</div>
				<div class="col-md-2">
					{!! Form::label('chasis_num', 'Chasis Number:') !!}
					<div id="chasis_num" name="chasis_num">{{ $vehicle->chasis_num }}</div>
				</div>
				<div class="col-md-2">
					{!! Form::label('engine_num', 'Engine Number:') !!}
					<div id="engine_num" name="engine_num">{{ $vehicle->engine_num }}</div>
				</div>
			</div>&nbsp;
		</div>
		<div id="vehicle-testdate">
		<b><legend>Vehicle Check Dates</legend></b>
			<div class="form-group">
				<div class="col-md-4">
					{!! Form::label('tpl_insure_date', 'T.P.L. Insurance Date:') !!}
					<div id="tpl_insure_date" name="tpl_insure_date">{{ $vehicle->tpl_insure_date }}</div>
				</div>
				<div class="col-md-4">
					{!! Form::label('pam_insure_date', 'P.A.M. Insurance Date:') !!}
					<div id="pam_insure_date" name="pam_insure_date">{{ $vehicle->pam_insure_date }}</div>
				</div>
				<div class="col-md-4">
					{!! Form::label('emission_test_date', 'Emission Test Date:') !!}
					<div id="emission_test_date" name="emission_test_date">{{ $vehicle->emission_test_date }}</div>
				</div>
			</div>&nbsp;
		</div>
		<div id="vehicle-photos">
			<b><legend>Vehicle Photos</legend></b>
			<div class="form-group">
				<div class="col-md-12 gallery">
					@foreach ($vehicle->photos->chunk(4) as $set)
						<div class="row">
							@foreach ($set as $photo)
								<form method="POST" action="/photos/{{ $photo->id }}">
									 {!! csrf_field() !!}
									 <input type="hidden" name="_method" value="DELETE">
									 <button class="btn btn-xs btn-danger" type="submit" style="float: left; position: relative;">
									 	<i class="fa fa-trash-o"></i>
									 </button>
								</form>
								<div class="col-md-3">
									<a href="/{{ $photo->path }}" data-lity>
										<img src="/{{ $photo->thumbnail_path }}" alt="" style="border: 5px solid #222; margin-bottom: 3em;">
									</a>
								</div>
							@endforeach
						</div>
					@endforeach
				</div>
			</div>&nbsp;
		</div>
	</div>
</div>