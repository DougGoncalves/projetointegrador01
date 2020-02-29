@extends('layouts.master_layout')
@section('conteudo')
<section id="obrasil" >
    <h1 class="titlebrasil">O BRASIL</h1>
    <img src="./Galeria/imageDB/Cidades/sergio-souza-tncsQE63ENU-unsplash.jpg" alt="foto_cidade_bandeira_brasil" id="fotobrasil">
    <div id="opbrasil">
        <article class="artbrasil">
            <p class="txtbrasil">
                    Sol, samba e areia: os prazeres exuberantes do Rio de Janeiro, antiga capital do Brasil, são bem conhecidos em todo o mundo. Para aqueles que se aventuram mais profundamente, no entanto, este, que é o maior dos países da América do Sul, oferece uma enorme variedade de riquezas. Das cintilantes Cataratas do Iguaçu, à abundante vida selvagem da Amazônia e Pantanal, das ruínas coloniais portuguesas em Salvador, às ultra-modernas lojas e vida noturna de São Paulo e Brasília. O Brasil o cativará com o calor de seu povo, sua vibração e sua visão da vida. <strong>Bem-vindo!</strong>
            </p>
        </article>
    </div>
</section>
<section id="historia">
    <h1 class="titlehistoria">HISTÓRIA</h1>
    <img src="./Galeria/imageDB/Historico Cultural/estacaodaluz.png" alt="estacao_da_luz_SP" id="fotohistoria">
    <div id="ophistoria">
        <article class="arthistoria">
            <p class="txthistoria">
                    Como em muitos países da América do Sul, a história do Brasil começa com os povos indígenas e remonta a mais de 10.000 anos. Os primeiros habitantes do Brasil foram índios nativos, que viviam principalmente na costa e ao lado de rios em tribos. Mas muito pouco se sabe sobre a história do Brasil antes da chegada dos portugueses em 1500, pois as tribos tendiam a ser semi-nômades, sem edifícios permanentes e sem registros escritos.
                    A frota portuguesa sob o comando de Pedro Alvares Cabral, chegou em abril de 1500, reivindicando o Brasil para Portugal. Até esse momento, Portugal mostrou pouco interesse no Brasil ou na árvore de pau-brasil que era a maior exportação do Brasil. A partir do século XVI, as plantações de cana-de-açúcar ao longo da costa nordeste se tornaram uma parte importante da economia do país. Os portugueses tentaram usar os povos indígenas nativos como escravos para produzir açúcar para a Europa, mas no final eles começaram a trazer escravos da África.
                    O primeiro assentamento permanente português foi estabelecido em São Vicente em 1532. Salvador foi fundada pelos portugueses em 1549 como a primeira capital do Brasil e tornou-se um importante porto de escravos e cana-de-açúcar.
                </p>
            <p class="txthistoria">
                    Colonos franceses tentaram se estabelecer no atual Rio de Janeiro entre 1555 e 1567. Os jesuítas também tiveram um papel fundamental na colonização precoce, a ordem jesuíta que estabeleceu a cidade de São Paulo em 1557. Os holandeses estavam presentes no nordeste a partir da década de 1620 capturando Salvador brevemente antes da expulsão em 1654.
                    O ouro foi descoberto no Brasil no início do século XVIII, resultando em um enorme fluxo de imigrantes europeus. A região conhecida como Minas Gerais tornou-se o centro da mineração de ouro no Brasil e os escravos foram novamente utilizados como força de trabalho. Depósitos de diamantes também foram descobertos em 1729 na região hoje conhecida como Diamantina, hoje Patrimônio Mundial da UNESCO.
                </p>
            <p class="txthistoria">
                    A partir de 1808, o rei português governou seu vasto império do Rio de Janeiro. 15 anos depois da Guerra da Independência, o Brasil deixou de ser uma colônia portuguesa que declarou independência de Portugal em 1822 e se tornou o Império do Brasil. Pedro I governou até sua abdicação em 1831, quando deixou para trás seu filho de 5 anos, o imperador Pedro II. Anos de rebelião se seguiram. A Primeira República Brasileira foi fundada em 1889, após um golpe militar e a expulsão de Pedro II. O nome do país foi alterado para a República dos Estados Unidos do Brasil, mudando novamente em 1967 para a República Federativa do Brasil.
                    O Brasil aboliu a escravidão em 1888, o último país do mundo ocidental a fazê-lo, após a importação de 4 a 5 milhões de escravos africanos.
                    O café foi introduzido no Brasil em 1720 e em meados de 1800, o Brasil era responsável por metade da produção mundial de café.
                </p>
        <p class="txthistoria">
                    De 1880 a 1920, houve um boom da borracha na Amazônia e resultou na transformação da vila de Manaus em um centro cosmopolita completo com teatro ornamentado.
            </p>
        </article>
    </div>
