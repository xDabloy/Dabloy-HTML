<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "Zgloszenia";

$connection = new mysqli($server, $username, $password, $database);

if (!$connection) {
    die($connection);
}
?>
<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ZGLOSZENIA</title>
    <link rel="stylesheet" href="styl.css">
</head>

<body>
    <?php
    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "Zgloszenia";

    $connection = new mysqli($server, $username, $password, $database);

    if (!$connection) {
        die($connection);
    }
    ?>
    <div class="naglowek">
        <h1>Zgloszenia wydarzeń</h1>
    </div>
    <div class="glowny">
        <div class="lewy">
            <h2>Personel</h2>
            <form action="post">
                <input type="checkbox" checked>
                <input type="checkbox">
                <button id="skrypt_1">Pokaż</button>
            </form>
            <table>
                <tr>
                    <th>Id</th>
                    <th>Imię</th>
                    <th>Nazwisko</th>
                </tr>
                <tr></tr>
                <tr></tr>
                <tr></tr>
            </table>
        </div>
        <div class="prawy">
            <h2>Nowe zgloszenia</h2>
            <ol>
                <?php
                $connection = mysqli_connect($server, $username, $password, $database);
                
                $query = 'SELECT personel.`id`, personel.`nazwisko` FROM `personel` WHERE personel.id NOT IN (SELECT rejestr.id_personel FROM rejestr)';
                $wynik_zapytania = mysqli_query($connection, $query);
                for ($i=0; $i < mysqli_num_rows($wynik_zapytania); $i++) { 
                   //$dane = mysqli_fetch_row($wynik_zapytania);
                   $dane = mysqli_fetch_array($wynik_zapytania);

                   echo "<li>$dane[id] $dane[nazwisko]</li>";
                }
                mysqli_close($connection);
                ?>
            </ol>
            <form action="post">
                <p>Wybierz id osoby z listy</p>
                <input type="number">
                <button>Dodaj zgloszenie</button>
                <p id="skrypt_3"></p>
            </form>
        </div>
    </div>
    <div class="stopka">
        <p>Strone wykonal: xDabloy</p>
    </div>
</body>

</html> 