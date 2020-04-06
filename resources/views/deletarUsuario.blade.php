@extends('layouts.master_layout')
@section('conteudo')
<h1 class="titulo-cadastro text-center">Excluir {{$usuario->nome}}?</h1>
<section class="container-formulario">
    <div class="row-cadastro">
        <form method="POST" action="/admin/usuario/excluir/{{$usuario->id_usuario}}" enctype="multipart/form-data">
            @csrf
            @if(isset($usuario))
            <div class="form-row">
                <div class="form-group col-md-8">
                    <label for="nome">Nome</label>
                    <input readonly type="text" class="form-control" name="nome" id="nome" value="{{$usuario->nome}}" autofocus>
                </div>

                <div class="form-group col-md-4"></div>

                <div class="form-group col-md-8">
                    <label for="cpf">CPF</label>
                    <input readonly type="text" class="form-control" name="cpf" id="cpf" value="{{$usuario->cpf}}"
                        maxlength="14">
                </div>

                <div class="form-group col-md-4"></div>

                <div class="form-group col-md-4">
                    <label for="dtnasc">Data de Nascimento</label>
                    <input readonly type="date" class="form-control" name="dtnasc" id="dtnasc" value='{{ $usuario->dtnasc}}'>
                </div>

                <div class="form-group col-md-4">
                    <label for="sexo">Sexo</label>
                    <select disabled class="custom-select btn-sexo" name="sexo" id="sexo">
                        <option selected disabled></option>
                        <option alue="F" {{$usuario->sexo == 'F' ? 'selected' : '' }}>Feminino</option>
                        <option alue="M" {{$usuario->sexo == 'M' ? 'selected' : '' }}>Masculino</option>
                        <option value="O" {{$usuario->sexo == 'O' ? 'selected' : '' }}>Outros</option>
                    </select>
                </div>

                <div class="form-group col-md-3"></div>

                <div class="form-group col-md-4">
                    <label for="telefoneUm">Telefone para contato</label>
                    <input readonly type="text" class="form-control" name="telefoneUm" id="telefoneUm" maxlength="11"
                        value="{{ $usuario->telefoneUm}}">
                </div>

                <div class="form-group col-md-4">
                    <label for="telefoneDois">Telefone para contato</label>
                    <input readonly type="text" class="form-control" name="telefoneDois" id="telefoneDois"
                        value="{{ $usuario->telefoneDois }}" maxlength="11">
                </div>


                <div class="form-group col-md-8">
                    <label for="email">E-mail</label>
                    <input readonly type="email" class="form-control" name="email" id="email" value="{{ $usuario->email }}">
                </div>

                <div class="form-group col-md-4"></div>

                <div class="form-group col-md-4">
                    <label for="senha">Senha</label>
                    <input readonly type="password" class="form-control" name="senha" id="senha"
                        placeholder="***************">
                </div>

                <div class="form-group col-md-4">
                    <label for="conf-senha">Confirme a Senha</label>
                    <input readonly type="password" class="form-control" name="conf-senha" id="conf-senha"
                        placeholder="***************">
                </div>
                @endif

                <div class="form-group col-md-12 pt-5">
                <label>Imagem</label>
                </div>

                <div class="form-group col-md-4">
                    <img src="{{$usuario->imagem}}" alt="capa de {{$usuario->nome}}" class="img-thumbnail"
                        style="max-height: 480px; max-width: 340px; width: auto; height: auto">
                </div>

            </div>
            <div class="botoes" style="display: flex;">
                <div class="enviar">
                    <button class="btn btn-danger btn-lg btn-enviar mr-5" style="margin-right:10px;">Excluir</button>
                </div>
                <div class="cancelar mr-5">
                    <button type="button" class="btn btn-primary btn-lg btn-cancelar"><a href="/admin/usuarios"
                            style="text-decoration:none;color: #fff;">Cancelar</a></button>
                </div>

            </div>
        </form>
    </div>
</section>
</div>
@endsection