</section>
<section id="destinos">
    <h1 class="titledestinos">DESTINOS</h1>
<div class="containerdestinos">
    <div class="cardestinos">
        <input type="checkbox" id="checkdestinos">
        <div class="toggled">+</div>
        <div class="imgBxdestinos">
            <img src="./Galeria/imageDB/Aventura/aventura.jpg" alt="aventura" id="foto1destinos">
        </div>
        <div class="detalhesdestinos">
            <a href="/experiencias#aventura" style="color:white;text-decoration: none">
            <h2 class="cardcalldestinos">AVENTURA</h2>
            </a>
            <p class="descdestinos">Que tal aquela dose de adrenalina ? Asa-Delta, Rafting, Mountain-Bike você escolhe, mas a emoção é por nossa conta</p>
        </div>
        <div class="cardestinos2">
                <input type="checkbox" id="checkdestinos">
                <div class="toggled">+</div>
                <div class="imgBxdestinos">
                    <img src="./Galeria/imageDB/Cidades/avenida-paulista-black-and-white-brazil-72479.jpg" alt="cidades" id="foto2destinos">
                </div>
                <div class="detalhesdestinos">
                    <a href="/experiencias#cidades" style="color:white;text-decoration: none">
                    <h2 class="cardcalldestinos">CIDADES</h2>
                    </a>
                    <p class="descdestinos">Conheça as cidades como um local: visite lugares pouco explorados e encontre "jóias" desconhecidas em grandes centros. Oportunidade verdadeira de conhecer a cultura e costumes de um lugar </p>
        </div>
        <div class="cardestinos3">
                <input type="checkbox" id="checkdestinos">
                <div class="toggled">+</div>
                <div class="imgBxdestinos">
                    <img src="./Galeria/imageDB/Gastronomia/mercadao_saopaulo.jpg" alt="gastronomia" id="foto3destinos">
                </div>
                <div class="detalhesdestinos">
                    <a href="/experiencias#gastronomia" style="color:white;text-decoration: none">
                    <h2 class="cardcalldestinos">GASTRONOMIA</h2>
                    </a>
                    <p class="descdestinos"> Anos de fluxo migratório e colonização deixaram nossa culinária local com sabores únicos. Misturas que não são encontradas em nenhum outro lugar do mundo. Saboreei frutas exóticas, pratos típicos e bebidas que aguçam os sentidos.</p>
        </div>
        <div class="cardestinos4">
                <input type="checkbox" id="checkdestinos">
                <div class="toggled">+</div>
                <div class="imgBxdestinos">
                    <img src="./Galeria/imageDB/Historico Cultural/museu_ipiranga.jpg" alt="historicocultural" id="foto4destinos">
                </div>
                <div class="detalhesdestinos">
                    <a href="/experiencias#cultural" style="color:white;text-decoration: none">
                    <h2 class="cardcalldestinos">CULTURAL</h2>
                    </a>
                    <p  class="descdestinos">Conheça um Brasil pouco explorado e riquíssimo em cultura, formada pelos diversos povos que por aqui passaram ou se estabeleceram. Um grande mix de culturas negra, européia, asiática e indígena.</p>
        </div>
        <div class="cardestinos5">
                <input type="checkbox" id="checkdestinos">
                <div class="toggled">+</div>
                <div class="imgBxdestinos">
                    <img src="./Galeria/imageDB/Natureza/aerial-shot-bird-s-eye-view-brazil-1650669.jpg" alt="natureza" id="foto5destinos">
                </div>
                <div class="detalhesdestinos">
                    <a href="/experiencias#natureza" style="color:white;text-decoration: none">
                    <h2 class="cardcalldestinos">NATUREZA</h2>
                    </a>
                    <p class="descdestinos"> Um dos maiores ecossistemas do mundo, com uma enorme variedade de fauna e flora, pode te proporcionar experiências únicas e diversas. Florestas tropicais, campos, cerrado, sertão. Várias experiências em um único lugar</p>
        </div>
        <div class="cardestinos6">
                <input type="checkbox" id="checkdestinos">
                <div class="toggled">+</div>
                <div class="imgBxdestinos">
                    <img src="./Galeria/imageDB/Vida Noturna/nightlife.jpg" alt="nightlife" id="foto6destinos">
                </div>
                <div class="detalhesdestinos">
                    <a href="/experiencias#vida_noturna" style="color:white;text-decoration: none">
                    <h2 class="cardcalldestinos">VIDA NOTURNA</h2>
                    </a>
                    <p class="descdestinos">Se jogue na noite e descubra como os locais se divertem!</p>
        </div>
    </div>
</div>
</section>
@endsection
