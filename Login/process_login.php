<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "logowanie";

$connection = mysqli_connect($server, $username, $password, $database);

if (!$connection) {
    die($connection);
}

foreach ($_POST as $key => $value) {
    echo $key, "; ", $value, " ";
}

$login = $_POST["login"];
$haslo = $_POST["haslo"];

$queryResoult = mysqli_query($connection, "SELECT * FROM user WHERE user.login = '$login' AND user.haslo = '$haslo'");

mysqli_fetch_array($queryResoult);

if (mysqli_num_rows($queryResoult) > 0) {
    echo "Zalogowano pomyślnie.";
} else {
    echo "Niepoprawny login lub hasło.";
}

mysqli_close($connection);
?>