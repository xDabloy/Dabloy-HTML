<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konfigurator samochodów</title>
    <link rel="stylesheet" href="styl.css">
</head>

<body>
    <?php
    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "samochody";

    $connection = mysqli_connect($server, $username, $password, $database);

    if (!$connection) {
        die($connection);
    }
    ?>
    <div class="naglowek">
        <h1>Serwis konfiguracji samochodów</h1>
    </div>
    <div class="nawi">
        <h2>Samochody</h2>
        <h2>Konfigurator</h2>
        <h2>Kontakt</h2>
    </div>
    <div class="glowny">
        <div class="lewy">

            <?php
            $connection = mysqli_connect($server, $username, $password, $database);

            if (!$connection) {
                die("Błąd połączenia: " . mysqli_connect_error());
            }

            $sql = "SELECT p.marka, p.model, p.cena, k.nazwa, k.doplata
        FROM pojazdy p
        JOIN kolory k ON p.kolor = k.id
        WHERE p.model = 'alfa'";

            $res = mysqli_query($connection, $sql);

            if (!$res) {
                die("Błąd zapytania: " . mysqli_error($connection));
            }

            echo "<table border=1>";
            echo "<tr><th>Marka</th><th>Model</th><th>Kolor</th><th>Cena</th></tr>";

            while ($row = mysqli_fetch_assoc($res)) {
                echo "<tr>
        <td>{$row['marka']}</td>
        <td>{$row['model']}</td>
        <td>{$row['nazwa']}</td>
        <td>" . ($row['cena'] + $row['doplata']) . "</td>
    </tr>";
            }

            echo "</table>";

            mysqli_close($connection);
            ?>

        </div>
        <div class="srodkowy">
            <table>
                <tr>
                    <th colspan="2">Konfiguracja</th>
                    <th>Cena</th>
                </tr>
                <tr>
                    <td colspan="3"><img src="a1.jpg" alt="Konfiguracja 1" class="obrazy"></td>
                </tr>
                <tr>
                    <td>SKRYPT 2</td>
                    <td>SKRYPT 2</td>
                    <td rowspan="2">SKRYPT 2</td>
                </tr>
                <tr>
                    <td>SKRYPT 2</td>
                    <td>SKRYPT 2</td>
                </tr>
                <tr>
                    <td colspan="3"><img src="a2.jpg" alt="Konfiguracja 2" class="obrazy"></td>
                </tr>
                <tr>
                    <td>SKRYPT 2</td>
                    <td>SKRYPT 2</td>
                    <td rowspan="2">SKRYPT 2</td>
                </tr>
                <tr>
                    <td>SKRYPT 2</td>
                    <td>SKRYPT 2</td>
                </tr>
            </table>
        </div>
        <div class="prawy">
            <h3>
                111 222 444
            </h3>
            <img src="a3.png" alt="Samochód">
        </div>
    </div>
    <div class="stopka">
        <p>
            Stronę wykonal: xDabloy
        </p>
    </div>
</body>

</html>