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
    require 'functions.php';
    $connection = database_connect();
    ?>
    <div class="naglowek"></div>
    <div class="sekcja_lewa">
        <h3>Top 5 gier w tym miesiącu</h3>
        <ul>
             <?php
                echo skrypt1($connection);
                ?>
        </ul>
        <h3>Nasz Sklep</h3>
        <a href="http://sklep.gry.pl">Tu kupisz gry</a>
        <h3>Strone wykonał:</h3>
        <p>xDabloy</p>
    </div>
    <div class="sekcja_sr">
          <?php
            echo skrypt2($connection);
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
            <?php
                echo skrypt4($connection)
                    ?>
        </form>
    </div>
    <div class="stopka">
        <form method="POST">
            <input type="text" name="pokaz"">
            <button class=" guzik">Pokaż opis</button>
             <?php
            echo skrypt3($connection);
            ?>
        </form>
    </div>
    <?php
    mysqli_close($connection);
    ?>
</body>

</html>