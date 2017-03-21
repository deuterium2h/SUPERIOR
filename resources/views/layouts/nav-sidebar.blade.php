<div class="col-md-2">
	<div class="panel-group">
		<div class="panel panel-default">
			<div class="panel-heading">Database</div>
			<div class="panel-body pnl-sidebar">
				<table class="table tbl-sidebar">
					<tr>
						<td><a href="/regulars">Regular<span class="badge pull-right">{{ count(App\Regular::all()) }}</span></a></td>
					</tr>
					<tr>
						<td><a href="/associates">Associate<span class="badge pull-right">{{ count(App\Associate::all()) }}</span></a></td>
					</tr>
					<tr>
						<td><a href="/operators">Operator<span class="badge pull-right">{{ count(App\Operator::all()) }}</span></a></td>
					</tr>
					<tr>
						<td><a href="/drivers">Driver<span class="badge pull-right">{{ count(App\Driver::all()) }}</span></a></td>
					</tr>
					<tr>
						<td><a href="/vehicles">Vehicles<span class="badge pull-right">{{ count(App\Vehicle::all()) }}</span></a></td>
					</tr>
				</table>
			</div>

		</div>
	</div>
</div>