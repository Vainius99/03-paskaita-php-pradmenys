    <style>
        .juoda {
            background-color: black;
            width: 100%;
            height: 100%;
            font-size: 100px;
            color: white;
        }
        .raudona {
            background-color: red;
            width: 100%;
            height: 100%;
            font-size: 100px;
        }
        .melyna {
            background-color: blue;
            width: 100%;
            height: 100%;
            font-size: 100px;
        }
    </style>

<?php 

$atsakymas = "";

if ( isset($_POST["spalva"]) && !empty($_POST["spalva"]) ) {

    $spalva = $_POST["spalva"];

        if ($spalva == "juoda") {
            $atsakymas = "Atspjejai !!!";
            $spalva = "juoda";
        } else if ($spalva == "raudona") {
            $atsakymas = "Atspjejai !!!";
            $spalva ="raudona";
        } else if ($spalva == "melyna") {
            $atsakymas = "Atspjejai !!!";
            $spalva ="melyna";
        } else $atsakymas = "Neatspejei spalvos";

} else $atsakyma = "Neirasei spejimo"; 


 
?>

<div class="<?php echo $spalva ?> " style="background-color: <?php echo $spalva; ?>"> <?php echo $atsakymas  ?> </div>
