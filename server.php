<?php
include("Menu.html");
?>
<?php
foreach ($_SERVER as $key => $value) {
    echo "{$key} => {$value} <br>";
}
?>
<?php
include("footer.html");
?>