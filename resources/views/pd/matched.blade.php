@extends('layouts.app')

@section('content')
	<div class="container">
		<table class="table table-hover">
			<thead>
				<tr>
					<th>Mã số</th>
					<th>Amount</th>
					<th>User</th>
					<th>Confirm</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>1</td>
					<td>{{ $pd->amount/3}}</td>
					<td>test1</td>
					<td>
					<?php if (!in_array(2,$pdRecords)): ?>
						<a href="/pd/{{ $pd->id }}/sender_confirm/2">Confirm</a>
					<?php endif ?>
					</td>
				</tr>
				<tr>
					<td>2</td>
					<td>{{ $pd->amount/3}}</td>
					<td>test2</td>
					<td>
						<?php if (!in_array(3,$pdRecords)): ?>
							<a href="/pd/{{ $pd->id }}/sender_confirm/3">Confirm</a>
						<?php endif ?>
					</td>
				</tr>
				<tr>
					<td>1</td>
					<td>{{ $pd->amount/3}}</td>
					<td>test2</td>
					<td>
						<?php if (!in_array(4,$pdRecords)): ?>
							<a href="/pd/{{ $pd->id }}/sender_confirm/4">Confirm</a>
						<?php endif ?>
					</td>
				</tr>
			</tbody>
		</table>
	</div>
@stop