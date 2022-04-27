<php <!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Página de login para membros do EcompJr.">
        <title>EcompJr - Login</title>
        <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">

    </head>

    <body>

        <header class="cabecalho">
            <img class="iconeEcompJr" src="images/logo.svg" alt="icone da EcompJr">
            <nav class="linkCabecalho">
                <a class="linkCabecalhoItem" href="">Login</a>
                <a class="linkCabecalhoItem" href="">Cadastro</a>
            </nav>
        </header>

        <main class="conteudo">
            <section class="conteudo-principal">
                <div class="conteudo-principal-titulo">
                    <h1 class="tituloConteudo">Login</h1>
                    <img class="logoEcompJr" src="images\logomarca.png" alt="Logo EcompJr" height="100">
                </div>
                <form class="login" action="">
                    <a class="link" href="">Criar conta</a>
                    <div class="input-field">
                        <input type="text" name="usuario" id="usuario" placeholder="Coloque Seu Usuário">
                        <div class="underline"></div>
                    </div>

                    <div class="input-field">
                        <input type="text" name="senha" id="senha" placeholder="Coloque Sua Senha">
                        <div class="underline"></div>
                    </div>
                    <input class="botaoInicar" type="submit" value="Iniciar sessão">
                    <a class="link" href="">Esqueci minha senha</a>
                </form>
            </section>
        </main>

        <footer class="rodape">
            <img src="images/EcompJr.svg" alt="EcompJr" height="40">
        </footer>

    </body>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Righteous&family=Sarala&display=swap');

        * {
            margin: 0;
            border: 0;
            padding: 0;
            box-sizing: border-box;
            text-decoration: none;
            font-family: sans-serif;
        }

        body{
            background: linear-gradient(68.15deg, #24232F 16.62%, #516A9B 85.61%);
            font-size: 100%;
        }

        .cabecalho {
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: space-between;
            padding: 10px;
            border-bottom: 0.4px solid #FFFFFF;
        }
        .linkCabecalho{
            display: flex;
            gap: 42px;
        }
        .linkCabecalhoItem{
            padding-right: 30px;
            font-family: 'Sarala', sans-serif;
            color: rgba(231, 236, 255, 1);
        }
        .iconeEcompJr{
            padding-left: 30px;
            height: 62px;
        }   


        .conteudo{
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            min-width: 100vw;
            align-items: center;
            align-self: auto;
            justify-content: center;
        }
        .conteudo-principal{
            background: rgba(194, 220, 238, 1);
            max-width: 350px;
            min-width: 10vw;
            min-height: 40vh;
            box-shadow: 5px 5px 15px rgba(0, 0, 0, 0,2) ;
            border-radius: 8px;
            padding: 1rem;
        }
        .conteudo-principal-titulo{            
            display: flex;
            flex-direction: row;
            align-items: center;
            gap: 90px;
            padding-bottom: 10px;
        }
        .login{
            display: flex;
            flex-direction: column;
            align-items: center;
            align-self: auto;
            justify-content: center;
        }
        .tituloConteudo{
            color: rgba(81, 106, 155, 1);
            font-family: 'Righteous', cursive;
        }
        .link{
            font-family: 'Sarala', sans-serif, px;
            color: rgba(81, 106, 155, 1);
        }
        
        .input-field{
            position: relative;
        }
        .input-field input{
            outline: none;
            font-size: 0,9rem;
            color:#516A9B;
        }
        .input-field input::placeholder{
            color: rgba(0, 0, 0, 0,5);
        }

        .rodape{
            border-top: 0.4px solid #FFFFFF;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 10px;
        }
    </style>

</html>