
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&family=Press+Start+2P&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/cadastro.css">
<title>ProgQuiz | Cadastro</title>
</head>

<body>

    <a href="index.php">
        <header>
            <h1>ProgQuiz</h1>
        </header>
    </a>

    <main>
        
        <form action="cadastroAction.php" method="post">
           
           <header>
            <h1 class="cadastro_titulo">Cadastro</h1>
        </header>

            <section class="inputs-container">

                
                <div class="password-container">
                    <i class="fa fa-user" aria-hidden="true"></i>
                    <input name="txtUsuario" type="email" placeholder="Usuário">
                </div>  
                
                <div class="password-container">
                    <i class="fa fa-envelope"></i>
                    <input name="txtEmail" type="email" id="field-email" class="field-email" placeholder="example@gmail.com">
                </div>
            
            <div class="password-container">
                    <input name="txtSenha" type="password" id="field-password" class="field-password" placeholder="******">
                    <i class="fa fa-lock"></i>
                </div>

            </section>

            <section class="password-infos">
                <div>
                    <input type="checkbox">
                    <span>Lembrar senha?</span>
                </div>
                
            </section>


            <a href="index.php" class="btn-login">Cadastrar</a>


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
                <span>Já tem uma conta? <a href="login.php"> Faça login</a></span>
            </footer>

        </form>
    </main>

    <script src="https://kit.fontawesome.com/5f56dfe06a.js" crossorigin="anonymous"></script>

</body>

</html>