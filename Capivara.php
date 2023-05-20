<html>

<head><link rel="stylesheet" href="./style.css">
</head>

<style>
      body {
        background-color: #9a44e6;
      }
    </style>

<body>
<?php
//echo "Kvalo";
$nome= "Sua opinião";
//echo "<input type='text' name='variavel' value='{$nome}'>";

//echo "Ok";
?>
<img src="./sprites/Logo.png">
<br>
<h2>Capivaras!</h2>
<p>As capivaras são animais fascinantes que habitam as regiões úmidas da América do Sul. Com seus corpos robustos e patas curtas, elas se movem com graça e facilidade tanto na terra quanto na água. Esses animais são os maiores roedores do mundo e são conhecidos por sua natureza pacífica e sociável.

As capivaras são animais herbívoros e se alimentam de plantas aquáticas, gramíneas e folhas. Elas têm uma dentição especializada que lhes permite mastigar com eficiência alimentos duros e fibrosos. Além disso, as capivaras têm uma grande capacidade de regeneração dentária, o que lhes permite substituir rapidamente os dentes gastos ou danificados.

As capivaras vivem em grupos sociais que podem variar de alguns indivíduos a mais de 20. Esses grupos são liderados por um macho dominante e incluem fêmeas, filhotes e machos subordinados. As capivaras são animais altamente sociais e comunicam-se através de vocalizações e sinais corporais, como o balanço da cabeça e da cauda.

Esses animais são excelentes nadadores e passam grande parte do tempo na água. Eles têm membranas entre os dedos das patas que lhes permitem nadar com facilidade e velocidade. Além disso, as capivaras têm uma camada de gordura sob a pele que lhes permite flutuar na água.

As capivaras são animais bastante adaptáveis e podem ser encontradas em várias regiões da América do Sul, desde as florestas tropicais até as savanas e pastagens. No entanto, elas são vulneráveis à caça e à perda de habitat devido à expansão humana e à degradação ambiental.

Em resumo, as capivaras são animais fascinantes e únicos que desempenham um papel importante nos ecossistemas em que vivem. Com sua natureza pacífica e adaptável, elas são um exemplo inspirador de como os animais podem se adaptar e prosperar em ambientes em constante mudança.</p>
<?php if (isset($nome)){
    echo "<input type='text' value='{$nome}'>";
} ?>
<br>
<br>
<a href="#" class="myButton">Enviar</a>
<br>
<p>Obrigado pela sua atenção</p>
<img src="./sprites/Capybara.jpeg">
<br>
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