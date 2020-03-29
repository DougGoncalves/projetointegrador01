@extends('layouts.master_layout')
@section('conteudo')
<section id="escolhaexp">
    <img src="./Galeria/imageDB/Cidades/praia por do sol.jpg" alt="foto_escolha" id="fotoescolha">
  <div class="callexp">
        <h1 id="ttescolhaexp">ESCOLHA SEU TIPO DE EXPERIÊNCIA:</h1>

            @if(isset($categorias))
            @foreach($categorias as $categoria)

                <a href="#{{$categoria->nome}}"><input type="button" id="btnexper" value= "{{$categoria->nome }}" class="btn btn-primary"  ></a>

            @endforeach
            @endif
  </div>
</section>
<section id="ofertasexp">
    <h1 id="ttofertasexp">Ofertas Imperdíveis</h1>
    <div class="carrosselexp">
        <div class="slideshow-container">
            <div class="mySlides fade">
                <img src="./Galeria/imageDB/Aventura/zipline_slider.jpg" style="width:100%" alt="tirolesa">
                <div class="text"><a href="/produtos/3" style="text-decoration: none;color: inherit;">Preços Promocionais para Passeios de Paraglider</a> </div>
            </div>
            <div class="mySlides fade">
                <img src="./Galeria/imageDB/Gastronomia/moqueca_slider.jpg" style="width:100%" alt="moqueca" href="">
                <div class="text"><a href="/produtos/14" style="text-decoration: none;color: inherit;">Culinária Típica do Nordeste, Experimente!</a></div>
            </div>
            <div class="mySlides fade">
                <img src="./Galeria/imageDB/Natureza/foz_slider.jpg" style="width:100%" alt="foz_do_iguacu" href="">
                <div class="text"><a href="/produtos/26" style="text-decoration: none;color: inherit;">Foz do Iguaçú, conheça a tríplice fronteira</a></div>
            </div>
        </div>
        <div style="text-align:center">
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
        </div>
    </div>
</section>
<section id="aproveiteexp">
<h1 id="ttaproveiteexp">Aproveite seu destino ao máximo</h1>
<div class="aproveitecta">
    <img class="aprovfoto"src="./Galeria/imageDB/Aventura/rafting_aprov.jpg" alt="rafting" id="fotorafting">
    <a href="#Aventura">
    <img id="iconeaventaprov" src="./Assets/Icon/adventure.png" alt="icone_aventura">
    <h2 id="ttaventaprov">AVENTURA</h2>
    </a>
    <img class="aprovfoto"src="./Galeria/imageDB/Cidades/curitiba_apro.jpg" alt="curitiba">
    <a href="#Cidades">
    <img id="iconecidaprov"src="./Assets/Icon/cities.png" alt="icone_cidades">
    <h2 id="ttcidaprov">CIDADES</h2>
    </a>
    <img class="aprovfoto"src="./Galeria/imageDB/Historico Cultural/indios_apro.jpg" alt="aldeia">
    <a href="#Histórico Cultural">
    <img id="iconcultaprov"src="./Assets/Icon/culture.png" alt="icone_cultura">
    <h2 id="ttcultaprov">CULTURAL</h2>
    </a>
    <img class="aprovfoto"src="./Galeria/imageDB/Vida Noturna/nightlife3_apro.jpg" alt="dj">
    <a href="#Vida Noturna">
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
<section id="Aventura">
<h1 id="ttaventura">AVENTURA</h1>

@if(isset($produtos))
@foreach($produtos as $produto)

<div class="cardexp direitaexp">
        <div class="frontexp">
            <img src="{{$produto->imagem}}" alt="imagem de {{$produto->nome}}">
        </div>
        <div class="backexp">
            <div class="backcontentexp direitaexp">
            <h2 class="ttexpintern">{{$produto->nome}}</h2>
            <span>{{$produto->descricao}}</span>
                <div class="btnsaibaexp">
                    <a href="/produtos/{{$produto->id_experiencia}}">Saiba Mais</a>
                </div>
            </div>
        </div>

@endforeach
@endif

@foreach($prod2 as $p2)

    <div class="cardexp esquerdaexp">
        <div class="frontexp">
            <img src="{{$p2->imagem}}" alt=" imagem de {{$p2->nome}}">
        </div>
        <div class="backexpe">
            <div class="backcontentexp esquerdaexp">
                <h2 class="ttexpintern">{{$p2->nome}}</h2>
                <span>{{$p2->descricao}}</span>
                <div class="btnsaibaexp">
                    <a href="/produtos/{{$p2->id_experiencia}}">Saiba Mais</a>
                </div>
            </div>
        </div>

@endforeach

@foreach ($prod3 as $p3 )

<div class="cardexp meioexp">
    <div class="frontexp">
        <img src="{{$p3->imagem}}" alt="imagem de {{$p3->nome}}">
    </div>
    <div class="backexpd">
        <div class="backcontentexp meioexp">
            <h2 class="ttexpintern">{{$p3->nome}}</h2>
            <span>{{$p3->descricao}}</span>
            <div class="btnsaibaexp">
                <a href="/produtos/{{$p3->id_experiencia}}">Saiba Mais</a>
            </div>
        </div>
    </div>
