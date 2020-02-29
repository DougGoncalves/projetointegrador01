@extends('layouts.master_layout')
@section('conteudo')
<section id="escolhaexp">
    <img src="./Galeria/imageDB/Cidades/praia por do sol.jpg" alt="foto_escolha" id="fotoescolha">
  <div class="callexp">
        <h1 id="ttescolhaexp">ESCOLHA SEU TIPO DE EXPERIÊNCIA:</h1>
          <a href="#aventura"><input type="button" value="Aventura" id="btnaven"></a>
          <a href="#cidades"><input type="button" value="Cidades" id="btncid"></a>
          <a href="#gastronomia"><input type="button" value="Gastronomia" id="btngas"></a>
          <a href="#cultural"><input type="button" value="Histórico Cultural" id="btncult"></a>
          <a href="#natureza"><input type="button" value="Natureza" id="btnnat"></a>
          <a href="#vida_noturna"><input type="button" value="Vida Noturna" id="btnvid"></a>
  </div>
</section>
<section id="ofertasexp">
    <h1 id="ttofertasexp">Ofertas Imperdíveis</h1>
    <div class="carrosselexp">
        <ul class="imagenssliderexp">
            <li>
                    <input type="radio" id="slide1exp" name="slide" checked>
                    <label for="slide1exp"></label>
                <img src="./Galeria/imageDB/Aventura/zipline_slider.jpg" alt="tirolesa">
            </li>
            <li>
                    <input type="radio" id="slide2exp" name="slide" >
                    <label for="slide2exp"></label>
                <img src="./Galeria/imageDB/Gastronomia/moqueca_slider.jpg" alt="moqueca">
            </li>
            <li>
                    <input type="radio" id="slide3exp" name="slide">
                    <label for="slide3exp"></label>
                <img src="./Galeria/imageDB/Natureza/foz_slider.jpg" alt="foz_do_iguacu">
            </li>
        </ul>
    </div>
</section>
<section id="aproveiteexp">
<h1 id="ttaproveiteexp">Aproveite seu destino ao máximo</h1>
<div class="aproveitecta">
    <img class="aprovfoto"src="./Galeria/imageDB/Aventura/rafting_aprov.jpg" alt="rafting" id="fotorafting">
    <a href="#aventura">
    <img id="iconeaventaprov" src="./Assets/Icon/adventure.png" alt="icone_aventura">
    <h2 id="ttaventaprov">AVENTURA</h2>
    </a>
    <img class="aprovfoto"src="./Galeria/imageDB/Cidades/curitiba_apro.jpg" alt="curitiba">
    <a href="#cidades">
    <img id="iconecidaprov"src="./Assets/Icon/cities.png" alt="icone_cidades">
    <h2 id="ttcidaprov">CIDADES</h2>
    </a>
    <img class="aprovfoto"src="./Galeria/imageDB/Historico Cultural/indios_apro.jpg" alt="aldeia">
    <a href="#cultural">
    <img id="iconcultaprov"src="./Assets/Icon/culture.png" alt="icone_cultura">
    <h2 id="ttcultaprov">CULTURAL</h2>
    </a>
    <img class="aprovfoto"src="./Galeria/imageDB/Vida Noturna/nightlife3_apro.jpg" alt="dj">
    <a href="#vida_noturna">
    <img id="iconnoturaprov"src="./Assets/Icon/nightlife.png" alt="icon_nightlife">
    <h2 id="ttnoturaprov">VIDA NOTURNA</h2>
    </a>
