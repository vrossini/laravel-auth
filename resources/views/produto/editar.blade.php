@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">                
                <ol class="breadcrumb panel-heading">
                    <li><a href="{{ route('produto.index') }}">Produtos</a></li>
                    <li class="active">Editar</li>
                </ol>
                <div class="panel-body">                                    
                    <form action="{{ route('produto.atualizar',$produto->id) }}" method="post">
                        {{ csrf_field() }}
                        <input type="hidden" name="_method" value="put">
                        <div class="form-group {{ $errors->has('categoria') ? 'has-error' : '' }}">
                            <label for="categoria">Categoria</label>
                            <input type="text" name="categoria" class="form-control" placeholder="Categoria do produto" value="{{$produto->categoria}}">
                            @if($errors->has('categoria'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('categoria') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group {{ $errors->has('nome') ? 'has-error' : '' }}">
                            <label for="nome">Nome</label>
                            <input type="text" name="nome" class="form-control" placeholder="Nome do produto" value="{{$produto->nome}}">
                            @if($errors->has('nome'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('nome') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group {{ $errors->has('descricao') ? 'has-error' : '' }}">
                            <label for="descricao">Descrição</label>
                            <input type="text" name="descricao" class="form-control" placeholder="Descrição do produto" value="{{$produto->descricao}}">
                            @if($errors->has('descricao'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('descricao') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group {{ $errors->has('valor') ? 'has-error' : '' }}">
                            <label for="valor">Valor</label>
                            <input type="text" name="valor" class="form-control" placeholder="Valor do produto" value="{{$produto->valor}}">
                            @if($errors->has('valor'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('valor') }}</strong>
                                </span>
                            @endif
                        </div>
                        <!-- <div class="form-group {{ $errors->has('foto') ? 'has-error' : '' }}">
                            <label for="foto">Foto</label>
                            <input type="text" name="foto" class="form-control" placeholder="Foto do produto" value="{{$produto->foto}}">
                            @if($errors->has('foto'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('foto') }}</strong>
                                </span>
                            @endif
                        </div> -->
                        <div class="form-group {{ $errors->has('foto') ? 'has-error' : '' }}">
                            <label for="foto">Foto do produto</label>
                            <div>
                                <input id="foto" type="file" class="form-control" name="foto">
                                @if (auth()->user()->image)
                                    <code>{{ auth()->user()->image }}</code>
                                @endif
                            </div>
                        </div>
                        <br>
                        <button class="btn btn-info">Atualizar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection