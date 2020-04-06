</main>
<footer>
        <a href="/">
        <img src="{{asset('../../Galeria/logos/logofooter.png')}}" alt="logofooter" id="logofooter">
        </a>
    <div>
        <ul class="listafooter">
            <li ><a style="color:white;font-size:19px;text-decoration: none" href="/about">Sobre</a>
                <ol class="sublista">
                    <li><a style="color:white;text-decoration: none" href="/about#equipe">Equipe</a></li>
                    <li><a style="color:white;text-decoration: none"href="/about#contato">Contato</a></li>
                    <li><a style="color:white;text-decoration: none" href="/about#faq">FAQ</a></li>
                </ol>
            </li>
            <li ><a style="color:white;font-size:19px;text-decoration: none" href="/experiencias">Experiências</a>
                <ol class="sublista">
                    <a href="/experiencias#aventura" style="color:white;text-decoration: none">
                    <li> Aventura</li>
                    </a>
                    <a href="/experiencias#cidades" style="color:white;text-decoration: none">
                    <li> Cidades </li>
                    </a>
                    <a href="/experiencias#gastronomia" style="color:white;text-decoration: none">
                    <li> Gastronomia</li>
                    </a>
                    <a href="/experiencias#cultural" style="color:white;text-decoration: none">
                    <li> Histórico Cultural</li>
                    </a>
                    <a href="/experiencias#natureza" style="color:white;text-decoration: none">
                    <li> Natureza</li>
                    </a>
                    <a href="/experiencias#vida_noturna" style="color:white;text-decoration: none">
                    <li> Vida Noturna</li>
                    </a>
                </ol>
            </li>
            <li  ><a style="color:white;font-size:19px;text-decoration: none" href="/conheca">Conheça</a>
                <ol class="sublista">
                    <a href="/conheca#obrasil" style="color:#fff;text-decoration: none;">
                    <li> O Brasil</li>
                    </a>
                    <a href="/conheca#historia" style="color:#fff;text-decoration: none;">
                    <li> História</li>
                    </a>
                    <a href="/conheca#destinos" style="color:#fff;text-decoration: none;">
                    <li> Destinos</li>
                    </a>
                </ol>
            </li>
            <li ><a style="color:white;font-size:19px;text-decoration: none" href="/suaviagem">Sua Viagem</a>
                <ol class="sublista">
                    <a href="/suaviagem#oclima" style="color:#fff;text-decoration: none;">
                   <li> O Clima </li>
                    </a>
                    <a href="/suaviagem#comochegar" style="color:#fff;text-decoration: none;">
                    <li> Como Chegar</li>
                    </a>
                    <a href="/suaviagem#imperdivel" style="color:#fff;text-decoration: none;">
                    <li> Imperdível </li>
                    </a>
                </ol>
            </li>
            <li  ><a style="color:white;font-size:19px;text-decoration: none" href="/register">Cadastre-se</a></li>
            <li ><a style="color:white;font-size:19px;text-decoration: none"  href="/login">Login</a></li>
        </ul>
    </div>
        <div class="social">
            <h2 id="cta">Siga-nos!</h2>
        <ul class="redessociais">
           <li>
               <a href="https://facebook.com">
               <img src="{{asset('../../Assets/Icon/SocialMedia/facebook.svg')}}" alt="facebook">
               </a>
          </li>
           <li>
               <a href="https://instagram.com/blendtour">
               <img src="{{asset('../../Assets/Icon/SocialMedia/instagram.svg')}}" alt="instagram">
            </a>
            </li>
           <li>
               <a href="https://pinterest.com">
               <img src="{{asset('../../Assets/Icon/SocialMedia/pinterest.svg')}}" alt="pinterest">
            </a>
            </li>
           <li>
               <a href="https://twitter.com">
               <img src="{{asset('../../Assets/Icon/SocialMedia/twitter.svg')}}" alt="twitter">
            </a>
            </li>
           <li>
                <a href="http://youtube.com">
                <img src="{{asset('../../Assets/Icon/SocialMedia/youtube.svg')}}" alt="youtube">
                </a>
           </li>
        </ul>
    </div>
    <p id="copy" >Copyright &copy; Blend Tour</p>
</footer>

<!-- Modal -->
<div id="modal-newsletter" class="container-modal">
    <div class="modal">
    <button id="fechar" class="fechar">X</button>
        <div style="text-align: center;">
            <h3 class="titulo-modal">Inscreva-se para receber as melhores ofertas</h3>
            <input type="email" name="email" class="input" placeholder="Digite seu e-mail" autofocus>
            <input type="button" value="Enviar" class="button">
        </div>
    </div>
</div>
<!-- Fim Modal -->

<script src="{{ asset('scripts/modal.js') }}"></script>

</body>
</html>
