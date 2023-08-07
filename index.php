<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP NOTE</title>
    <link href="./css/css.css" rel="stylesheet" type="text/css">
    <script src="./js/jquery-1.9.1.min.js"></script>
    <script src="./js/js.js"></script>
</head>

</html>

<?php
include 'setting.php';
include("front/header.html");
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
include("front/footer.html");
