<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="./CSS/login.css">
    <title>Login - Blend Tour</title>
</head>

<body>

    <section id="fundo">

        <a href="/">
            <img id="logoLogin" src="./Galeria/logos/logoadesivo.png" alt="Logo Blend Tour">
        </a>

        <section class="container">
            <section class="d-flex justify-content-center h-100">
                <main class="card">
                    <section class="card-header">
                        <h3>Olá, faça seu login</h3>
                        <h4>Entre com seu e-mail e senha de acesso</h4>
                    </section>
                    <section class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <section class="input-group form-group">
                                <aside class="input-group-prepend">
                                    <label class="user-click" for="email" {{ __('E-Mail Address') }}><span class="input-group-text"><i class="fas fa-user"></i></span></label>
                                </aside>
                                <input type="email" id="email" class="form-control" placeholder="e-mail"
                                @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </section>
                            <section class="input-group form-group">
                                <aside class="input-group-prepend">
                                    <label for="password" class="pass-click" {{ __('Password') }}><span class="input-group-text"><i class="fas fa-key"></i></span></label>
                                </aside>
                                <input type="password" id="password" class="form-control" placeholder="senha"
                                @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </section>
                            <section class="form-group">
                                <input type="submit" value="{{ __('Entrar') }}" id="btn-TelaLogin">
                            </section>
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <label class="form-check-label" for="remember" style="color:#fff;">
                                {{ __('Remember Me') }}
                            </label>
                        </form>
                    </section>
                    <section class="card-footer">
                        <section class="d-flex justify-content-center links">
                            <a href="/register">Não sou membro</a>
                        </section>
                        <section class="d-flex justify-content-center">
                            @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Esqueceu sua senha?') }}
                                    </a>
                            @endif
                        </section>
                    </section>
                </main>
            </section>
        </section>

    </section>

{{-- <form>
    <div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h4 class="modal-title w-100 font-weight-bold">Esqueci minha senha</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <div class="modal-body mx-3">
            <div class="md-form mb-5">
                <i class="fas fa-envelope prefix grey-text"></i>
                <label>Seu e-mail</label>
                <input type="email" id="defaultForm-email" class="form-control validate" name="email">
                <small>Esta função está desabilitada no momento</small>
                <label for="defaultForm-email" data-error="errado" data-success="certo"></label>
            </div>
        </div>
        <div class="modal-footer d-flex justify-content-center">
            <button id="btn-TelaLogin">Entrar</button>
        </div>
    </div>
    </div>
  </div>

</form> --}}



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


</body>

</html>
