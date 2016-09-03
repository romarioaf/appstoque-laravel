@extends('layout.principal')

@section('conteudo')
<form action="/produto/adiciona" method="POST">

	<input type="hidden" name="_token" value="{{csrf_token()}}">

	<div class="form-group">
		<label class="form-contro">Nome</label>
		<input type="text" name="nome" class="form-control">
	</div>
	<div class="form-group">
		<label>Valor</label>
		<input type="text" name="valor" class="form-control">
	</div>
	<div class="form-group">
		<label>Quantidade</label>
		<input type="text" name="quantidade" class="form-control">
	</div>
	<div class="form-group">
		<label>Descricao</label>
		<input type="textarea" name="descricao" class="form-control">
	</div>

	<button class="btn btn-primary" type="submit">Gravar</button>
</form>
@stop