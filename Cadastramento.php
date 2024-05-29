<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="all.css">
    <link rel="stylesheet" href="style.css">
    <title>Cadastramento</title>
</head>
<body>
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
            <button onclick="MostrarMenu()" id="btn1">
                <s><i class="fa-solid fa-bars"></i></s>
            </button>
        </div>
        
    </header>
    <!--Menu de Opções quando a tela for pequena-->
    <nav class="mobile_menu">
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
    <section id="Registro">
        <section class="all">
            <div class="Registra-se">
                <h2>Registra-se</h2>
                <p>Já tenho Cadastro. <a href="login.php">Fazer Login</a></p>
            </div>
            <form action="depoisCadastramento.php" method="" id="cadastrar" >
                <div class="inputs">
                    <div>
                        <label for="nome">Nome:</label>
                        <input type="text" name="nome" id="nome" placeholder="Digite o seu nome"> 
                        <label for="sobrenome">Sobrenome:</label>
                        <input type="text" name="sobrenome" id="sobrenome" placeholder="Digite o seu sobrenome">
                        <label for="email">E-mail:</label>
                        <input type="email" name="email" id="email" placeholder="Digite o seu e-mail">
                    </div>
                    <div>
                        <label for="sexo">Informe o seu género</label>
                        <div class="radios">
                            <label for="sexo">Masculino</label>
                            <input type="radio" name="sexo" id="sexo" value="Masculino">
                            <label for="sexo">Femenino</label>
                            <input type="radio" name="sexo" id="sexo" value="Femenino">
                        </div>
                        <label for="senha">Senha:</label>
                        <input type="password" name="senha" id="senha" placeholder="Digite a sua senha (8 dígitos)">
                        <label for="senha_confirm">Confirmar a senha:</label>
                        <input type="password" name="senha_confirm" id="senha_confirm" placeholder="Confirme a sua senha">
                    </div>
                </div>
                <div class="verf">
                    
                    <div>
                        <div class="in">
                            <input type="checkbox" name="checar" id="checar">
                            <div>
                                <a href=""><b>Ver política de privacidade</b></a>
                                <p>E concordo que li e aceito a política de privacidade</p>
                            </div>
                        </div>
                        <input type="submit" value="INSCREVER-SE">
                    </div>
                </div>
            </form>
    
        </section>
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

    <script src="script.js"></script>
    <script src="Cadastramento.js"></script>
    <script src="all.js"></script>
</body>
</html>