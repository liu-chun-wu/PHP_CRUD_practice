<form action="index.php?goto=PostExcercise" method="post" align="center">
    <label>A apple cost 10 dollars</label><br>
    <label>Quantity of apple :</label>
    <input type="number" name="quantity" required><br>
    <input type="submit">
    <input type="reset">
</form>
<div style="margin:auto; border:1px solid #333; width: 350px;" align="center">
    <?php
    if (isset($_POST["quantity"])) {
        $quantity = $_POST["quantity"];
        $price = 10;
        $total = $quantity * $price;
        echo "You bought {$quantity} apples <br>";
        echo "You spent {$total} dollars";
    }
    ?>
</div>