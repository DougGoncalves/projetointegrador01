@extends('layouts.master_layout')
@section('conteudo')
<div class="fundo">
    <h1 class="titulo-cadastro text-center">Cadastre-se</h1>
    <section class="container-formulario">
        <div class="row-cadastro">
            @if(@isset($usuario))
            <form method="POST" action="/cadastrointerno/{{ $usuario->id_usuario }}" onsubmit="return checkForm()" enctype="multipart/form-data">
                @csrf
                <div class="form-row">
                    <div class="form-group col-md-8">
                        <label for="nome">Nome</label>
                        <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome Completo"
                            onfocus="validaNome()" required>
                        <ul class="valida-entrada">
                            <li class="namecheck">Insira seu nome completo</li>
                        </ul>
                    </div>

                    <div class="form-group col-md-4"></div>

                    <div class="form-group col-md-8">
                        <label for="cpf">CPF</label>
                        <input type="text" class="form-control" name="cpf" id="cpf" placeholder="xxx.xxx.xxx-xx"
                            maxlength="14" required onfocus="validaCpf()" >
                        <ul class="valida-entrada">
                            <li class="cpfcheck">Insira um CPF Válido</li>
                        </ul>
                    </div>

                    <div class="form-group col-md-4"></div>

                    <div class="form-group col-md-4">
                        <label for="dtnasc">Data de Nascimento</label>
                        <input type="date" min="1900-01-01" max="2099-01-01" class="form-control" name="dtnasc"
                            id="dtnasc" required>
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
                        <input type="text" class="form-control fone" name="telefoneUm" id="telefoneUm"
                            placeholder="(99)99999-9999" maxlength="11" required onfocus="validaFoneUm()" >
                        <ul class="valida-entrada">
                            <li class="telefonecheck">Somente Números</li>
                        </ul>
                    </div>

                    <div class="form-group col-md-4">
                        <label for="telefoneDois">Telefone para contato</label>
                        <input type="text" class="form-control fone" name="telefoneDois" id="telefoneDois"
                            placeholder="(99)99999-9999" maxlength="11" onfocus="validaFoneDois()" >
                        <ul class="valida-entrada">
                            <li class="telefonecheckdois">Somente Números</li>
                        </ul>
                    </div>


                    <div class="form-group col-md-8">
                        <label for="email">E-mail</label>
                        <input type="email" class="form-control" name="email" id="email" value="{{$usuario->email}}"
                            onfocus="validaEmail()"  required>
                        <ul class="valida-entrada">
                            <li class="mailcheck valido">Insira um e-mail válido</li>
                        </ul>
                    </div>

                    <div class="form-group col-md-4"></div>

                    <div class="form-group col-md-4">
                        <label for="senha">Senha</label>

                        <input type="password" class="form-control" name="senha" id="senha"
                            placeholder="**********" onfocus="validaSenha()"  required autocomplete="new-password">
                        <ul class="valida-entrada cadastrointerno">
                            <li class="passchksize" style="font-size: 0.80em">Conter ao menos 8 caracteres</li>
                            <li class="passchknumero" style="font-size: 0.80em">Conter ao menos 1 numero</li>
                            <li class="passchklmin" style="font-size: 0.80em">Conter ao menos 1 letra minuscula</li>
                            <li class="passchklmai" style="font-size: 0.80em">Conter ao menos 1 letra maiuscula</li>
                            <li class="passespecial" style="font-size: 0.80em">Conter um caracter especial (ex. @ ! #)
                            </li>
                        </ul>
                    </div>

                    <div class="form-group col-md-4">
                        <label for="conf-senha">Confirme a Senha</label>
                        <input type="password" class="form-control" name="confirmasenha" id="password-confirm"
                            placeholder="**********" onfocus="confirmaSenha()"  required autocomplete="new-password">
                        <ul class="valida-entrada cadastrointerno">
                            <li class="passconfirm" style="font-size: 0.80em">As senhas não conferem</li>
                        </ul>
                    </div>
                    @if(isset($confirmasenha))
                    <div class="alert alert-danger form-control" role="alert">
                        As senhas não coincidem!
                    </div>
                    @endif

                    <hr id="line">
                    @endif
                    <div class="form-group pt-5">
                        <label for="imagem" style="display:block"> Imagem </label>
                        <input name="imagem" type="file">
                    </div>
                </div>
                <div class="botoes" style="display: flex;">
                    <div class="enviar">
                        <button class="btn btn-primary btn-lg btn-enviar btn-novalidate">Enviar</button>
                    </div>
                    <div class="cancelar">
                        <button class="btn btn-secondary btn-lg btn-cancelar" formnovalidate><a href="/"
                                style="text-decoration: none; color: white">Cancelar</a></button>
                    </div>
                </div>
            </form>
        </div>
    </section>
</div>
<script src="{{ asset('scripts/cadastro.js') }}"></script>
@endsection
