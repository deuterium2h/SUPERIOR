<div class="col-md-6">
	<div class="panel panel-default">
		<div class="panel-heading">List of Unpaid Regular Members
			<span class="badge pull-right">
			{{ count(App\Regular::whereColumn('amount_paid', '<', 'amount_total')->get()) }}
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
					@foreach($regulars as $regular)
					<tr>
						<td>
							<a href="/regulars/{{ $regular->id }}">{{ $regular->last_name}}, {{ $regular->first_name}} {{ $regular->middle_name }}</a>
						</td>
						<td>{{ $regular->amount_paid }}</td>
						<td>{{ $regular->amount_total }}</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
		<div class="panel-footer">
			<center>{{ $regulars->links() }}</center>
		</div>
	</div>
</div>