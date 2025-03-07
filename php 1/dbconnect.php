<?php
$servername = "localhost";
$username = "root";
$password = "";

$connection = new mysqli($servername, $username, $password);
?>
<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css">
    <title>restauracja</title>
</head>

<body>
    <div>
        <div class="baner">
            <h1>Witamy w restauracji „Wszystkie Smaki”</h1>
        </div>
        <div class="gora">
            <div class="lewy_blok">
                <img src="menu.jpg" alt="Nasze danie" class="obraz">
            </div>
            <div class="prawy_blok image">
                <h4 style="color: black;">U nas dobrze zjesz!</h4>
                <ol>
                    <li>Obiady od 40 zł</li>
                    <li>Przekąski od 10 zł</li>
                    <li>Kolacje od 20 zł</li>
                </ol>
            </div>
        </div>
        <div class="dol">
            <div class="dol2">
                <div>
                    <h3>Zarezerwuj stolik on-line</h3>
                </div>
                <div>
                    <label for="a">Data (format: rrrr-mm-dd): </label>
                </div>
                <div>
                    <input type="data" id="a">
                </div>
                <div>
                    <label for="b">Ile osób?: </label>
                </div>
                <div>
                    <input type="number" id="b">
                </div>
                <div>
                    <label for="c">Twój numer telefonu: </label>
                </div>
                <div>
                    <input type="number" id="c">
                </div>
                <div>
                    <input type="checkbox" id="v" class="czekbox">
                    <label for="v" class="czekbox">zgadzam sie na przetwarzanie moich danych osobowych</label>
                </div>
                <div>
                    <button onclick="czysc()">WYCZYŚĆ</button>
                    <button type="submit">REZERWUJ</button>
                </div>
            </div>
        </div>
        <div class="stopka">
            <div>
                Autor: ************
            </div>
        </div>
</body>

<script>
    function czysc() {
        var a = document.getElementById('a').value = "";
        var b = document.getElementById('b').value = "";
        var c = document.getElementById('c').value = "";


    }
</script>

</html>