</div>
</section>
<section id="viajantesexp">
<h2 id="ttviajantesexp">Conheça a experiência de outros viajantes</h2>
<img src="./Galeria/imageDB/Cidades/curitiba.jpg" alt="curitiba" id="fotoviajanteexp">
<div id="viajantesexp">
    <div class="cardviajante">
        <img src="./Assets/Pessoas/pessoa10.jpg" alt="depo1" id="testmpic1">
        <p id="testm1">"Foi uma experiência incrível. Tive todo o suporte da equipe de atendimento e consegui explorar tudo o que eu planejei. Estão mais que recomendados"</p>
        <p id="testmname1"><strong>Vanessa Ryan</strong></p>
    </div>
    <div class="cardviajante">
        <img src="./Assets/Pessoas/pessoa5.jpg" alt="depo2" id="testmpic2">
        <p id="testm2">"Eu amo adrenalina, mas nunca tinha fechado pacotes de experiências com agências de viagem. A Blend Tour me mostrou um Brasil que eu não conhecia. Estão de parabéns!"</p>
        <p id="testmname2"><strong>Randall Hurley</strong></p>
    </div>
    <div class="cardviajante">
        <img src="./Assets/Pessoas/pessoa8.jpg" alt="depo3" id="testmpic3">
        <p id="testm3">"Foi a primeira vez que tive coragem de viajar sozinha. Conheci a Blend Tour por indicação de uma amiga e amei a experiência. Já estou planejando a próxima viagem."</p>
        <p id="testmname3"><strong>Adrienne Miller</strong></p>
    </div>
</div>
<div class="inscrevaexp">
    <h1 id="inscrevactaexp">Inscreva-se para receber as melhores ofertas</h1>
    <input type="email" name="email" id="inscrevamailexp" placeholder="Digite seu e-mail">
    <input type="button" value="Enviar" id="inscrevabtn">
</div>
</section>
<section id="aventura">
<h1 id="ttaventura">AVENTURA</h1>
<div class="cardexp direitaexp">
        <div class="frontexp">
            <img src="./Galeria/imageDB/Aventura/expadv2.png" alt="rafting">
        </div>
        <div class="backexp">
            <div class="backcontentexp direitaexp">
                <h2 class="ttexpintern">Rafting</h2>
                <span>Corredeiras, alta velocidade, adrenalina e aquele banho te esperam em Brotas-SP. Experimente esse circuito de rafting imperdível</span>
                <div class="btnsaibaexp">
                    <a href="/produto">Saiba Mais</a>
                </div>
            </div>
        </div>
<div class="cardexp esquerdaexp">
        <div class="frontexp">
            <img src="./Galeria/imageDB/Aventura/expadv1.png" alt="mountainbike">
        </div>
        <div class="backexpe">
            <div class="backcontentexp esquerdaexp">
                <h2 class="ttexpintern">Mountain Bike</h2>
                <span>Curta essa trilha off-road de Mountain Bike pelo Cerrado Brasileiro</span>
                <div class="btnsaibaexp">
                    <a href="/produto">Saiba Mais</a>
                </div>
            </div>
        </div>
<div class="cardexp meioexp">
    <div class="frontexp">
        <img src="./Galeria/imageDB/Aventura/expadv3.png" alt="paraglider">
    </div>
    <div class="backexpd">
        <div class="backcontentexp meioexp">
            <h2 class="ttexpintern">Paraglider</h2>
            <span>Passeios de paraglider do alto da Pedra Grande, em Atibaia - São Paulo</span>
            <div class="btnsaibaexp">
                <a href="/produto">Saiba Mais</a>
            </div>
        </div>
    </div>
