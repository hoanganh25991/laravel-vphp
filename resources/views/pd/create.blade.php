@extends('layouts.app')

@section('content')
	<div class="container">
		<form action="/pd" method="POST" role="form">
			<legend>Form title</legend>
			{{ csrf_field() }}
			<div class="form-group">
				<label for="">Amount</label>
				<input type="text" class="form-control" id="" placeholder="Amount" name="amount">
			</div>
			<button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
@stop