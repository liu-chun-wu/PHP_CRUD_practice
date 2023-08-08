<div style="margin:auto; border:1px solid #333; width: 350px;" align="center">
    <?
    $_SESSION["fruit"] = "apple";
    $_SESSION["drink"] = "spirit";
    foreach ($_SESSION as $key => $value) {
        echo "{$key} => {$value}<br>";
    }
    ?>
</div>