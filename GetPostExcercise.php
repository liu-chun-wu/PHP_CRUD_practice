<?php
include("Menu.html");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>excercise</title>
</head>

<body>
    <form action="GetPostExcercise.php" method="post">
        <label>Quantity of apple :</label>
        <input type="number" name="quantity"><br>
        <input type="submit" name="input">
    </form>

</body>

</html>
<?php
if (isset($_POST["input"])) {
    $quantity = $_POST["quantity"];
    $price = 10;
    $total = $quantity * $price;
    echo "You bought {$quantity} apples <br>";
    echo "You spent {$total} dollars";
}
?>
<?php
include("footer.html");
?>