</div>

@endforeach
</section>
<section id="Cidades">
    <h1 id="ttcidades">CIDADES</h1>

@foreach ($prod4 as $p4 )

    <div class="cardexp direitaexp">
            <div class="frontexp">
                <img src="{{$p4->imagem}}" alt="imagem de {{$p4->nome}}">
            </div>
            <div class="backexp">
                <div class="backcontentexp direitaexp">
                    <h2 class="ttexpintern">{{$p4->nome}}</h2>
                    <span>{{$p4->descricao}}</span>
                    <div class="btnsaibaexp">
                        <a href="/produtos/{{$p4->id_experiencia}}">Saiba Mais</a>
                    </div>
                </div>
            </div>
@endforeach

@foreach ($prod5 as $p5 )
    <div class="cardexp esquerdaexp">
            <div class="frontexp">
                <img src="{{$p5->imagem}}" alt="imagem de {{$p5->nome}}">
            </div>
            <div class="backexpe">
                <div class="backcontentexp esquerdaexp">
                    <h2 class="ttexpintern">{{$p5->nome}}</h2>
                    <span>{{$p5->descricao}}</span>
                    <div class="btnsaibaexp">
                        <a href="/produtos/{{$p5->id_experiencia}}">Saiba Mais</a>
                    </div>
                </div>
            </div>

@endforeach

@foreach ($prod6 as $p6)

    <div class="cardexp meioexp">
        <div class="frontexp">
            <img src="{{$p6->imagem}}" alt="imagem de {{$p6->nome}}">
        </div>
        <div class="backexpd">
            <div class="backcontentexp meioexp">
                <h2 class="ttexpintern">{{$p6->nome}}</h2>
                <span>{{$p6->descricao}}</span>
                <div class="btnsaibaexp">
                    <a href="/produtos/{{$p6->id_experiencia}}">Saiba Mais</a>
                </div>
            </div>
        </div>
    </div>

@endforeach

</section>
<section id="Gastronomia">
    <h1 id="ttgastronomia">GASTRONOMIA</h1>

@foreach ($prod7 as $p7 )

    <div class="cardexp direitaexp">
            <div class="frontexp">
                <img src="{{$p7->imagem}}" alt="imagem de {{$p7->nome}}">
            </div>
            <div class="backexp">
                <div class="backcontentexp direitaexp">
                    <h2 class="ttexpintern">{{$p7->nome}}</h2>
                    <span>{{$p7->descricao}}</span>
                    <div class="btnsaibaexp">
                        <a href="/produtos/{{$p7->id_experiencia}}">Saiba Mais</a>
                    </div>
                </div>
            </div>

@endforeach

@foreach ($prod8 as $p8 )

     <div class="cardexp esquerdaexp">
            <div class="frontexp">
                <img src="{{$p8->imagem}}" alt="imagem de {{$p8->nome}}">
            </div>
            <div class="backexpe">
                <div class="backcontentexp esquerdaexp">
                    <h2 class="ttexpintern">{{$p8->nome}}</h2>
                    <span>{{$p8->descricao}}</span>
                    <div class="btnsaibaexp">
                        <a href="/produtos/{{$p8->id_experiencia}}">Saiba Mais</a>
                    </div>
                </div>
            </div>

@endforeach

@foreach ($prod9 as $p9)

    <div class="cardexp meioexp">
        <div class="frontexp">
            <img src="{{$p9->imagem}}" alt="imagem de {{$p9->nome}}">
        </div>
        <div class="backexpd">
            <div class="backcontentexp meioexp">
                <h2 class="ttexpintern">{{$p9->nome}}</h2>
                <span>{{$p9->descricao}}</span>
                <div class="btnsaibaexp">
                    <a href="/produtos/{{$p9->id_experiencia}}">Saiba Mais</a>
                </div>
            </div>
        </div>
    </div>

@endforeach

</section>
<section id="Histórico Cultural">
    <h1 id="ttcultural">HISTÓRICO CULTURAL</h1>

@foreach ($prod10 as $p10 )

     <div class="cardexp direitaexp">
            <div class="frontexp">
                <img src="{{$p10->imagem}}" alt="imagem de {{$p10->nome}}">
            </div>
            <div class="backexp">
                <div class="backcontentexp direitaexp">
                    <h2 class="ttexpintern">{{$p10->nome}}</h2>
                    <span>{{$p10->descricao}}</span>
                    <div class="btnsaibaexp">
                        <a href="/produtos/{{$p10->id_experiencia}}">Saiba Mais</a>
                    </div>
                </div>
            </div>

@endforeach

