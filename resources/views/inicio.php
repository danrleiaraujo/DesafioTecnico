<php <!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Página para cadastro de membros do EcompJr.">
        <title>EcompJr - Cadastrar Membro</title>
        <link rel="shortcut icon" href="Icone.ico" type="image/x-icon">
        
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
        <section class="introducao">
            <div class="tituloIntroducao">
                <h1 class="tituloIntroducao1">Seja bem vindx ao Ecomp</h1>
                <h1 class="tituloIntroducao2">Jr</h1>
            </div>
            <h2 class="subtituloIntroducao">Quem Somos?</h2>
            <h4 class="textoIntroducao">Empresa Júnior de Engenharia de Computação, composta por alunos do curso da Universidade Estadual de Feira de Santana, que promove impactos positivos em micro e pequenas empresas por meio de soluções tecnológicas. Fundada em 2007, a EcompJr atualmente participa ativamente do propósito que envolve ser Movimento Empresa Júnior. A empresa promove uma vivência empresarial estratégica para estudantes interessados em liderar a mudança no atual cenário brasileiro.</h4>
        </section>
        <section class="filosofia">
            <div class="missao">
                <h2 class="filosofiaTitulo">Missão</h2>
                <h4 class="filosofiaTexto">Através da vivência empresarial e trabalho em equipe, formar profissionais inovadores, comprometidos e capazes de vencer desafios futuros</h4>
            </div>
            <div class="valores">
                <h2 class="filosofiaTitulo">Valores</h2>
                <h4 class="filosofiaTexto">Ser uma empresa que realiza projetos de impacto, mais conectada ao movimento empresa júnior e com grande reconhecimento dentro e fora da universidade.</h4>
            </div>
            <div class="visao">
                <h2 class="filosofiaTitulo">Visão</h2>
                <h4 class="filosofiaTexto">Os valores de uma empresa guiam a conduta da mesma, portanto a EcompJr. baseia-se nos seguintes valores: Protagonismo, Cooperatividade, Assiduidade, Resiliência, Constância em resultados, Evolução com os erros, Conexão com o Movimento, Foco na Qualidade, Ética e Empatia.</h4>
            </div>
        </section>
        </main>

        <footer class="rodape">
            <img src="images/logomarca.png" alt="EcompJr" height="100px">
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
        margin-top: 60px;
        display: flex;
        flex-direction: column;
        min-height: 97vh;
        min-width: auto;
        align-items: center;
        justify-content: center;
    }
    .introducao{
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .tituloIntroducao{
        display: flex;
        padding-bottom: 20px;
    }
    .tituloIntroducao1{
        color: #FFFFFF;
        font-family: 'Righteous', cursive;
        font-weight: 400;
        font-size: 40px;
    }
    .tituloIntroducao2{
        color:rgba(29, 111, 183, 1);
        font-family: 'Righteous', cursive;
        font-weight: 400;
        font-size: 40px;
    }
    .subtituloIntroducao{
        color:rgba(29, 111, 183, 1);
        font-family: 'Righteous', cursive;
        font-weight: 400;
        font-size: 40px;
        padding-bottom: 10px;
    }
    .textoIntroducao{
        padding-left: 10rem;
        padding-right: 10rem;
        text-align: justify;
        font-family: 'Sarala', sans-serif;
        color: #FFFFFF;
        font-size: 13px;
    }
    .filosofia{
        display: flex;
        flex-direction: row;
        align-content: space-between;
        margin: 10px;
    }
    .missao{
        display: flex;
        text-align: justify;
        justify-content: space-around;
        background: rgba(194, 220, 238, 1);
        max-width: 350px;
        min-width: 10vw;
        min-height: 10vh;
        box-shadow: 5px 5px 15px rgba(0, 0, 0, 0,2) ;
        border-radius: 8px;
        padding: 1rem;
        flex-direction: column;
        align-items: center;
    }
    .valores{
        display: flex;
        text-align: justify;
        justify-content: space-around;
        background: rgba(194, 220, 238, 1);
        max-width: 350px;
        min-width: 10vw;
        min-height: 10vh;
        box-shadow: 5px 5px 15px rgba(0, 0, 0, 0,2) ;
        border-radius: 8px;
        padding: 1rem;
        flex-direction: column;
        align-items: center;
    }
    .visao{
        display: flex;
        text-align: justify;
        justify-content: space-around;
        background: rgba(194, 220, 238, 1);
        max-width: 350px;
        min-width: 10vw;
        min-height: 10vh;
        box-shadow: 5px 5px 15px rgba(0, 0, 0, 0,2) ;
        border-radius: 8px;
        padding: 1rem;
        flex-direction: column;
        align-items: center;
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