<div class="col-md-6">
	<div class="panel panel-default">
		<div class="panel-heading">List of Unpaid Associate Members
			<span class="badge pull-right">
			{{ count(App\Associate::whereColumn('amount_paid', '<', 'amount_total')->get()) }}
			</span>
		</div>
		<div class="panel-body">
			<table class="table table-hover">
				<thead>
					<tr>
						<th>Name</th>
						<th>Amount Paid</th>
						<th>Total Amount</th>
					</tr>
				</thead>
				<tbody>
					@foreach($associates as $associate)
					<tr>
						<td>
							<a href="/associates/{{ $associate->id }}">{{ $associate->last_name}}, {{ $associate->first_name}} {{ $associate->middle_name }}</a>
						</td>
						<td>{{ $associate->amount_paid }}</td>
						<td>{{ $associate->amount_total }}</td>
					</tr>
					@endforeach
				</tbody>
			</table>
			
		</div>
		<div class="panel-footer">
			<center>{{ $associates->links() }}</center>
		</div>
	</div>
</div>