<php <!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Página de login para membros do EcompJr.">
        <title>EcompJr - Membros</title>
        <link rel="shortcut icon" href="Icone.ico" type="image/x-icon">

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
            <h1 class="titulo">Membros</h1>
            <div class="areaDaBusca">
                <div class="busca">
                    <form class="Busca" action="">
                        <h1 class="tituloConteudo">Busca</h1>
                        <div class="input-field">
                            <input type="text" name="membro" id="membro" placeholder="Coloque O Nome do Membro">
                            <div class="underline"></div>
                        </div>
                    <input class="botaoPesquisar" type="submit" value="Iniciar Pesquisa">

                    </form>
                </div>
                <div class="resultado">
                    <table border="1">
                        <thead class="topo">
                            <tr>
                                <td class="nome">Nome</td>
                                <td class="cargo">Cargo</td>
                            </tr>
                        </thead>
                        
                        <tbody>
                            <tr>
                                <enf-chefe-medicamentos-cell
                                    :nome="medicamentos.nome"
                                    :lote="medicamentos.lote"
                                    :quantidade="medicamentos.quantidade"
                                />
                            </tr>
                        </tbody>
                    </table>
            </div>
          </div>
        </main>

        <footer class="rodape">
            <img class="rodapeImagem" src="images/EcompJr.svg" alt="EcompJr" height="40">
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
        .titulo{
        color: #FFFFFF;
        font-family: 'Righteous', cursive;
        font-weight: 400;
        font-size: 40px;
        }
        .areaDaBusca{            
            background: rgba(194, 220, 238, 1);
            max-width: 350px;
            min-width: 30vw;
            min-height: 40vh;
            box-shadow: 5px 5px 15px rgba(0, 0, 0, 0,2) ;
            border-radius: 8px;
            padding: 1rem;
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
            color: #FFFFFF;
            border-radius: 3px;
            padding: 0.5rem;
            background: #516A9B;
            margin-bottom: 0.3rem;
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
        
        .busca{
            color: rgba(81, 106, 155, 1);
            font-family: 'Righteous', cursive;
            font-weight: 400;
            font-size: 20px;

        }
        .topo{
            display: flex;
            justify-content:space-between
        }
        .nome{
            color: rgba(81, 106, 155, 1);
            font-family: 'Righteous', cursive;
            font-weight: 400;
            font-size: 30px;
            padding-right: 40px;
        }
        .cargo{
            color: rgba(81, 106, 155, 1);
            font-family: 'Righteous', cursive;
            font-weight: 400;
            font-size: 30px;
        }

        .rodape{
            position: relative;
            background: linear-gradient(to right,#516A9B, #24232F);
            border-top: 0.4px solid #FFFFFF;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 10px;
        }
        
    </style>

</html>