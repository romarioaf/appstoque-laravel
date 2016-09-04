@extends('layout.principal')

@section('conteudo')

@if ($errors->all())
	<div class="alert alert-danger">
		<ul>
			@foreach($errors->all() as $error)
				<li>{{$error}}</li>
			@endforeach
		</ul>
	</div>
@endif


<form action="/login/auth" method="POST">

	<input type="hidden" name="_token" value="{{csrf_token()}}">

	<div class="form-group">
		<label class="form-contro">Email</label>
		<input type="text" name="email" class="form-control">
	</div>
	<div class="form-group">
		<label>Senha</label>
		<input type="password" name="password" class="form-control">
	</div>

	<button class="btn btn-primary" type="submit">Login</button>
</form>
@stop