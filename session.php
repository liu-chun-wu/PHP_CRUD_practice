<?php
include("Menu.html");
?>
<?php
session_start();
$_SESSION["fruit"] = "apple";
$_SESSION["drink"] = "cola";
foreach ($_SESSION as $key => $value) {
    echo "{$key} => {$value}<br>";
}
session_destroy();
?>
<?php
include("footer.html");
?>