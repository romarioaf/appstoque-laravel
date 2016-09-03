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
    <td>
    	<a href="/produto/mostra/{{$p->id}}"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></a>
    </td>
  </tr>
  @endforeach
</table>
@stop