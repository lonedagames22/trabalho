<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="css/login.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&family=Press+Start+2P&display=swap"
        rel="stylesheet">




    <title>ProgQuiz | Login</title>
</head>

<body>

    <a href="index.php">
        <header>
            <h1>ProgQuiz</h1>
        </header>
    </a>

    <main>
        <form>
           
           <header>
            <h1 class="login_titulo">Login</h1>
        </header>

           <section class="inputs-container">

                <div class="password-container"> 
                <i class="fa fa-envelope"></i> 
                <input type="email" placeholder="example@gmail.com">
                </div>

                <div class="password-container">
                    <input type="password" id="field-password" class="field-password" placeholder="******">
                    <i class="fa fa-lock"></i>
                </div>
            </section>

            <section class="password-infos">
                <div>
                    <input type="checkbox">
                    <span>Lembrar senha?</span>
                </div>
                <a href="#">Esqueceu sua senha?</a>
            </section>


            <a href="home.php" class="btn-login">Login</a>


            <section class="links-container">
                <span>Ou entre com:</span>

                <aside>
                    <a href="#"><i class="fab fa-google-plus-square google"></i></a>
                    <a href="#"><i class="fab fa-linkedin linkedin"></i></a>
                    <a href="#"><i class="fab fa-facebook-square facebook"></i></a>
                </aside>

            </section>

            <footer>
                <hr>
                <span>Não tem uma conta? <a href="cadastro.php">Cadastre-se</a></span>
            </footer>

        </form>
    </main>

    <script src="https://kit.fontawesome.com/5f56dfe06a.js" crossorigin="anonymous"></script>


</body>

</html>