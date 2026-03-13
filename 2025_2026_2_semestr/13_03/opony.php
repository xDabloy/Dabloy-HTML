<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OPONY</title>
    <link rel="stylesheet" href="styl.css">
</head>

<body>
    <?php
    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "opony";

    $connection = mysqli_connect($server, $username, $password, $database);

    if (!$connection) {
        die($connection);
    }
    ?>
    <div class="glowny">
        <h1>Witryna Internetowa</h1>
        <div class="boczny">
            <?php
            $connection = mysqli_connect("localhost", "root", "", "opony");
            $zapytanie1 = "SELECT producent, model, sezon, cena FROM opony";
            $wynik1 = mysqli_query($connection, $zapytanie1);

            while ($wiersz = mysqli_fetch_array($wynik1)) {

                echo '<div class="opona1">';

                if ($wiersz['sezon'] == "letnia") {
                    echo '<img src="lato.png" alt="letnia">';
                } else if ($wiersz['sezon'] == "zimowa") {
                    echo '<img src="zima.png" alt="zimowa">';
                } else {
                    echo '<img src="uniwer.png" alt="uniwersalna">';
                }

                echo "<h4>Opona: " . $wiersz['producent'] . " " . $wiersz['model'] . "</h4>";
                echo "<h3>Cena: " . $wiersz['cena'] . "</h3>";

                echo '</div>';
            }
            mysqli_close($connection);
            ?>

            <!-- <div class="opona1">
                <img src="zima.png" alt="zimowe">
                <h4>Opona: uLFA AL105</h4>
                <h3>Cena: 105.99</h3>
            </div>
            <div class="opona1">
                <img src="lato.png" alt="letnia">
                <h4>Opona: uLFA AL105</h4>
                <h3>Cena: 105.99</h3>
            </div>
            <div class="opona1">
                <img src="uniwer.png" alt="uniwersalne">
                <h4>Opona: uLFA AL105</h4>
                <h3>Cena: 105.99</h3>
            </div>
            <div class="opona1">
                <img src="zima.png" alt="zimowe">
                <h4>Opona: uLFA AL105</h4>
                <h3>Cena: 105.99</h3>
            </div> -->

            <p><a href="https://opona.pl">więcej ofert</a></p>
        </div>
        <div class="sekcja1">
            <img src="opona.png" alt="Opona">
            <h2>Opona dnia</h2>
            <?php
            $connection = mysqli_connect("localhost", "root", "", "opony");
            $zapytanie2 = "SELECT producent, model, sezon, cena FROM opony LIMIT 1";
            $wynik2 = mysqli_query($connection, $zapytanie2);

            $wiersz = mysqli_fetch_array($wynik2);

            echo "<h2>" . $wiersz['producent'] . " model " . $wiersz['model'] . "</h2>";
            echo "<h2>Sezon: " . $wiersz['sezon'] . "</h2>";
            echo "<h2>Tylko " . $wiersz['cena'] . " zł!</h2>";

            mysqli_close($connection);
            ?>

        </div>
        <div class="sekcja2">
            <h2>Najnowsze zamówienie</h2>
            <?php
            $connection = mysqli_connect("localhost", "root", "", "opony");
            $zapytanie3 = "SELECT zamowienie.id_zam, zamowienie.ilosc, opony.model, opony.cena 
FROM zamowienie 
JOIN opony ON zamowienie.nr_kat = opony.nr_kat";

            $wynik3 = mysqli_query($connection, $zapytanie3);

            $wiersz = mysqli_fetch_array($wynik3);

            $wartosc = $wiersz['ilosc'] * $wiersz['cena'];

            echo "<h2>" . $wiersz['id_zam'] . " " . $wiersz['ilosc'] . " sztuki modelu " . $wiersz['model'] . "</h2>";
            echo "<h2>Wartość zamówienia " . $wartosc . " zł</h2>";
            mysqli_close($connection);
            ?>
        </div>
    </div>
    <div class="stopka">
        <p>Stronę Wykonal: 00000000000</p>
    </div>

</body>

</html>