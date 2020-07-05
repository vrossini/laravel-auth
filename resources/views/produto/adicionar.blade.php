@extends('layouts.app')
@section('content')
<div class="container">
    <form action="{{ route('produto.salvar') }}"  method="POST" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="form-group {{ $errors->has('categoria') ? 'has-error' : '' }}">
                            <label for="categoria">Categoria</label>
                            <input type="text" name="categoria" class="form-control" placeholder="Categoria do produto">
                            @if($errors->has('categoria'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('categoria') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group {{ $errors->has('nome') ? 'has-error' : '' }}">
                            <label for="nome">Nome</label>
                            <input type="text" name="nome" class="form-control" placeholder="Nome do produto">
                            @if($errors->has('nome'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('nome') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group {{ $errors->has('descricao') ? 'has-error' : '' }}">
                            <label for="descricao">Descrição</label>
                            <input type="text" name="descricao" class="form-control" placeholder="Descrição do produto">
                            @if($errors->has('descricao'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('descricao') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group {{ $errors->has('valor') ? 'has-error' : '' }}">
                            <label for="valor">Valor</label>
                            <input type="text" name="valor" class="form-control" placeholder="Valor do produto">
                            @if($errors->has('valor'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('valor') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group {{ $errors->has('foto') ? 'has-error' : '' }}">
                            <label for="foto">Foto do produto</label>
                            <div>
                                <input id="foto" type="file" class="form-control" name="foto">
                                @if($errors->has('foto'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('foto') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <br>
    <button type="submit" name="submit" class="btn btn-primary"> Save Data </button>
    </form>
</div>
@endsection