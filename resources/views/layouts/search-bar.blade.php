{!! Form::open(['method' => 'GET']) !!}
	<div class="form-group input-group"><span class="input-group-addon"><i class="fa fa-search"></i></span>
	{!! Form::input('search', 'q', null, ['class' => 'form-control', 'placeholder' => 'Search...']) !!}
	<span class="input-group-btn">{!! Form::submit('Go!', ['class' => 'btn btn-primary']) !!}</span>
	</div>
{!! Form::close() !!}