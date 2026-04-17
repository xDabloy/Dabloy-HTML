<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FileReader</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form method="post">
        <textarea name="Text" id="text" class="area"></textarea>
        <button type="submit" class="guzik">Read File</button>
    </form>
    <?php
    if(isset($_POST['Text'])){
        $data = date("Y-m-d H:i:s");
        echo $data . " - " . $_POST['Text'];
        $file = fopen("notatki.txt", "a");
        fwrite($file, $data . " - " . $_POST['Text'] . "\n");
        fclose($file);
    }
    ?>
    <h2>Wszystkie zapisane notatki:</h2>
    
    <?php
    if(file_exists("notatki.txt")){
        $file = fopen("notatki.txt", "r");
        $content = fread($file, filesize(" notatki.txt"));
        fclose($file);
        
        $notatki = explode("\n", $content);
        
        for($i = 0; $i < count($notatki); $i++){
            if(!empty($notatki[$i])){
                echo "<div style='border: 1px solid black; padding: 5px; margin: 5px 0;'>";
                echo htmlspecialchars($notatki[$i]);
                echo "</div>";
            }
        }
    }
    ?>

</body>
</html>