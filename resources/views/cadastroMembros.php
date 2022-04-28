<php <!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Página para cadastro de membros do EcompJr.">
        <title>EcompJr - Cadastrar Membro</title>
        <link rel="shortcut icon" type="image/x-icon" href="images/Icone.ico">
        
    </head>

    <body>
        <header class="cabecalho">
            <img class="iconeEcompJr" src="images/logo.svg" alt="icone da EcompJr">
            <nav class="linkCabecalho">
                <a class="linkCabecalhoItem" href="">Início</a>
                <a class="linkCabecalhoItem" href="">Cadastrar Membros</a>
                <a class="linkCabecalhoItem" href="">Membros</a>
                <a class="linkCabecalhoItem" href="">Sair</a>
            </nav>
        </header>

        <main class="conteudo">
            <h1 class="tituloConteudo">Cadastro de novos Membros</h1>
            <section class="conteudo-principal">
                <form class="cadastrar" action="">
                    <h5 class="itensForm">Nome do membro:</h5>
                    <div class="input-field">
                        <input type="text" name="nome" id="nome" placeholder="Coloque o Nome">
                        <div class="underline"></div>
                    </div>
                    <h5 class="itensForm">Cargo:</h5>
                    <div class="input-field">
                        <input type="text" name="Cargo" id="Cargo" placeholder="Coloque o Cargo">
                        <div class="underline"></div>
                    </div>
                    <input class="botaoCadastrar" type="submit" value="Cadastrar">
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
            display:flex;
            position:fixed;
            width:100%;
            top:0;
            left:0;
            background: linear-gradient(to right,#516A9B, #24232F);
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
            height: 42px;
        }   

        .conteudo{
            display: flex;
            flex-direction: column;
            min-height: 97vh;
            min-width: auto;
            align-items: center;
            align-self: auto;
            justify-content: center;
        }
        .tituloConteudo{
            color: #FFFFFF;
            font-family: 'Righteous', cursive;
            font-weight: 400;
            font-size: 40px;
            padding-bottom: 20px;
        }
        .conteudo-principal{
            background: rgba(194, 220, 238, 1);
            max-width: 350px;
            min-width: 25vw;
            min-height: 20vh;
            box-shadow: 5px 5px 15px rgba(0, 0, 0, 0,2) ;
            border-radius: 8px;
            padding: 1rem;
        }
        .cadastrar{
            margin: 15px;
            display: flex;
            flex-direction: column;
            align-items: stretch;
        }
        
        .itensForm{
            font-family: 'Sarala', sans-serif;
            color: rgba(81, 106, 155, 1);
            display: flex;
            font-size: 13px;
        }
        .input-field{
            display: flex;
            flex-direction: column;
            justify-content:center;
            padding: 3px;
        }
        .input-field input{
            display: flex;
            outline: none;
            font-size: 0,9rem;
            border-radius: 3px;
            padding: 0.5rem;
            background: #516A9B;
            margin-bottom: 0.3rem;
            color: #FFFFFF;
        }
        .input-field input::placeholder{
            color: #FFFFFF;
        }
        form input[type="submit"]{
            padding: 0.5rem;
            background: linear-gradient(to left, rgba(81, 106, 155, 1),rgba(81, 106, 155, 0));
            cursor: pointer;
            color: #FFFFFF;
            font-size: 0.9rem;
            font-weight: 300;
            border-radius: 4px;
            transition: all 0.3s ease;
        }
        form input[type="submit"]:hover{
            letter-spacing: 0.5px;
            background: linear-gradient(to right,rgba(81, 106, 155, 1),rgba(81, 106, 155, 0));
        }

        .rodape{
            background: linear-gradient(to right,#516A9B, #24232F);
            border-top: 0.4px solid #FFFFFF;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 10px;
        }
    </style>

</html>