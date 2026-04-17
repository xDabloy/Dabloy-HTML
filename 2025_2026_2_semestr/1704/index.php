<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FileReader</title>
</head>
<body>
    <form method="post">
        <textarea name="Text" id="text"></textarea>
        <button type="submit">Read File</button>
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

</body>
</html>