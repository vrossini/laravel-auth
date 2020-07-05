@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <ol class="breadcrumb panel-heading">                    
                    <li class="active">Produtos</li>
                </ol>
                <div class="panel-body">
                    <p>
                        <a class="btn btn-info" href="{{ route('produto.adicionar') }}">Adicionar</a>
                    </p>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Cod.</th>
                                <th>Categoria</th>
                                <th>Nome</th>
                                <th>Descrição</th>
                                <th>Valor</th>
                                <th>Foto</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($produtos as $produto)
                            <tr>
                                <th scope="row">{{ $produto->id }}</th>
                                <td>{{ $produto->categoria }}</td>
                                <td>{{ $produto->nome }}</td>
                                <td>{{ $produto->descricao }}</td>
                                <td>{{ $produto->valor }}</td>
                                <td>{{ $produto->foto }}</td>
                                <td>
                                    <a class="btn btn-default" href="{{route('produto.detalhe',$produto->id)}}">Detalhe</a>
                                    <a class="btn btn-default" href="{{route('produto.editar',$produto->id)}}">Editar</a>
                                    <a class="btn btn-danger" href="javascript:(confirm('Deletar esse registro?') ? window.location.href='{{route('produto.deletar',$produto->id)}}' : false)">Deletar</a>
                                </td>
                            </tr>                            
                            @endforeach
                        </tbody>
                    </table>
                    <div align="center">
                        {!! $produtos->links() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection