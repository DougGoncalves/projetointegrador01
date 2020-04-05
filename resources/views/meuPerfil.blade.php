@extends('layouts.admin_layout')
@section('content')
<h1 class="titulo-cadastro text-center">Meu Perfil</h1>
    <section class="container-formulario">
        <div class="row-cadastro">
<<<<<<< HEAD
            @if(isset($meuperfil))
            @foreach($meuperfil as $usuario)
            <form method="POST" action="/admin/usuario/{{$usuario->id_usuario}}" enctype="multipart/form-data">
            @csrf

                <div class="form-row">
                    <div class="form-group col-md-8">
                        <label for="nome">Nome</label>
                        <input type="text" class="form-control" name="nome" id="nome" value="{{$usuario->nome}}" onkeyup="validaNome()"
                            required autofocus>
                        <ul class="valida-entrada">
                            <li class="namecheck">Insira seu nome completo</li>
                        </ul>
                    </div>

                    <div class="form-group col-md-4"></div>
=======
            <form method="POST" action="/admin/usuario/{{$usuario->id_usuario}}" onsubmit="return checkForm()" enctype="multipart/form-data">
            @csrf
            @if(isset($usuario))
            <div class="form-row">
                <div class="form-group col-md-8">
                    <label for="nome">Nome</label>
                    <input type="text" class="form-control" name="nome" id="nome" value="{{$usuario->nome}}"
                        onfocus="validaNome()" required>
                    <ul class="valida-entrada">
                        <li class="namecheck valido">Insira seu nome completo</li>
                    </ul>
                </div>
>>>>>>> cd56e2d4bda5d43c23076b514cd704f0e88143ba

                <div class="form-group col-md-4"></div>

                <div class="form-group col-md-8">
                    <label for="cpf">CPF</label>
                    <input type="text" class="form-control" name="cpf" id="cpf" value="{{$usuario->cpf}}"
                        onfocus="validaCpf()" maxlength="14" required>
                    <ul class="valida-entrada">
                        <li class="cpfcheck valido">Insira um CPF Válido</li>
                    </ul>
                </div>

                <div class="form-group col-md-4"></div>

                <div class="form-group col-md-4">
                    <label for="dtnasc">Data de Nascimento</label>
                    <input type="date" min="1900-01-01" max="2099-01-01" class="form-control" name="dtnasc" id="dtnasc"
                        required value='{{ $usuario->dtnasc}}'>
                </div>

                <div class="form-group col-md-4">
                    <label for="sexo">Sexo:</label>
                    <select class="custom-select btn-sexo" name="sexo" id="sexo">
                        <option selected>Selecione</option>
                        <option value="F" {{$usuario->sexo == 'F' ? 'selected' : '' }}>Feminino</option>
                        <option value="M" {{$usuario->sexo == 'M' ? 'selected' : '' }}>Masculino</option>
                        <option value="O" {{$usuario->sexo == 'O' ? 'selected' : '' }}>Outros</option>
                    </select>
                </div>

                <div class="form-group col-md-3"></div>

                <div class="form-group col-md-4">
                    <label for="telefoneUm">Telefone para contato</label>
                    <input type="text" class="form-control" name="telefoneUm" id="telefoneUm"
                        value="{{ $usuario->telefoneUm}}" maxlength="11" required onfocus="validaFoneUm()">
                    <ul class="valida-entrada">
                        <li class="telefonecheck valido">Somente Números</li>
                    </ul>
                </div>

                <div class="form-group col-md-4">
                    <label for="telefoneDois">Telefone para contato</label>
                    <input type="text" class="form-control fone" name="telefoneDois" id="telefoneDois"
                        value="{{ $usuario->telefoneDois }}" maxlength="11" onfocus="validaFoneDois()">
                    <ul class="valida-entrada">
                        <li class="telefonecheckdois valido">Somente Números</li>
                    </ul>
                </div>


                <div class="form-group col-md-8">
                    <label for="email">E-mail</label>
                    <input type="email" class="form-control" name="email" id="email" value="{{ $usuario->email }}"
                        required onfocus="validaEmail()" readonly>
                    <ul class="valida-entrada">
                        <li class="mailcheck valido">Insira um e-mail válido</li>
                    </ul>
                </div>

                <div class="form-group col-md-4"></div>

                <div class="form-group col-md-4">
                    <label for="senha">Senha</label>
                    <input type="password" class="form-control" name="senha" id="senha"
                        placeholder="**********" onfocus="validaSenha(), confirmaSenha()">
                    <ul class="valida-entrada cadastrointerno">
                        <li class="passchksize valido" style="font-size: 0.80em">Conter ao menos 8 caracteres</li>
                        <li class="passchknumero valido" style="font-size: 0.80em">Conter ao menos 1 numero</li>
                        <li class="passchklmin valido" style="font-size: 0.80em">Conter ao menos 1 letra minuscula</li>
                        <li class="passchklmai valido" style="font-size: 0.80em">Conter ao menos 1 letra maiuscula</li>
                        <li class="passespecial valido" style="font-size: 0.80em">Conter um caracter especial (ex. @ ! #)</li>
                    </ul>
                </div>

                <div class="form-group col-md-4">
                    <label for="conf-senha">Confirme a Senha</label>
                    <input type="password" class="form-control" name="confirmasenha" id="password-confirm"
                        placeholder="**********" onfocus="validaSenha(), confirmaSenha()">
                    <ul class="valida-entrada cadastrointerno">
                        <li class="passconfirm valido" style="font-size: 0.80em">As senhas não conferem</li>
                    </ul>
                </div>
                <!-- @if(isset($confirmasenha))
                    <div class="alert alert-danger form-control" role="alert">
                        As senhas não coincidem!
                    </div>
                @endif -->
                @endif

                <hr id="line">
            </div>
            <div class="form-group pt-5">
                <label for="imagem"> Imagem </label><br>
                <input type="file" name="imagem" id="imagem">
            </div>
            <div class="form-group col-md-4">
                <img src="{{$usuario->imagem}}" alt="capa de {{$usuario->nome}}" class="img-thumbnail"
                    style="max-height: 480px; max-width: 340px; width: auto; height: auto">
            </div>
            <div class="botoes" style="display: flex;">
                <div class="enviar">
                    <button class="btn btn-primary btn-lg btn-enviar" style="margin-right: 10px;">Enviar</button>
                </div>
                <div class="cancelar">
                    <button type="button" class="btn btn-secondary btn-lg btn-cancelar" formnovalidate><a
                            href="/admin/usuarios" style="text-decoration: none; color:white">Cancelar</a></button>
                </div>

            </div>
        </form>
    </div>
</section>
</div>
<script src="{{ asset('scripts/cadastro.js') }}"></script>
@endsection
