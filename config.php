<?php
$opinions = $_GET["opinion"];

echo $opinions;

$pdo = new PDO("mysql:host=localhost;dbname=world", 'root', 'senhasegura123');
$pdo->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, false);

$unbufferedResult = $pdo->query("SELECT Name FROM City");
foreach ($unbufferedResult as $row) {
    echo $row['Name'] . PHP_EOL;
}
?>