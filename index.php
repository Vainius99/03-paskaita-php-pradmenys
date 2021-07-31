<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <!-- 1. Užduotis "Skaičiuotuvas"

    Sukurti skaičiuotuvą. Skaičiuotuve įvedami du skaičiai į du skirtingus input.
    Aritmetinis veiksmas perduodamas per GET. Pvz.: sukuriamas trečias input, jei tame input yra + ženklas,
    jis perduodamas per GET, ir PHP kode if tikrina, koks aritmetinis veiksmas buvo perduotas.
    Rezultatas išvedamas į div.  -->

    <p>Skaiciuotuvas</p>

    <form action="skaiciuotuvas.php" method="get">
        <input type="text" value="5" name="skaicius1"/>
        <input type="text" value="+" name="veiksmas"/>
        <input type="text" value="5" name="skaicius2"/>
        <button type="submit">Patvirtink</button>
    </form>

    <!-- 2. Sukurkite skaičiuotuvą, sudedantį dvi trupmenas. Rezultatas atvaizduojamas su sveikąja ir trupmenine dalimi į div.
    Kiekvienas laukelis turi turėti patikrinimą, ar jame yra įvestas skaičius. -->
    <p>Trupmenu sudetis</p>

    <form action="trupmenos.php" method="get">
        <input type="text" value="5" name="tra1"/>
        <input type="text" value="5" name="tra2"/>
        <input type="text" value="+" disabled="true" name="veiksmas1"/>
        <input type="text" value="5" name="trb1"/>
        <input type="text" value="5" name="trb2"/>
        <button type="submit">Patvirtink</button>
    </form>

    <!-- 3. Sukurkite du input laukelius. Vienas -  vardas, kitas - slaptažodis. Susigalvokite vardą ir slaptažodį. Pvz. vardas - "admin",
    slaptažodis - "123456". Jei sugalvota kombinacija sutampa su tuo, kas įvesta į input laukelius, 
    išvedamas pranešimas - "prisijungėte sėkmingai", kitu atveju - "Įvesti duomenys neteisingi". -->

    <!-- 4. Papildikite 3 programą:
   *Jei duomenys yra įvesti teisingi, vartotojas nukreipiamas į failą - manopaskyra.php.
   *Kitu atveju, vartotojas nukreipiamas į puslapį - 404.php -->

    <p>Prisijungimas</p>
    <form action="prisijungimas.php" method="post">
        <label for="vardas">Vardas:</label>
        <input type="text" value="admin" name="vardas"/>
        <label for="slaptazodis">Slaptazodis:</label>
        <input type="password" value="123456" name="slaptazodis"/>
        <button type="submit">Patvirtink</button>
    </form>

    <!-- 5. Sukurkite programą, kurioje perdavus kintamuosius per POST "juoda", "raudona", "melyna", puslapis nusidažo atitinkama spalva. -->

    <!-- 6. Papildikite 5 programą, kad perduodant per input laukelį ne tik tekstą, bet ir spalvos kodą, puslapis nusidažytu spalvos kodo spalva. -->
    
    <p>Spalva</p>
    <form action="spalva.php" method="post">
        <label for="spalva">Atspek spalva:</label>
        <input type="text" value="spalva" name="spalva"/>
        <button type="submit">Patvirtink</button>
    </form>

    <!-- 7. Sukurkite programą, kuri parodytų, kokioje naršyklėje yra atidarytas puslapis ir pagal tai atvaizduotų naršyklės logotipą. -->

    <p> Narsykle</p>

    <form action="narsykle.php" method="post">
        <button type="submit">Patvirtink</button>
    </form>

        
</body>
</html>