<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ProgQuiz | Quiz</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link href="http://fonts.cdnfonts.com/css/press-start-2p" rel="stylesheet">

<style type="text/css">
    
body {
    margin: 2%;
background-image: url('https://wallpaperaccess.com/full/3401961.png');
}
</style>

</head>
<body>

<a href="home.php">
<header class="progquiz">
            <img src="https://i.ibb.co/TYn513S/progquiz.png">
        </header>
</a>   
   <!-- start Quiz button -->

    <div class="start_btn"><button>Começar quiz</button></div>

    <!-- Info Box -->
    <div class="info_box">
        <div class="info-title"><span>Regras do Quiz</span></div>
        <div class="info-list">
            <div class="info">1. Você tem apenas <span>15 segundos</span> para responder cada questão.</div>
            <div class="info">2. Uma vez respondida, a questão não pode ser respondida novamente.</div>
            <div class="info">3. Você não deve sair do quiz enquanto o responde.</div>
            <div class="info">4. A sua pontuação será com base no número de acertos.</div>
        </div>
        <div class="buttons">
            <button class="quit">Sair</button>
            <button class="restart">Continuar</button>
        </div>
    </div>

    <!-- Quiz Box -->
    <div class="quiz_box">
        <header>
            <div class="title">
                <img src="https://i.ibb.co/TYn513S/progquiz.png">
            </div>
            <div class="timer">
                <div class="time_left_txt">Tempo restante</div>
                <div class="timer_sec">15</div>
            </div>
            <div class="time_line"></div>
        </header>
        <section>
            <div class="que_text">
                <!-- Here I've inserted question from JavaScript -->
            </div>
            <div class="option_list">
                <!-- Here I've inserted options from JavaScript -->
            </div>
        </section>

        <!-- footer of Quiz Box -->
        <footer>
            <div class="total_que">
                <!-- Here I've inserted Question Count Number from JavaScript -->
            </div>
            <button class="next_btn">Próximo</button>
        </footer>
    </div>

    <!-- Result Box -->
    <div class="result_box">
        <div class="icon">
            <i class="fas fa-crown"></i>
        </div>
        <div class="complete_text">Você completou o quiz!</div>
        <div class="score_text">
            <!-- Here I've inserted Score Result from JavaScript -->
        </div>
        <div class="buttons">
            <button class="restart">Jogar de Novo</button>
            <button class="quit">Sair</button>
        </div>
    </div>

    <!-- Inside this JavaScript file I've inserted Questions and Options only -->
    <script src="js/questions.js"></script>

    <!-- Inside this JavaScript file I've coded all Quiz Codes -->
    <script src="js/script.js"></script>

</body>
</html>