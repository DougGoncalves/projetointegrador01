@extends('layouts.admin_layout')
@section('content')

<div class="container-formulario" style="margin-top: 40px;">
        <div class="row">
            <h3 style="text-align:center"> Cadastro efetuado com sucesso! </h3>
        </div>
        <div>
            <h6 style="text-align:center"> Você será redirecionado a tela de login. </h6>
        </div>
    </div>
</div>

<script> setTimeout(function(){window.location="/login"}, 5000); </script>

@endsection
