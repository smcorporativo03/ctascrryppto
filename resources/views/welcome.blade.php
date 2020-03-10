@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row justify-content-center">
    @if (Route::has('login'))
        @auth
          {{ __('You are logged in!') }}
        @else
          Inicia Sesión para poder ver contenido.
        @endauth
    @endif
	</div>
</div>
@endsection
