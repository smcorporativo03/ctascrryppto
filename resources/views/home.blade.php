@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">Dashboard</div>

				<div class="card-body">
					@if (session('status'))
						<div class="alert alert-success" role="alert">
							{{ session('status') }}
						</div>
					@endif
          {{ __('You are logged in!') }}
				</div>
			</div>
		</div>
    <div class="col-md-12">
      <MaterialTableGestDB />
      <div id="tb_bancos"></div>
      <div id="tb_lineas"></div>
    </div>
	</div>
</div>
@endsection
