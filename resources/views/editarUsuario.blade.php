@extends('layouts.master_layout')
@section('conteudo')
<h1 class="titulo-cadastro text-center">Editar Usuário</h1>
    <section class="container-formulario">
        <div class="row-cadastro">
            <form method="POST" action="/admin/usuario/{{$usuario->id_usuario}}" enctype="multipart/form-data">
            @csrf
            @if(isset($usuario))
                <div class="form-row">
                    <div class="form-group col-md-8">
                        <label for="nome">Nome</label>
                        <input type="text" class="form-control" name="nome" id="nome" value="{{$usuario->nome}}"
                            required autofocus>
                    </div>

                    <div class="form-group col-md-4"></div>

                    <div class="form-group col-md-8">
                        <label for="cpf">CPF</label>
                        <input type="text" class="form-control" name="cpf" id="cpf" value="{{$usuario->cpf}}"
                            maxlength="14" required>
                    </div>

                    <div class="form-group col-md-4"></div>

                    <div class="form-group col-md-4">
                        <label for="dtnasc">Data de Nascimento</label>
                        <input type="date" class="form-control" name="dtnasc" id="dtnasc" required value='{{ $usuario->dtnasc}}'>
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
                        value="{{ $usuario->telefoneUm}}" maxlength="11" required>
                    </div>

                    <div class="form-group col-md-4">
                        <label for="telefoneDois">Telefone para contato</label>
                        <input type="text" class="form-control" name="telefoneDois" id="telefoneDois"
                        value="{{ $usuario->telefoneDois }}" maxlength="11">
                    </div>


                    <div class="form-group col-md-8">
                        <label for="email">E-mail</label>
                        <input type="email" class="form-control" name="email" id="email"
                        value="{{ $usuario->email }}" required>
                    </div>

                    <div class="form-group col-md-4"></div>

                    <div class="form-group col-md-4">
                        <label for="senha">Senha</label>
                        <input type="password" class="form-control" name="senha" id="senha"
                        value="{{ $usuario->senha}}" placeholder="***************">
                    </div>

                    <div class="form-group col-md-4">
                        <label for="conf-senha">Confirme a Senha</label>
                        <input type="password" class="form-control" name="conf-senha" id="conf-senha"
                            placeholder="***************">
                    </div>
                    @endif

                    <hr id="line">
                </div>
                <div class="form-group pt-5">
            <label for="imagem"> Imagem </label><br>
            <input type="file" name="imagem" id="imagem">
        </div>
        <div class="form-group col-md-4">
            <img src="{{$usuario->imagem}}" alt="capa de {{$usuario->nome}}" class="img-thumbnail" style="max-height: 480px; max-width: 340px; width: auto; height: auto">
        </div>
                <div class="botoes" style="display: flex;">
                <div class="enviar">
                <button class="btn btn-primary btn-lg btn-enviar" style="margin-right: 10px;">Enviar</button>
            </div>
            <div class="cancelar">
                <button type="button" class="btn btn-primary btn-lg btn-cancelar" formnovalidate><a href="/admin/usuarios" style="text-decoration: none; color:white">Cancelar</a></button>
            </div>

        </div>
            </form>
        </div>
    </section>
</div>
@endsection
