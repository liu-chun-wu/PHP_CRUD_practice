<?php
include_once 'setting.php';
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
include("front/footer.php");
