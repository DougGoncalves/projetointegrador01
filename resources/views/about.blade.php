@extends('layouts.master_layout')
@section('conteudo')
<div class="parallaxbg">
    <section id="sobre" class="sobre">
        <div class="sobreBlendTour">
            <article>
                <h1>Sobre</h1>
                <p>O ano era 2019 e enquanto a maioria das pessoas estavam em suas casas as quintas-feiras e dormindo até tarde no sábado após sua balada na noite anterior, um grupo de estudantes fazia diferente, com o desejo de aprender a programar e tornarem-se desenvolvedores Web Fullstack começaram sua jornada na Digital House. Em busca do tão aguardado certificado e todo conhecimento a ele agregado eles aceitaram o desafio de entregar um projeto utilizando esse conhecimento. Alinhado a experiencia de cada um assim nasceu a ideia de um site de e-commerce de turismo, não para venda de passagens e hospedagens e sim para venda de experiências completas, juntando turismo, gastronomia, história, cultura e muita aventura para seus clientes. Com tudo isso em mente surge o Blend Tour, site especializado em fornecer as melhores experiências  nacionalmente, internacionalmente e ajudar a difundir o turismo e atividades do Brasil, sua rica cultura, gastronomia, natureza e povo.</p>
            </article>
            <figure>
                <img src="Assets/brasilia.jpg" alt="Entardecer em Brasilia">
            </figure>

        </div>
        <h1 id="eqpHeading">Equipe</h1>
        <section id="equipe" class="equipeBlendTour">
            <div class="cardPessoa">
                <figure>
                </figure>
                <article>
                    <h4>Carina Costa</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus nobis sit iusto
                        perspiciatis.</p>
                </article>
            </div>
            <div class="cardPessoa">
                <figure>
                </figure>
                <article>
                    <h4>Diego Ramos</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus nobis sit iusto
                        perspiciatis.</p>
                </article>
            </div>
            <div class="cardPessoa">
                <figure>
                </figure>
                <article>
                    <h4>Dirceu Santana</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus nobis sit iusto
                        perspiciatis.</p>
                </article>
            </div>
            <div class="cardPessoa">
                <figure>
                </figure>
                <article>
                    <h4>Douglas Gonçalves</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus nobis sit iusto
                        perspiciatis.</p>
                </article>
            </div>
            <div class="cardPessoa">
                <figure>
                </figure>
                <article>
                    <h4>Mario Angelozzi</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus nobis sit
                        iusto perspiciatis.</p>
                </article>
            </div>
            <div class="cardPessoa">
                <figure>
                </figure>
                <article>
                    <h4>Wagner Carvalho</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus nobis sit
                        iusto perspiciatis.</p>
                </article>
            </div>
        </section>
    </section>
</div>
<section id="contato">
    <h1>Contato</h1>
    <div class="areaContato">
            <form id="contatoForm">
                <label for="nomeContato">Nome</label>
                <input type="text" id="nomeContato" name="nomeContato">
                <label for="emailContato">E-mail</label>
                <input type="email" id="emailContato" name="emailContato">
                <label for="contatoMessage">Mensagem</label>
                <textarea id="contatoMessage" name="contatoMessage"></textarea>
                <button class="btnContato">Enviar</button>
            </form>
        <div class="endereco">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3656.051366938046!2d-46.67744548452066!3d-23.60249066899866!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce50ab7feb4519%3A0x739f0ddb0439cf94!2sDigital%20House%20S%C3%A3o%20Paulo!5e0!3m2!1sen!2sbr!4v1571245165715!5m2!1sen!2sbr"
                width="480" height="360" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
        </div>
    </div>
</section>
<section id="faq">
    <h1>Faq</h1>
    <button class="accordion">Não recebi minha confirmação de reserva, o que devo fazer?</button>
    <div class="panel">
        <p>Primeiramente sugerimos que verifique em seu e-mail se o mesmo não foi salvo no SPAM, se mesmo assim não o encontrar entre em contato conosco.</p>
    </div>

    <button class="accordion">Posso alterar a data da minha experiencia após já ter agendado a mesma?</button>
    <div class="panel">
        <p>Sim, para tal basta acessar seu cadastro e histórico de pedidos, lembrando que a alteração só pode ser realizada com no minimo 7 dias de antecedência a data da experiencia.</p>
    </div>

    <button class="accordion">Posso customizar minha experiencia incluindo atividades e locais diferentes?</button>
    <div class="panel">
        <p>Talvez, preciso confirmar com o Grupo Projeto Integrador 01!</p>
    </div>

    <button class="accordion">Porque comprar com a Blend Tour se posso fechar atividades diretamente nos locais/fornecedores?</button>
    <div class="panel">
        <p>Não apenas te mantemos informados de ofertas imperdíveis, melhores combos e como também seremos seu ponto único de contato durante toda sua viagem, dando todo o suporte necessário para que sua experiencia seja inesquecível.</p>
    </div>

    <button class="accordion">Sou estrangeiro, posso viajar para o Brasil com um passaporte com validade menor que 6 meses?</button>
    <div class="panel">
        <p>Não, é necessario ter um passaporte com validade de pelo menos 6 meses para viajar pelo Brasil vindo do exterior.</p>
    </div>

    <button class="accordion">Posso alterar o nome dos participantes após já ter agendado minha experiencia?</button>
    <div class="panel">
        <p>Sim, você poderá gerenciar suas experiencias ao logar no portal e acessando seus pedidos.</p>
    </div>

    <button class="accordion">E se eu precisar cancelar?</button>
    <div class="panel">
        <p>Não se preocupe, ficaremos muito chateados caso você não possa comparecer mas entendemos que imprevistos acontecem. Se o cancelamento for feito com mais de 30 dias de sua data agendada, reembolsaremos todos os valores.</p>
    </div>

    <button class="accordion">Que horas devo chegar no ponto de encontro de minha experiencia?</button>
    <div class="panel">
        <p>Os horários variam de experiencia para experiencia e bem como de local para local. Usualmente sugerimos que chegar no minimo com 30 minutos de antecedência.</p>
    </div>


   <script src="scripts/faq.js"></script>

</section>
@endsection
