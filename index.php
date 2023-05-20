<html>
<head><link rel="stylesheet" href="./style.css">
<script src="meuScript.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>



<body>
<img src="./sprites/Logo.png">
<br>
<h2>EveryPedia</h2>
<br>
<p>Games:</p>
<br>
<a href="./Karlson.php" class="myButton">Karlson</a>
<br>
<br>
<a href="./gta5.php" class="myButton">Gta V</a>
<br>
<br>
<a href="./cyberpunk.php" class="myButton">CyberPunk 2077</a>
<br>
<br>
<p>Animals:</p>
<a href="./Capivara.php" class="myButton">Capivaras</a>
<br>
<br>
<p>Foods:</p>
<a href="./acai.php" class="myButton">Açai</a>
<br>
<br>
<p>General/Others:</p>
<a href="./opinions.php" class="myButton">Opinions</a>

<header class="header" id="header">
        <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
        <div class="header_img"> <img src="https://i.imgur.com/hczKIze.jpg" alt=""> </div>
<?php
include 'Sidebar.php';
include 'BackGround.php';
?>
</body>

<style>
      body {
        background-color: #9a44e6;
      }
    </style>

</html>


