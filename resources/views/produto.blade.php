@extends ('layouts.master_layout')
@section('conteudo')
<section class="produtoslider">
    <h2 class="titleproddesc">Descrição dos Serviços</h2>
    <div class="carrosselproduto">
       <img src="./Galeria/imageDB/Cidades/slider1.png" alt="" class="fotoproduto">
       <img src="./Galeria/imageDB/Natureza/slider3.png" alt="" class="fotoproduto">
       <img src="./Galeria/imageDB/Historico Cultural/slider2.png" alt="" class="fotoproduto">
       <img src="./Galeria/imageDB/Cidades/slider4.png" alt="" class="fotoproduto">
       <img src="./Galeria/imageDB/Cidades/slider5.png" alt="" class="fotoproduto">
    </div>
    <div class="txtprodutodesc">
        <article class="artprodint">
            <p class="txtprodutodescint">
                Mussum Ipsum, cacilds vidis litro abertis. Diuretics paradis num copo é motivis de denguis. Pra lá , depois divoltis porris, paradis. A ordem dos tratores não altera o pão duris. Interagi no mé, cursus quis, vehicula ac nisi.

                Mé faiz elementum girarzis, nisi eros vermeio. Quem num gosta di mé, boa gentis num é. Sapien in monti palavris qui num significa nadis i pareci latim. Detraxit consequat et quo num tendi nada.

                Nullam volutpat risus nec leo commodo, ut interdum diam laoreet. Sed non consequat odio. Quem manda na minha terra sou euzis! Si num tem leite então bota uma pinga aí cumpadi! Mais vale um bebadis conhecidiss, que um alcoolatra anonimis.
            </p>
        </article>
        <a href="/carrinho"><input id="btn-comprar-produto"type="submit" value="Comprar"></a>
    </div>
</section>
<h2 id="titlerelacionados">Relacionados</h2>
<section class="produtorelacionados">
    <div class="containerimperdivel">
        <div class="cardimperdivel">
            <div class="cara cara1">
                <div class="contentimperdivel">
                    <img src="./Galeria/imageDB/Aventura/asadelta.jpg" alt="asa_delta">
                </div>
            </div>
        <div class="cara cara2">
            <div class="contentimperivel">
                    <h3>Asa Delta</h3><br>
                    <p>Planar entre o céu azul e o mar transparente, faz da paisagem do Rio uma experiência emocionante.</p>
                        <a href="/experiencias#aventura">Saiba Mais</a>
            </div>
        </div>
    </div>
    <div class="cardimperdivel">
        <div class="cara cara1">
            <div class="contentimperdivel">
                <img src="./Galeria/imageDB/Historico Cultural/relacionadosprod.png" alt="Museu_Amanha_Rio">
            </div>
        </div>
            <div class="cara cara2">
                <div class="contentimperivel">
                    <h3>Museu do Amanhã</h3><br>
                    <p>Moderníssimo museu inaugurado para os Jogos Olímpicos do Rio de Janeiro, trazendo uma experiência sensorial, a começar pelo seu belíssimo design </p>
                        <a href="/experiencias#cultural">Saiba Mais</a>
                </div>
            </div>
        </div>
            <div class="cardimperdivel">
                <div class="cara cara1">
                    <div class="contentimperdivel">
                        <img src="./Galeria/imageDB/Gastronomia/feijoada.jpg" alt="feijoada">
                    </div>
                </div>
                    <div class="cara cara2">
                        <div class="contentimperivel">
                            <h3>Museu do Amanhã</h3><br>
                            <p>Que tal experimentar este prato que tem a cara do Brasil e é apreciado por milhões de pessoas no país inteiro ?</p>
                            <a href="/experiencias#gastronomia">Saiba Mais</a>
                     </div>
                </div>
            </div>
    </div>
</section>
@endsection
