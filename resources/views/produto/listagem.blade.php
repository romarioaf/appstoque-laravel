@extends('layout.principal')

@section('conteudo')
<h1>Listagem de produtos</h1>
<table class="table table-striped table-bordered table-hover">
  @foreach($produtos as $p)
  <tr class="{{$p->quantidade <=1 ? 'danger' : ''}}">
    <td>{{$p->nome}}</td>
    <td>{{$p->valor}}</td>
    <td>{{$p->descricao}}</td>
    <td>{{$p->quantidade}}</td>
    <td>{{$p->tamanho}}</td>
    <td>
    	<a href="/produto/mostra/{{$p->id}}"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></a>
    </td>
    <td>
      <a href="/produto/remove/{{$p->id}}"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
    </td>
  </tr>
  @endforeach
</table>

@if(old('nome'))
  <div class="alert alert-success">
    Produto {{old('nome')}} cadastrado com sucesso.
  </div>
@endif

@stop