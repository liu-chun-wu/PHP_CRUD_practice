<?php
include_once 'setting.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Note</title>
    <link href="./css/css.css" rel="stylesheet" type="text/css">
    <script src="./js/jquery-1.9.1.min.js" defer></script>
    <script src="./js/js.js" defer></script>
</head>

<body>
    <?
    include("front/header.php");
    if (!empty($_GET['goto'])) {
        $goto = $_GET['goto'];
    } else {
        $goto = 'main';
    }
    $file = 'front/' . $goto . '.php';
    if (file_exists($file)) {
        include $file;
    } else {
        include 'front/main.php';
    }
    ?>
</body>

</html>

<?
include("front/footer.php");
?>