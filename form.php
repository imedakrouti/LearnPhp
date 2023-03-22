<!DOCTYPE html>
<html lang="en">
<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    // if ($_POST["lang"] == "ar") {
    //     header("location:index.php");
    //     exit();
    // }
    ($_POST["lang"] == "ar" ? header("location:index.php") : ($_POST["lang"] == "en" ? header("location:imed.txt") : ''));
    ($_POST["lang"] == "ar" ? header("location:index.php") : ($_POST["lang"] == "en" ? header("location:imed.txt") : ''));
}

?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form class="" method="POST" action="">
        <input type="text" name="name" id="name">
        <select name="lang" id="lang">
            <option value="ar">arabic</option>
            <option value="en">english</option>
            <option value="es">espagnol</option>
        </select>
        <input type="submit" value="ok">
    </form>


</body>

</html>