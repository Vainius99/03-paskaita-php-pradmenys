<?php 



if(isset($_POST["vardas"]) && !empty($_POST["slaptazodis"]) ) {
    $vardas = $_POST["vardas"];
    $slaptazodis = $_POST["slaptazodis"];
        if ( $vardas == "admin" && $slaptazodis == "123456") {
            header("location: manopaskyra.php");
        } else  header("location: 404.php");


} else echo "Neuzpildyti langeliai !!!";



?>