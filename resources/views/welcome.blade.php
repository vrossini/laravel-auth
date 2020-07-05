@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Produtos</div>
                <div class="panel-body">
                <table class="table table-bordered table-hover" id="customFields">
                    <thead>
                        <tr></tr>
                        <tr>
                            <th>Cod.</th>
                            <th>Categoria</th>
                            <th>Nome</th>
                            <th>Descrição</th>
                            <th>Valor</th>
                            <!-- <th>Foto</th> -->
                            <th>Quantidade</th>
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
                            <!-- <td>{{ $produto->foto }}</td> -->
                            <!-- <td><input type="number" name="number" min="0" value="0" onchange="somarValores({{ $produto->valor }}, this.value)"/></td> -->
                            <td class="valor-calculado"> <input id="qtd" type="number" name="number" min="0" value="0"/> </td>
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
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Pedido</div>
                <div class="panel-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Quantidade</th>
                            <th>Valor total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td> <input type="number" id="qtdtotal" value="0" disabled/> </td>
                            <td>R$ <input type="numeric" id="total" value="0.0" disabled/> </td>
                        </tr>                            
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Forma de entrega</div>
                <div class="panel-body">
                <div class="col-sm-12 text-center">
                <div class="btn-group" role="group">
                    <button type="button" class="btn btn-primary btn-md" onclick="hideDiv()">Retirar no local</button>
                    <button type="button" class="btn btn-danger btn-md" onclick="showDiv()">Entregar</button>
                </div>
                <div id="entrega" style="display: none;">
                    <div class="panel-body">
                        <div>
                            <label for="nome">Nome</label>
                            <input type="text" name="nome" placeholder="Nome do destinatário">
                        </div>
                        <div>
                            <label for="telefone">Telefone</label>
                            <input type="number" name="telefone" placeholder="Telefone de contato">
                        </div>
                        <div>
                            <label for="cep">CEP</label>
                            <input type="number" name="cep" placeholder="CEP">
                        </div>
                        <div>
                            <label for="endereco">Endereço</label>
                            <input type="text" name="endereco" placeholder="Endereço">
                        </div>
                        <div>
                            <label for="numero">Número</label>
                            <input type="number" name="numero" placeholder="Número">
                        </div>
                        <div>
                            <label for="complemento">Complemento</label>
                            <input type="text" name="complemento" placeholder="Complemento">
                        </div>
                        <div>
                            <label for="bairro">Bairro</label>
                            <input type="text" name="bairro" placeholder="Bairro">
                        </div>
                        <div>
                            <label for="cidade">Cidade</label>
                            <input type="text" name="cidade" placeholder="Cidade">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Forma de pagamento</div>
                <div class="panel-body">
                <div class="col-sm-12 text-center">
                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                    <label class="btn btn-primary active">
                        <input type="radio" name="options" id="option1" autocomplete="off" checked> Dinheiro
                    </label>
                    <label class="btn btn-secondary">
                        <input type="radio" name="options" id="option2" autocomplete="off"> Cartão
                    </label>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Adicionais</div>
                <div class="panel-body">
                <div class="form-group">
                    <div class="col-md-12">
                        <textarea class="form-control" rows="3" placeholder="Observações"></textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12 text-center">
        <button type="button" class="btn btn-danger btn-md" onclick="sendWhatsApp()">Enviar WhatsApp</button>
        <br><br>
    </div>
</div>
@endsection