@foreach ($prod11 as $p11 )
    <div class="cardexp esquerdaexp">
            <div class="frontexp">
                <img src="{{$p11->imagem}}" alt="imagem de {{$p11->nome}}">
            </div>
            <div class="backexpe">
                <div class="backcontentexp esquerdaexp">
                    <h2 class="ttexpintern">{{$p11->nome}}</h2>
                    <span>{{$p11->descricao}}</span>
                    <div class="btnsaibaexp">
                        <a href="/produtos/{{$p11->id_experiencia}}">Saiba Mais</a>
                    </div>
                </div>
            </div>
@endforeach

@foreach ($prod12 as $p12)

     <div class="cardexp meioexp">
        <div class="frontexp">
            <img src="{{$p12->imagem}}" alt="imagem de {{$p12->nome}}" style="width=340px;">
        </div>
        <div class="backexpd">
            <div class="backcontentexp meioexp">
                <h2 class="ttexpintern">{{$p12->nome}}</h2>
                <span>{{$p12->descricao}} </span>
                <div class="btnsaibaexp">
                    <a href="/produtos/{{$p12->id_experiencia}}">Saiba Mais</a>
                </div>
            </div>
        </div>
    </div>

@endforeach

</section>
<section id="Natureza">
    <h1 id="ttnatureza">NATUREZA</h1>

@foreach ($prod13 as $p13 )

    <div class="cardexp direitaexp">
            <div class="frontexp">
                <img src="{{$p13->imagem}}" alt="imagem de {{$p13->nome}}">
            </div>
            <div class="backexp">
                <div class="backcontentexp direitaexp">
                    <h2 class="ttexpintern">{{$p13->nome}}</h2>
                    <span>{{$p13->descricao}}</span>
                    <div class="btnsaibaexp">
                        <a href="/produtos/{{$p13->id_experiencia}}">Saiba Mais</a>
                    </div>
                </div>
            </div>

@endforeach

@foreach ($prod14 as $p14 )

     <div class="cardexp esquerdaexp">
            <div class="frontexp">
                <img src="{{$p14->imagem}}" alt="imagem de {{$p14->nome}}">
            </div>
            <div class="backexpe">
                <div class="backcontentexp esquerdaexp">
                    <h2 class="ttexpintern">{{$p14->nome}}</h2>
                    <span>{{$p14->descricao}}</span>
                    <div class="btnsaibaexp">
                        <a href="/produtos/{{$p14->id_experiencia}}">Saiba Mais</a>
                    </div>
                </div>
            </div>

@endforeach

@foreach ($prod15 as $p15)

    <div class="cardexp meioexp">
        <div class="frontexp">
            <img src="{{$p15->imagem}}" alt="imagem de {{$p15->nome}}">
        </div>
        <div class="backexpd">
            <div class="backcontentexp meioexp">
                <h2 class="ttexpintern">{{$p15->nome}}</h2>
                <span>{{$p15->descricao}}</span>
                <div class="btnsaibaexp">
                    <a href="/produtos/{{$p15->id_experiencia}}">Saiba Mais</a>
                </div>
            </div>
        </div>
    </div>

@endforeach

</section>
<section id="Vida Noturna">
    <h1 id="ttvidanoturna">VIDA NOTURNA</h1>

@foreach ($prod16 as $p16 )

    <div class="cardexp direitaexp">
            <div class="frontexp">
                <img src="{{$p16->imagem}}" alt="imagem de {{$p16->nome}}">
            </div>
            <div class="backexp">
                <div class="backcontentexp direitaexp">
                    <h2 class="ttexpintern">{{$p16->nome}}</h2>
                    <span>{{$p16->descricao}}</span>
                    <div class="btnsaibaexp">
                        <a href="/produtos/{{$p16->id_experiencia}}">Saiba Mais</a>
                    </div>
                </div>
            </div>

@endforeach

@foreach ($prod17 as $p17 )

        <div class="cardexp esquerdaexp">
            <div class="frontexp">
                <img src="{{$p17->imagem}}" alt="imagem de {{$p17->nome}}">
            </div>
            <div class="backexpe">
                <div class="backcontentexp esquerdaexp">
                    <h2 class="ttexpintern">{{$p17->nome}}</h2>
                    <span>{{$p17->descricao}}</span>
                    <div class="btnsaibaexp">
                        <a href="/produtos/{{$p17->id_experiencia}}">Saiba Mais</a>
                    </div>
                </div>
            </div>

@endforeach

@foreach ($prod18 as $p18 )
 <div class="cardexp meioexp">
        <div class="frontexp">
            <img src="{{$p18->imagem}}"" alt="imagem de {{$p18->nome}}">
        </div>
        <div class="backexpd">
            <div class="backcontentexp meioexp">
                <h2 class="ttexpintern">{{$p18->nome}}</h2>
                <span>{{$p18->descricao}}</span>
                <div class="btnsaibaexp">
                    <a href="/produtos/{{$p18->id_experiencia}}">Saiba Mais</a>
                </div>
            </div>
        </div>
    </div>
@endforeach

<script src="scripts/sliderExperiencias.js"></script>
</section>
@endsection
