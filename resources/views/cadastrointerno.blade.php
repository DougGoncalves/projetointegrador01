@extends('layouts.master_layout')
@section('conteudo')
<div class="fundo">
    <h1 class="titulo-cadastro text-center">Cadastre-se</h1>
    <section class="container-formulario">
        <div class="row-cadastro">
            @if(@isset($usuario))
            <form method="POST" action="/cadastrointerno/{{$usuario->id_usuario}}" enctype="multipart/form-data">
            @csrf
                <div class="form-row">
                    <div class="form-group col-md-8">
                        <label for="nome">Nome</label>
                        <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome Completo"
                            required autofocus>
                    </div>

                    <div class="form-group col-md-4"></div>

                    <div class="form-group col-md-8">
                        <label for="cpf">CPF</label>
                        <input type="text" class="form-control" name="cpf" id="cpf" placeholder="xxx.xxx.xxx-xx"
                            maxlength="14" required>
                    </div>

                    <div class="form-group col-md-4"></div>

                    <div class="form-group col-md-4">
                        <label for="dtnasc">Data de Nascimento</label>
                        <input type="date" class="form-control" name="dtnasc" id="dtnasc" required>
                    </div>

                    <div class="form-group col-md-4">
                        <label for="sexo">Sexo:</label>
                        <select class="custom-select btn-sexo" name="sexo" id="sexo">
                            <option selected>Selecione</option>
                            <option value="F">Feminino</option>
                            <option value="M">Masculino</option>
                            <option value="O">Outros</option>
                        </select>
                    </div>

                    <div class="form-group col-md-3"></div>

                    <div class="form-group col-md-4">
                        <label for="telefoneUm">Telefone para contato</label>
                        <input type="text" class="form-control" name="telefoneUm" id="telefoneUm"
                            placeholder="(99)99999-9999" maxlength="11" required>
                    </div>

                    <div class="form-group col-md-4">
                        <label for="telefoneDois">Telefone para contato</label>
                        <input type="text" class="form-control" name="telefoneDois" id="telefoneDois"
                            placeholder="(99)99999-9999" maxlength="11">
                    </div>

                    
                    <div class="form-group col-md-8">
                        <label for="email">E-mail</label>
                        <input type="email" class="form-control" name="email" id="email"
                            value="{{$usuario->email}}" required>
                    </div>

                    <div class="form-group col-md-4"></div>

                    <div class="form-group col-md-4">
                        <label for="senha">Senha</label>
                        <input type="password" class="form-control" name="senha" id="senha"
                            placeholder="***************" value="{{$usuario->senha}}">
                    </div>

                    <div class="form-group col-md-4">
                        <label for="conf-senha">Confirme a Senha</label>
                        <input type="password" class="form-control" name="conf-senha" id="conf-senha"
                            placeholder="***************" value="{{$usuario->senha}}">
                    </div>

                    <hr id="line">

                    <div class="titulo-cartao my-3 col-12">
                        <h3>Dados do Cartão</h3>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="titularcard">Titular</label>
                        <input type="text" class="form-control" name="titularcard" id="titularcard"
                            placeholder="Nome impresso no cartão">
                    </div>

                    <div class="form-group col-md-6"></div>

                    <div class="form-group col-md-4">
                        <label for="cartao">Número do cartão</label>
                        <input type="text" class="form-control" name="cartao" id="cartao"
                            placeholder="5555-5555-5555-5555" maxlength="19">
                    </div>

                    <div class="form-group col-md-3">
                        <label for="validade">Validade</label>
                        <input type="validade" class="form-control" name="validade" id="validade"
                            placeholder="MM/AA" maxlength="5">
                    </div>

                    <div class="form-group col-md-3">
                        <label for="cvv">Código (CVV)</label>
                        <input type="cvv" class="form-control" name="cvv" id="cvv" placeholder="123" maxlength="3">
                    </div>
            @endif
                </div>
                <div class="botoes" style="display: flex;">
                <div class="enviar">
                <button class="btn btn-primary btn-lg btn-enviar">Enviar</button>
            </div>
            <div class="cancelar">
                <button type="button" class="btn btn-primary btn-lg btn-cancelar"><a href="/">Cancelar</a></button>
            </div>
        </div>
            </form>
        </div>
    </section>
</div>
@endsection
