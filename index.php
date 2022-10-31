<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&family=Press+Start+2P&display=swap"
        rel="stylesheet">


    <title>ProgQuiz - Trabalho de Conclusão de Curso</title>
</head>

<body>
    <div class="container">

        <nav>
            <ul>
                <a href="login.php">
                    <li>Entrar</li>
                </a>
                <a href="cadastro.php">
                    <li>Cadastrar</li>
                </a>
            </ul>
        </nav>


        <header>
            <img src="https://geovanaborba.github.io/TCC-website/src/assets/imgs/undraw_version_control_re_mg66.svg"
                alt="imagem de avatar masculino sentado com um notebook no colo">
            <h1>ProgQuiz</h1>
        </header>

        <main>
            <div class="buttons">


                <!-- Trigger/Open The Modal -->
                <button id="btn-modal">Como jogar</button>

                <!-- The Modal -->
                <div id="myModal" class="modal">

                    <!-- Modal content -->
                    <div class="modal-content">
                        <span class="close">&times;</span>
                        <h1>Como jogar??</h1>
                        <br>
                        <p>É necessário realizar login para que seu ranking e pontuações fiquem salvas. </p>
                        <p>Dessa maneira, você pode aprender e revisar tudo o que já viu quando voltar! :) </p>
                        <br>
                        Aproveite e preencha seu perfil para conhecer novas pessoas e trocar conhecimentos!
                        <br>
                        Bom aprendizado e divirta-se!!
                    </div>
                </div>


                <a href="">
                    <button class="btn-pontos">Mostrar Ranking</button>
                </a>
            </div>
        </main>

        <section class="acesso">

            <a href="https://www.apple.com/br/app-store/" target="_blank">
                <img class="app-store" src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/3c/Download_on_the_App_Store_Badge.svg/2560px-Download_on_the_App_Store_Badge.svg.png"
                    alt="botão faça download na App Store"></a>

            <a href="https://play.google.com/store/games?utm_source=latam_Med&utm_medium=hasem&utm_content=Jul1520&utm_campaign=Evergreen&pcampaignid=MKT-FDR-latam-br-1002290-Med-hasem-py-Evergreen-Jul1520-Text_Search_BKWS-28432345789&gclid=CjwKCAjw7p6aBhBiEiwA83fGugbTKBppJ8kOtxO3xg0kzHshHG0x2YBwNq1Y035I6jNupZOU22KZ4BoCJrgQAvD_BwE&gclsrc=aw.ds"
                target="_blank">
                <img class="play-store" src="https://play.google.com/intl/pt-BR/badges/static/images/badges/pt-br_badge_web_generic.png"
                    alt="botão faça download na Play Store"></a>
        </section>

    </div>
    <footer>

        <div class="rodape">
            <div class="credito">
                <p>Página criada como parte do Trabalho de Conclusão de Curso do curso técnico de Desenvolvimento de
                    Sistemas da
                    ETEC. </p>
                <br>
                <p>Desenvolvido com <i class="fa-solid fa-heart fa-beat"></i> pelo Grupo 02. </p>
            </div>

            <div class="integrantes">
                <h3>Integrantes do TCC:</h3>
                <p>Arthur Luna</p>
                <p>Bruno Hideo</p>
                <p>Eduardo Guerts</p>
                <p>Geovana Borba</p>
                <p>Naíra Ferraz</p>
            </div>
        </div>
    </footer>

</body>

<script src="https://kit.fontawesome.com/5f56dfe06a.js" crossorigin="anonymous"></script>
<script src="./src/js/modal.js"></script>


<IfModule mod_dir.c>
      DirectoryIndex index.html index.cgi index.pl index.php index.xhtml index.htm
</IfModule>


</html>