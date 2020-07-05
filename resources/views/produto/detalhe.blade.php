@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <ol class="breadcrumb panel-heading">
                    <li><a href="{{ route('produto.index') }}">Produtos</a></li>
                    <li class="active">Detalhe</li>
                </ol>
                <div class="panel-body">
                    <p><b>Categoria: </b>{{ $produto->categoria }}</p>
                    <p><b>Nome: </b>{{ $produto->nome }}</p>
                    <p><b>Descrição: </b>{{ $produto->descricao }}</p>
                    <p><b>Valor: </b>{{ $produto->valor }}</p>
                    <p><b>Foto: </b>{{ $produto->foto }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection