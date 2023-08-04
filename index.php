<?php
include("Menu.html");
if (!empty($_GET['goto'])) {
    $goto = $_GET['goto'];
} else {
    $goto = 'main';
}
$file = $goto . '.php';
if (file_exists($file)) {
    include $file;
} else {
    include 'main.php';
}
include("footer.html");
