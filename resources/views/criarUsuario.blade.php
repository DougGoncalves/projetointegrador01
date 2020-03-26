@extends('layouts.master_layout')
@section('conteudo')
<h1 class="titulo-cadastro text-center">Novo Usuário</h1>
    <section class="container-formulario">
        <div class="row-cadastro">
            <form method="POST" action="/admin/usuario/insert" enctype="multipart/form-data">
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
                            placeholder="email@email.com" required>
                    </div>

                    <div class="form-group col-md-4"></div>

                    <div class="form-group col-md-4">
                        <label for="senha">Senha</label>
                        <input type="password" class="form-control" name="senha" id="senha"
                            placeholder="***************">
                    </div>

                    <div class="form-group col-md-4">
                        <label for="conf-senha">Confirme a Senha</label>
                        <input type="password" class="form-control" name="conf-senha" id="conf-senha"
                            placeholder="***************">
                    </div>

                </div>
                <div class="botoes" style="display: flex;">
                <div class="enviar">
                <button class="btn btn-primary btn-lg btn-enviar" style="margin-right: 10px;">Enviar</button>
            </div>
            <div class="cancelar">
                <button type="button" class="btn btn-primary btn-lg btn-cancelar"><a href="/admin/usuarios" style="text-decoration:none; color:#fff">Cancelar</a></button>
            </div>
        </div>
            </form>
        </div>
    </section>
</div>
@endsection
