<html>

<head>
    <link rel="stylesheet" href="./style.css">
</head>

<style>
    body {
        background-color: #9a44e6;
    }
</style>

<body>
    <img src="./sprites/Logo.png">
    <br>
    <h2>Karlson</h2>
    <br>
    <p>Karlson é um jogo de plataforma de ação desenvolvido pelo desenvolvedor independente Dani. O jogo apresenta um
        estilo de arte simples e minimalista, mas com jogabilidade rápida e intensa.

        O objetivo do jogo é controlar um personagem chamado Karlson enquanto ele corre e pula através de uma série de
        níveis desafiadores, coletando leite no caminho. O jogador deve evitar obstáculos, inimigos e armadilhas
        enquanto tenta chegar ao final de cada nível.

        O jogo apresenta uma física realista que adiciona um elemento de desafio extra ao jogo, já que o jogador deve
        ajustar sua jogabilidade para lidar com a gravidade e o movimento do personagem. Além disso, Karlson também
        inclui uma variedade de power-ups e armas que podem ser usados para ajudar o jogador a superar desafios e
        derrotar inimigos.

        Um dos aspectos mais interessantes do jogo é a sua comunidade entusiasta de jogadores e criadores de conteúdo.
        Muitos jogadores criaram seus próprios níveis personalizados para o jogo, e o desenvolvedor Dani regularmente
        destaca alguns dos melhores níveis criados pelos jogadores.

        Karlson é um jogo divertido e desafiador que é fácil de pegar e jogar, mas oferece horas de jogabilidade
        emocionante. Com sua arte minimalista, jogabilidade intensa e comunidade ativa de jogadores e criadores de
        conteúdo, Karlson é um jogo que vale a pena conferir.</p>
    <br>
    <form action="opinions.php" method="GET">
        <input name='opinion' type='text' placeholder='opinion'>
        <button class="myButton" type="submit" >Enviar</button>
    </form>

    <br>
    <br>
    <img src="./sprites/Karlson.jpg">
    <br>
    <br>
    <a href="./home.php" class="myButton">Home</a>
    <header class="header" id="header">
        <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
        <div class="header_img"> <img src="https://i.imgur.com/hczKIze.jpg" alt=""> </div>
    </header>
    <?php
    include 'Sidebar.php';
    ?>
</body>

</html>