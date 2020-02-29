@extends('layouts.master_layout')
@section('conteudo')
<section id="oclima">
    <h1 class="clima">O CLIMA</h1>
    <div class="divclima">
            <img id ="fotoclima"src="./Galeria/imageDB/Cidades/praia por do sol.jpg" alt="por_do_sol">
        <div id="opclima">
                <article class="artclima" >
                        <p class="txtclima">
                            O Brasil possui climas que agradam a todos os gostos, graças à sua grande extensão territorial, combinada com fatores como altitude, pressão e proximidade do oceano. A temperatura média anual é de 28 ° C no norte e 20 ° C no sul do país.

                            O inverno brasileiro ocorre entre junho e setembro e, em algumas cidades do sul e sudeste, as temperaturas atingem menos de 0 ° C, com geada e neve. No verão, você pode desfrutar de um calor de 40 ° C em cidades como o Rio de Janeiro. O verão no Brasil é a melhor época para ir à praia, beber água de coco, mergulhar no mar e tomar sol.

                            Independentemente da estação, é sempre uma boa ideia levar um casaco e uma calça, pois o tempo pode mudar repentinamente em alguns locais, especialmente nas regiões montanhosas e costeiras.
                            <br>
                            <br>
                            <br>
                        </p>
                        <article class="artclima">
                            <h2 class="tituloclima"><strong>Estações no Brasil:</strong></h2>
                            <br>
                            <p class="txtclima2"><strong>Verão:</strong> de 21 de dezembro a 21 de março.</p>
                            <p class="txtclima2"><strong>Outono:</strong> de 21 de março a 21 de junho.</p>
                            <p class="txtclima2"><strong>Inverno:</strong> de 21 de junho a 23 de setembro.</p>
                            <p class="txtclima2"><strong>Primavera:</strong> de 23 de setembro a 21 de dezembro.</p>
                        </article>
                    </article>
        </div>
    </div>
</section>
<section id="comochegar">
    <h1 class="chegar">COMO CHEGAR</h1>
    <img src="./Galeria/imageDB/Cidades/chegar.jpg" alt="aeroporto_chegada" id="fotochegar">
    <div class="opchegar">
       <article class="artchegar">
           <p class="txtchegar">
                A menos que você esteja entrando no Brasil por terra a partir de um país vizinho, quase certamente chegará de avião. Os principais aeroportos do Brasil são: São Paulo, Rio de Janeiro, Brasília e Salvador. As tarifas aéreas sempre dependem da estação: as datas específicas variam entre as companhias aéreas, mas a alta temporada geralmente é julho e agosto, e novamente em meados de dezembro até o dia de Natal. Normalmente, as tarifas não aumentam no Carnaval (fevereiro a março), mas conseguir um assento em cima da hora pode ser difícil. A concorrência de companhias aéreas é acirrada, no entanto, muitas vezes existem ofertas disponíveis.
                Vale a pena verificar as tarifas diretamente com as companhias aéreas que voam para o Brasil; eles frequentemente oferecem tarifas competitivas, especialmente durante a baixa temporada, embora possam ter certas restrições, como passar pelo menos sete dias no exterior (estadia máxima de três meses).

                Outra opção viável é a chegada por navios, que tem como principal portos para atracagem: Santos, em São Paulo e Rio de Janeiro.

                Para quem mora em países vizinhos, há ainda a opção de se fazer o trajeto de carro através das extensas rodovias que cortam todo o país. <strong>Dica:</strong> inclua paradas em pequenas cidades, para descobrir um Brasil pouco explorado, mas riquíssimo e diverso.
           </p>
       </article>
    </div>
</section>
<section id= "imperdivel">
    <h1 class="h1imperdivel">IMPERDÍVEL</h1>
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
                        <img src="./Galeria/imageDB/Historico Cultural/teatro_municipal_SP_interno.jpg" alt="Teatro_Municipal_SP">
                    </div>
                </div>
                <div class="cara cara2">
                    <div class="contentimperivel">
                        <h3>Teatro Municipal São Paulo</h3><br>
                        <p>Conheça um pouco da história e cultura da maior metrópole da América Latina</p>
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
                            <h3>Feijoada</h3><br>
                            <p>Que tal experimentar este prato que tem a cara do Brasil e é apreciado por milhões de pessoas no páis inteiro ?</p>
                            <a href="/experiencias#gastronomia">Saiba Mais</a>
                        </div>
                    </div>
                </div>
    </div>
</section>
@endsection
