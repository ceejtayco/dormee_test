@extends('layouts.app')

@section('content')

<div class="row justify-content-center card " style="width:85%; margin:0 auto;">
	<div class="col-md-12">
		<div class="jumbotron-grey row">
			@if (Auth::user()->isLandlord())
			<div class="col-md-4 py-5 p-5">
				@else
				<div class="col-md-12 py-2">
					@endif
					<h2>
						Your Account
					</h2>
				

			</div>
				@if (Auth::user()->isLandlord())
					<div class="col-md-8 flex-box-around py-5 p-5">
					<a href="dorms/show" class="btn btn-primary" style="width:50%;">My Dorms</a>
					<a href="dorms/add" class="btn btn-primary mx-3" style="width:50%;">Add a Dorm</a>
					@endif
						@if (Auth::user()->isLandlord())
					</div>
					@endif
				</div>
			</div>
			<div class="row py-5 p-5">
				<div class="col-md-6">
					<div class="jumbotron">
						<h2>
							Hey, {{Auth::user()->username}}!
						</h2>
						<p class="text-dark">
							This is your account dashboard. You can update your account details and check your private messages.
						</p>
					</div>
				</div>
				<div class="col-md-6 py-5 p-5">
					<h3 class="mb-4">
						Edit account details
					</h3>
					<hr>
					@include('forms.register')
				</div>
			</div>
		</div>
	</div>
	
	@endsection