<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>excercise</title>
</head>

<body>
    <form action="index.php?goto=PostExcercise" method="post">
        <label>A apple cost 10 dollars</label><br>
        <label>Quantity of apple :</label>
        <input type="number" name="quantity" required><br>
        <input type="submit">
        <input type="reset">
    </form>

</body>

</html>
<?php
if (isset($_POST["quantity"])) {
    $quantity = $_POST["quantity"];
    $price = 10;
    $total = $quantity * $price;
    echo "You bought {$quantity} apples <br>";
    echo "You spent {$total} dollars";
}
?>