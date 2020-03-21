@extends ('layouts.master_layout')
@section('conteudo')
<section class="produtoslider">

    @if(isset($produto, $categoria))

    <h2 class="titleproddesc">Descrição dos Serviços</h2>
    <div class="carrosselproduto">
        <img src="{{$produto->imagem}}" alt="" class="fotoproduto">
    </div>
    <div class="txtprodutodesc">
        <article class="artprodint">
            <h1>{{$produto->nome}}</h1>
            <p class="txtprodutodescint">
                {{$produto->descricao}}
            </p>
            <p style="margin-top: 30px; display:flexbox; float:right;">Categoria: {{$categoria}}</p>
            <p style="margin-top: 60px; font-size:2.5em; font-weight:bold; display:flex; justify-content: flex-end; ">R$ {{ number_format($produto->preco, 2, ',', '.')}} </p>
        </article>
        <a href="/addcarrinho/{{$produto->id_experiencia}}"><input id="btn-comprar-produto"type="submit" value="Comprar"></a>
    </div>
</section>
    @endif
@endsection