</div>
</section>
<section id="cidades">
    <h1 id="ttcidades">CIDADES</h1>
    <div class="cardexp direitaexp">
            <div class="frontexp">
                <img src="./Galeria/imageDB/Cidades/expcid1.png" alt="rio_de_janeiro">
            </div>
            <div class="backexp">
                <div class="backcontentexp direitaexp">
                    <h2 class="ttexpintern">Rio de Janeiro</h2>
                    <span>Praias, samba, calor, venha conhecer todos os encantos da cidade maravilhosa e tudo o que ela tem a oferecer.</span>
                    <div class="btnsaibaexp">
                        <a href="/produto">Saiba Mais</a>
                    </div>
                </div>
            </div>
    <div class="cardexp esquerdaexp">
            <div class="frontexp">
                <img src="./Galeria/imageDB/Cidades/expcid2.png" alt="recife">
            </div>
            <div class="backexpe">
                <div class="backcontentexp esquerdaexp">
                    <h2 class="ttexpintern">Recife</h2>
                    <span>Não perca essa oportunidade de se aventurar pelas praias do Nordeste brasileiro e conhecer a "Veneza brasileira" e todo seu charme, unindo a cultura sertaneja com a influência das invasões holandesas</span>
                    <div class="btnsaibaexp">
                        <a href="/produto">Saiba Mais</a>
                    </div>
                </div>
            </div>
    <div class="cardexp meioexp">
        <div class="frontexp">
            <img src="./Galeria/imageDB/Cidades/expcid3.png" alt="florianopolis">
        </div>
        <div class="backexpd">
            <div class="backcontentexp meioexp">
                <h2 class="ttexpintern">Florianópolis</h2>
                <span>Um dos destinos de mais alto luxo no Brasil te espera de braços abertos. Alugue um carro esporte e conheça a orla e as praias de Jurerê Internacional</span>
                <div class="btnsaibaexp">
                    <a href="/produto">Saiba Mais</a>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="gastronomia">
    <h1 id="ttgastronomia">GASTRONOMIA</h1>
    <div class="cardexp direitaexp">
            <div class="frontexp">
                <img src="./Galeria/imageDB/Gastronomia/expgast1.png" alt="acai">
            </div>
            <div class="backexp">
                <div class="backcontentexp direitaexp">
                    <h2 class="ttexpintern">Açaí</h2>
                    <span>Experimente e conheça todo o processo da fabricação do açaí, fruto nativo do Brasil e adorado por atletas do mundo inteiro</span>
                    <div class="btnsaibaexp">
                        <a href="/produto">Saiba Mais</a>
                    </div>
                </div>
            </div>
    <div class="cardexp esquerdaexp">
            <div class="frontexp">
                <img src="./Galeria/imageDB/Gastronomia/expgast2.png" alt="brigadeiro">
            </div>
            <div class="backexpe">
                <div class="backcontentexp esquerdaexp">
                    <h2 class="ttexpintern">Brigadeiro</h2>
                    <span>Para aqueles loucos por doces, que tal experimentar a sobremesa preferida dos brasileiros, o brigadeiro!</span>
                    <div class="btnsaibaexp">
                        <a href="/produto">Saiba Mais</a>
                    </div>
                </div>
            </div>
    <div class="cardexp meioexp">
        <div class="frontexp">
            <img src="./Galeria/imageDB/Gastronomia/expgast3.png" alt="castanhas">
        </div>
        <div class="backexpd">
            <div class="backcontentexp meioexp">
                <h2 class="ttexpintern">Castanhas</h2>
                <span>Saboreie as "brazilian-nuts"ou, como são conhecidas por aqui, castanhas do Pará. Vá ao Mercado Ver o peso em Belém-PA e conheça outras delícias que eles tem  a oferecer.</span>
                <div class="btnsaibaexp">
                    <a href="/produto">Saiba Mais</a>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="cultural">
    <h1 id="ttcultural">HISTÓRICO CULTURAL</h1>
    <div class="cardexp direitaexp">
            <div class="frontexp">
                <img src="./Galeria/imageDB/Historico Cultural/expcult1.png" alt="Carnaval">
            </div>
            <div class="backexp">
                <div class="backcontentexp direitaexp">
                    <h2 class="ttexpintern">Carnaval</h2>
                    <span>Caia no samba na Marquês de Sapucaí e viva esta festa de perto, aproveitando cada momento com toda alegria e descontração que esse evento pode oferecer.</span>
                    <div class="btnsaibaexp">
                        <a href="/produto">Saiba Mais</a>
                    </div>
                </div>
            </div>
    <div class="cardexp esquerdaexp">
            <div class="frontexp">
                <img src="./Galeria/imageDB/Historico Cultural/expcult2.png" alt="festa_junina">
            </div>
            <div class="backexpe">
                <div class="backcontentexp esquerdaexp">
                    <h2 class="ttexpintern">Festa Junina</h2>
                    <span>Se divirta com brincadeiras, música típicas e muita comida boa, nessa que é uma das festas mais populares do Brasil.</span>
                    <div class="btnsaibaexp">
                        <a href="/produto">Saiba Mais</a>
                    </div>
                </div>
            </div>
    <div class="cardexp meioexp">
        <div class="frontexp">
            <img src="./Galeria/imageDB/Historico Cultural/expcult3.png" alt="museus">
        </div>
        <div class="backexpd">
            <div class="backcontentexp meioexp">
                <h2 class="ttexpintern">Museus</h2>
                <span>Conheça um pouco de nossa história  através dos diversos museus espalhados por todo o país. </span>
                <div class="btnsaibaexp">
                    <a href="/produto">Saiba Mais</a>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="natureza">
    <h1 id="ttnatureza">NATUREZA</h1>
    <div class="cardexp direitaexp">
            <div class="frontexp">
                <img src="./Galeria/imageDB/Natureza/expnat1.png" alt="fozdoiguacu">
            </div>
            <div class="backexp">
                <div class="backcontentexp direitaexp">
                    <h2 class="ttexpintern">Foz do Iguaçú</h2>
                    <span>Conheça as famosas Cataratas do Iguaçú, na tríplice fronteira entre Brasil, Argentina e Paraguai.</span>
                    <div class="btnsaibaexp">
                        <a href="/produto">Saiba Mais</a>
                    </div>
                </div>
            </div>
    <div class="cardexp esquerdaexp">
            <div class="frontexp">
                <img src="./Galeria/imageDB/Natureza/expnat2.png" alt="floresta">
            </div>
            <div class="backexpe">
                <div class="backcontentexp esquerdaexp">
                    <h2 class="ttexpintern">Floresta Amazônica</h2>
                    <span>Um dos maiores biomas do mundo está aqui, que tal fugir do comum e conhecer espécies de animais e plantas que não podem ser encontrados em nenhum outro lugar do planeta.</span>
                    <div class="btnsaibaexp">
                        <a href="/produto">Saiba Mais</a>
                    </div>
                </div>
            </div>
    <div class="cardexp meioexp">
        <div class="frontexp">
            <img src="./Galeria/imageDB/Natureza/expnat3.png" alt="cachoeira">
        </div>
        <div class="backexpd">
            <div class="backcontentexp meioexp">
                <h2 class="ttexpintern">Cachoeiras</h2>
                <span>São diversas espalhadas por todo o país, com grande variação nos volumes de água. Tome um banho revigorante e renove suas energias.</span>
                <div class="btnsaibaexp">
                    <a href="/produto">Saiba Mais</a>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="vida_noturna">
    <h1 id="ttvidanoturna">VIDA NOTURNA</h1>
    <div class="cardexp direitaexp">
            <div class="frontexp">
                <img src="./Galeria/imageDB/Vida Noturna/expnot1.png" alt="bares">
            </div>
            <div class="backexp">
                <div class="backcontentexp direitaexp">
                    <h2 class="ttexpintern">Bares</h2>
                    <span>Um lugar pra fazer aqueles "esquenta", pra paquerar, pra se divertir com os amigos, não importa a ocasião você vai se divertir.</span>
                    <div class="btnsaibaexp">
                        <a href="/produto">Saiba Mais</a>
                    </div>
                </div>
            </div>
    <div class="cardexp esquerdaexp">
            <div class="frontexp">
                <img src="./Galeria/imageDB/Vida Noturna/expnot2.png" alt="balada">
            </div>
            <div class="backexpe">
                <div class="backcontentexp esquerdaexp">
                    <h2 class="ttexpintern">Baladas</h2>
                    <span>Não importa o ritmo que você curte, não irão faltar opções para se esbaldar na noite</span>
                    <div class="btnsaibaexp">
                        <a href="/produto">Saiba Mais</a>
                    </div>
                </div>
            </div>
    <div class="cardexp meioexp">
        <div class="frontexp">
            <img src="./Galeria/imageDB/Vida Noturna/expnot3.png" alt="sp_noite">
        </div>
        <div class="backexpd">
            <div class="backcontentexp meioexp">
                <h2 class="ttexpintern">Comida</h2>
                <span>Com uma variedade de restaurantes inigualável, São Paulo, uma das maiores capitais gastronômicas do planeta vai te levar numa viagem por todos os sentidos.</span>
                <div class="btnsaibaexp">
                    <a href="/produto">Saiba Mais</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
