@extends('layouts.app')

@section('content')
	<section>
		<div class="container">
			<div class="panel panel-primary">
				<div class="panel-heading">Provide donation</div>
				<div class="panel-body">
					<form action="/pd" method="POST" role="form" class="form-horizontal">
						{{ csrf_field() }}
						<div class="form-group">
							<label for="" class="col-md-2">Receivable Amount: *</label>
							<div class="col-md-5">
								<input type="text" class="form-control" id="" placeholder="Amount" name="receivable_amount">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-md-2">From Wallet: *</label>
							<div class="col-md-3">
								<div class="radio">
									<label>
										<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
										C-Wallet
									</label>
								</div>
								<div class="radio">
								<label>
									<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
										R-Wallet
								</label>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-md-2">Security password</label>
							<div class="col-md-5">
								<input type="text" class="form-control" id="" placeholder="Security password" name="password">
							</div>
						</div>
						<div class="pull-right">
							<button type="submit" class="btn btn-primary">Proceed</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
@stop