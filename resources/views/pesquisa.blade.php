@include('layouts.header')
@yield('conteudo')

<main>
<div class="container-search my-5">

@forelse($buscar as $busca)

<div class="card my-3">
<h5 class="card-header"> {{ $busca->nome }}</h5>
  <div class="card-body">
    <h5 class="card-text">{{ $busca->local }}</h5>
    <p class="card-text">{{ $busca->descricao }}</p>
    <a href="/produtos/{{ $busca->id_experiencia }}" class="btn btn-primary">Visitar</a>
  </div>
</div>

@empty
  
<div class="text-center">
<h4 class="mb-4">Nenhum resultado para: <strong>{{ $busca }}</strong></h4>
  <div>
    <a href="/experiencias#escolhaexp" style="text-decoration:none; color:#000000;">Clique aqui e navegue pelas experiências para encontrar um serviço semelhante.</a>
  </div>
  <div>
  <a href="/experiencias#escolhaexp" style="text-decoration:none; color:#000000;"><img src="{{asset('../../Galeria/logos/404.png')}}" class="img-fluid" style="height: auto; width: 27%;"/></a>
  </div>
</div>

@endforelse  
</main>