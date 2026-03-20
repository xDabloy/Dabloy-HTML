<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gry Komputerowe</title>
    <link rel="stylesheet" href="styl.css">
</head>

<body>
    <?php
    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "gry";

    $connection = mysqli_connect($server, $username, $password, $database);

    if (!$connection) {
        die($connection);
    }
    ?>
    <div class="naglowek"></div>
    <div class="sekcja_lewa">
        <h3>Top 5 gier w tym miesiącu</h3>
        <ul>
            <?php
            $query = "SELECT nazwa, punkty FROM gry ORDER BY punkty DESC LIMIT 5";
            $result = mysqli_query($connection, $query);

            while ($row = mysqli_fetch_row($result)) {
                echo "<li>" . $row[0] . " <span class='punkt'>" . $row[1] . "</span></li>";
            }
            ?>
        </ul>
        <h3>Nasz Sklep</h3>
        <a href="http://sklep.gry.pl">Tu kupisz gry</a>
        <h3>Strone wykonał:</h3>
        <p>xDabloy</p>
    </div>
    <div class="sekcja_sr">
        <?php
        $query2 = "SELECT id, nazwa, zdjecie FROM gry";
        $result2 = mysqli_query($connection, $query2);

        while ($row = mysqli_fetch_row($result2)) {
            echo "<div class='gra'>";
            echo "<img src='" . $row[2] . "' alt='" . $row[1] . "' title='" . $row[0] . "'>";
            echo "<p>" . $row[1] . "</p>";
            echo "</div>";
        }
        ?>
    </div>
    <div class="sekcja_prawa">
        <h3>Dodaj nową grę</h3>
        <form method="POST">
            <input type="text" name="Nazwa" id="nazwaid">
            <label for="Nazwa">Nazwa</label>
            <input type="text" name="opis" id="opisid">
            <label for="opis">Opis</label>
            <input type="number" name="cena" id="cenaid">
            <label for="cena">Cena</label>
            <input type="text" name="zdjecie" id="zdjeciaid">
            <label for="zdjecie">Zdjęcia</label>
            <button>DODAJ</button>
        </form>
    </div>
    <div class="stopka">
        <form method="POST">
            <input type="text" name="pokaz"">
            <button class=" guzik">Pokaż opis</button>
        </form>
    </div>
    <?php
    mysqli_close($connection);
    ?>
</body>

</html>