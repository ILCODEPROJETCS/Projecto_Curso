<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="Estilos/style.css">
    <link rel="stylesheet" href="all.css">
    <title>Página Inicial</title>
</head>
<body>
    <header>
        <a href="index.html" class="img"></a>
        <div class="itens">
            <nav>
                <ul>
                    <li><a href="index.php"><s><i class="fa-solid fa-house"></i></s> Página Inicial</a></li>
                    <li><a href=""><s><i class="fa-solid fa-building"></i></s> Empresa</a></li>
                    <li><a href=""><s><i class="fa-brands fa-creative-commons-nd"></i></s>  Nossos Serviços</a></li>
                    <li>
                        <a href=""><s><i class="fa-solid fa-newspaper"></i></s> Publicações <s><i class="fa-solid fa-caret-down"></i></s></a>
                        <ul>
                            <li >
                                <a href=""><s><i class="fa-solid fa-coins"></i></s>  Literacia Financeira <s><i class="fa-solid fa-caret-down"></i></s></a>
                                <ul>
                                    <li><a href="">Calculadora</a></li>
                                    <li><a href="">Informações do nosso mercado</a></li>
                                </ul>
                            </li>
                            <li><a href=""><s><i class="fa-solid fa-coins"></i></s>  Notícias</a></li>
                        </ul>
                    </li>
                    <li><a href="curso.php"><s><i class="fa-solid fa-video"></i></s> Cursos</a></li>
                </ul>
            </nav>
            <input type="search" placeholder="ESCREVA AQUI">
            <input type="button" value="PESQUISAR">
            <button onclick="MostrarMenu()" id="btn1">
                <s><i class="fa-solid fa-bars"></i></s>
            </button>
        </div>
    </header>

    <!--Menu de Opções quando a tela for pequena-->
    <nav class="mobile_menu">
        <div class="itens-in">
            <a href="login.php">Entrar</a> 
            <a href="Cadastramento.php" class="input">INSCREVA-SE</a>
        </div>
        <ul>
            <li><a href="index.php"><s><i class="fa-solid fa-house"></i></s> Página Inicial</a></li>
            <li><a href=""><s><i class="fa-solid fa-building"></i></s> Empresa</a></li>
            <li><a href=""><s><i class="fa-brands fa-creative-commons-nd"></i></s>  Nossos Serviços</a></li>
            <li>
                <a href=""><s><i class="fa-solid fa-newspaper"></i></s> Publicações <s><i class="fa-solid fa-caret-down"></i></s></a>
                <ul>
                    <li >
                        <a href=""><s><i class="fa-solid fa-coins"></i></s>  Literacia Financeira <s><i class="fa-solid fa-caret-down"></i></s></a>
                        <ul>
                            <li><a href="">Calculadora</a></li>
                            <li><a href="">Informações do nosso mercado</a></li>
                        </ul>
                    </li>
                    <li><a href=""><s><i class="fa-solid fa-coins"></i></s>  Notícias</a></li>
                </ul>
            </li>
            <li><a href="curso.php"><s><i class="fa-solid fa-video"></i></s> Cursos</a></li>
        </ul>
    </nav>
    <section id="Apresentacao">
        <div class="main">
            <div>
                <h2>Domine a Gestão de <br>
                    Pessoas de Ponta a Ponta <br>
                    e <b>Alavanque sua carreira</b>
                </h2>
                <a href="login.php">Começar</a>
            </div>
            <div id="imagem">
                <img src="img/Conheca-nossos-cursos_Escola-de-Pessoas.png" alt="">
            </div>
        </div>
    </section>
    <!--Link para o WhatsApp-->
   <div class="link-whatsApp" target="_blank">
        <a href="https://api.whatsApp.com/send?phone=956126114" title="Quero falar com o atendimento" target="_blank"><i class="fab fa-whatsapp"></i></a>
    </div>

    <!--Slider de Noticias-->

    <section class="slider">
        
        <div class="slides">
            <!--Radio Buttons-->
            <input type="radio" name="radio-btn" id="radio1">
            <input type="radio" name="radio-btn" id="radio2">
            <input type="radio" name="radio-btn" id="radio3">
            <input type="radio" name="radio-btn" id="radio4">

            <!--Slider Imagens-->

            <div class="slide-first slide">
                <img src="img/finance.png" alt="Noticias--1">
            </div>
            <div class="slide slide-seg">
                <img src="img/Urso_Touro.png" alt="Noticias--2">
            </div>
            <div class=" slide slide-ter">
                <img src="img/finance.png" alt="Noticias--3">
            </div>
            <div class="slide slide-quart">
                <img src="img/Urso_Touro.png" alt="Noticias--4">
            </div>

            <!--Navegaton Auto-->
            <div class="navegation-auto">
                <div class="auto-btn1"></div>
                <div class="auto-btn2"></div>
                <div class="auto-btn3"></div>
                <div class="auto-btn4"></div>
            </div>
            
        </div>
        <div class="manual-navegation">
            <label for="radio1" class="manual-btn"></label> 
            <label for="radio2" class="manual-btn"></label> 
            <label for="radio3" class="manual-btn"></label> 
            <label for="radio4" class="manual-btn"></label>  
        </div>

    </section>
    <!--Apresentação -->
    <section id="Cadastrar">
        <div>
            <p>Seja um dos nossos estudantes e venha conhecer um mundo cheio de conhecimentos, 
                sabedoria e disciplina, então não perca tempo abraça já essa oportunidade de seres independente,
                tanto financeiramente como intelectualmente, inscreva-se já!
            </p>
            <a href="Cadastramento.php">Cadastrar-se</a>
        </div>
        <div class="img">
            <img src="img/mercado.png" alt="Logotipo">
        </div>
    </section>

    <!--rodape-->
    <footer>
        <div class="center">
            <div class="img-logotipo">
                <a href="index.php" class="img"></a>
            </div>
            <div class="links-uteis">
                <p>[ LINK ÚTEIS  ]</p>
                <a href="https://www.bna.ao" target="_blank"> > BNA</a>
                <a href="https://www.bodiva.ao" target="_blank"> > BODIVA</a>
                <a href="https://www.cmc.ao" target="_blank"> > CMC</a>
            </div>
        </div>
        <div class="redes-sociais">
            <div class="redes">
                <ul>
                    <li><a href=""><i class="fab fa-facebook"></i></a></li>
                    <li><a href=""><i class="fab fa-twitter"></i></a></li>
                    <li><a href=""><i class="fab fa-snapchat"></i></a></li>
                    <li><a href=""><i class="fab fa-instagram"></i></a></li>
        
                </ul>
            </div>
            <p> &copy; ILCODE 2024 </p>
        </div>
    </footer>
    <script src="all.js"></script>
    <script src="script.js"></script>
</body>
</html>