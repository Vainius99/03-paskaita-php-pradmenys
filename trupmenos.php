<?php

use JetBrains\PhpStorm\NoReturn;

$rezultatassv = " ";
$rezultatas1 = " ";
$rezultatas2 = " ";


if(isset($_GET["tra1"]) && !empty($_GET["tra1"]) &&  isset($_GET["tra2"]) && !empty($_GET["tra2"]) && isset($_GET["trb1"]) && !empty($_GET["trb1"]) && isset($_GET["trb2"]) && !empty($_GET["trb2"])   ) {

    $asv = 0;
    $a1 = $_GET["tra1"];
    $a2 = $_GET["tra2"];
    $bsv = 0;
    $b1 = $_GET["trb1"];
    $b2 = $_GET["trb2"];

    if (is_numeric($a1) && is_numeric($a2) && is_numeric($b1) && is_numeric($b2) ) {
        $rezultatas1 = ($a1 * $b2) + ($b1 * $a2);
        $rezultatas2 = $a2 * $b2;
        if ($rezultatas1 >= $rezultatas2) {
            $rezultatassv = intval( $rezultatas1 / $rezultatas2);
            $rezultatas1 = $rezultatas1 - ($rezultatassv * $rezultatas2);
                if ($rezultatas1 == 0) {
                $rezultatas1 = " ";
                $rezultatas2 =  " ";
                } 
                
        } 
            

    } else $Rezultatas1 = " Kintamasis ne skaicius";

} else $Rezultatas1 = " Nuzpildyti visi langeliai";

?>

<div> <?php 
echo $rezultatassv;
echo "<br>";
echo $rezultatas1;
echo "<br>";
echo $rezultatas2;
?> 
</div> 

<!--  reikstu dar atsakyma supaprastinti -->