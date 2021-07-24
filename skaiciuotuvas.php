<?php 

$rezultatas = "";

if(isset($_GET["skaicius1"]) && !empty($_GET["skaicius1"]) &&  isset($_GET["veiksmas"]) && !empty($_GET["veiksmas"]) && isset($_GET["skaicius2"]) && !empty($_GET["skaicius2"])   ) {

    $pirmas = $_GET["skaicius1"];
    $antras = $_GET["skaicius2"];
    $veiksmas = $_GET["veiksmas"];

    if (is_numeric($pirmas) && is_numeric($antras)) {

        if ($veiksmas == "+") {
            $rezultatas = $pirmas + $antras;
        } else if ( $veiksmas == "-") {
            $rezultatas = $pirmas - $antras;
        } else if ( $veiksmas == "*" ) {
            $rezultatas = $pirmas * $antras;
        } else if ( $veiksmas == "/" ) {
            $rezultatas = $pirmas / $antras;
        }else if ( $veiksmas == "*" ) {
            $rezultatas = $pirmas * $antras;
        } else $rezultatas = " Netinkamas simbolis";

    } else $rezultatas = "Kintamieji ne skaiciai";

} else {
    $rezultatas = "Kazkas negerai, kintamieji tusti arba neegzistuoja";
}
?>

<div> <?php echo $rezultatas ?> </div>