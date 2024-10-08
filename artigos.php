<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="all.css">
    <link rel="stylesheet" href="Estilos/style.css">
    <title>Artigos</title>
</head>
<body class="BodyArtigos">
    <header>
        <a href="index.php" class="img"></a>
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
            <a href="login.php">Entrar</a> 
            <a href="Cadastramento.php" class="input">INSCREVA-SE</a>
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
    <Section class="Artigos">
        <div class="img">
            <img src="img/Conheca-nossos-cursos_Escola-de-Pessoas.png" alt="">
        </div>
        <div>
            <p>Seja um dos nossos estudantes e venha conhecer
                um mundo cheio de conhecimentos, sabedoria e disciplina
                então não perca tempo abraça já essa oportunidade de seres
                independente, tanto financeiramente como intelectualmente
                inscreva-se já!
            </p>
            <a href="">Saber mais</a>
        </div>
    </Section>
    <!--rodape-->
    <footer>
        <div class="center">
            <div class="img-logotipo">
                <a href="index.html" class="img"></a>
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