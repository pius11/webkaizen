<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "olah raga yang anda gemari <br>";
    if (isset($_POST['olga1'])) {
        echo "+ ". $_POST['olga1']."<br>";
    }
    if (isset($_POST['olga2'])) {
        echo "+ ". $_POST['olga2']."<br>";
    }
    if (isset($_POST['olga3'])) {
        echo "+ ". $_POST['olga3']."<br>";
    }
    if (isset($_POST['olga4'])) {
        echo "+ ". $_POST['olga4']."<br>";
    }
    ?>
</body>
</html>