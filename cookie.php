<?php
setcookie("food", "banana", time() + 86400);
setcookie("drink", "cola", time() + 86400);
setcookie("dessert", "candy", time() + 86400);
foreach ($_COOKIE as $key => $value) {
    echo "{$key} => {$value} <br>";
}
