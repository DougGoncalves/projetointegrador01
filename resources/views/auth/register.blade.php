@extends('layouts.master_layout')
@section('conteudo')

<body class="cadastro">

<section>
    <h1 class="titulo-cadastro">Cadastre-se</h1>

    <div class="container-formulario">

        <form id="myForm" method="POST" action="/register/insert" enctype="multipart/form-data">
        @csrf
            <div class="row">
                <div class="col- col-sm-10 col-md-10 col-lg-8 col-xl-8">
                    <fieldset id="cad-simples">
                        <div class="form-group">
                            <label for="email" {{ __('E-Mail Address') }}>E-mail</label>
                            @if(isset($usuario))
                            <input type="email" class="form-control" id="email" placeholder="email@email.com"
                            @error('email') is-invalid @enderror" name="email" value="abc" required autocomplete="email" onkeyup="validaEmail()">
                            @else
                            <input type="email" class="form-control" id="email" placeholder="email@email.com"
                            @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" onkeyup="validaEmail()">
                            @endif
                            <ul class="valida-entrada">
                                <li class="mailcheck">Insira um e-mail válido</li>
                            </ul>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                        </div>
                        <div class="form-group">
                            <label for="senha" {{ __('Password') }}>Senha</label>
                            <input type="password" class="form-control" id="senha" placeholder="***************"@error('password') is-invalid @enderror" name="senha" required autocomplete="new-password" onkeyup="validaSenha()">
                            @if(isset($usuario))
                            <div class="alert alert-danger" role="alert">
                                As senhas não coincidem!
                            </div>
                            @endif
                            <ul class="valida-entrada">
                                <li class="passchksize">Conter ao menos 8 caracteres</li>
                                <li class="passchknumero">Conter ao menos 1 numero</li>
                                <li class="passchklmin">Conter ao menos 1 letra minuscula</li>
                                <li class="passchklmai">Conter ao menos 1 letra maiuscula</li>
					            <li class="passespecial">Conter um caracter especial (ex. @ ! #)</li>
				            </ul>
                        </div>
                        <div class="form-group">
                            <label for="password-confirm" {{ __('Confirm Password') }}>Confirme sua senha</label>
                            <input id="password-confirm" type="password" class="form-control" name="confirmasenha" required autocomplete="new-password" placeholder="***************" onkeyup="confirmaSenha()">
                            <ul class="valida-entrada">
                                <li class="passconfirm">As senhas não conferem</li>
				            </ul>
                        </div>
                    </fieldset>
                </div>
            </div>

            <hr id="linha">

            <h3 class="text-center">Interesses</h3>

            <div class="row">
                <div class="col-2 col-sm-12 col-sm-12 col-lg-12 col-xl-12 alinhamento">

                    <fieldset class="form-group">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="aventura" id="aventura">
                            <label class="form-check-label" for="aventura">Aventura</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="cidades" id="cidades">
                            <label class="form-check-label" for="cidades">Cidades</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="gastronomia" id="gastronomia">
                            <label class="form-check-label" for="gastronomia">Gastronomia</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="historico" id="cultural">
                            <label class="form-check-label" for="cultural">Histórico Cultural</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="natureza" id="natureza"
                                value="natureza">
                            <label class="form-check-label" for="natureza">Natureza</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="noturna" id="noturno"
                                value="noturno">
                            <label class="form-check-label" for="noturno">Vida Noturna</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="todos" name="todos">
                            <label class="form-check-label" for="todos">Todos</label>
                        </div>
                    </fieldset>
                </div>
            </div>

            <div class="row">
                <button class="btn btn-primary btn-prosseguir">Prosseguir</button>
            </div>
        </form>
    </div>
</section>
</body>
<script src="scripts/cadastro.js"></script>
@endsection