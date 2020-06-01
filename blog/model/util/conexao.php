<?php
$link = mysqli_connect("localhost", "u562885007_morganaburatti", "dzJlQX75", "u562885007_site");
 
if (!$link) {
    echo "Error: Falha ao conectar-se com o banco de dados MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}
 
//mysqli_close($link);
?>