<form action="index.php?goto=get" method="get" align="center">
    <label>A apple cost 10 dollars</label><br>
    <label>Quantity of apple :</label>
    <input type="hidden" name='goto' value='get'>
    <input type="number" name="quantity" required><br>
    <input type="submit">
    <input type="reset">
</form>
<div style="margin:auto; border:1px solid #333; width: 350px;" align="center">
    <?php
    if (isset($_GET["quantity"])) {
        $quantity = $_GET["quantity"];
        $price = 10;
        $total = $quantity * $price;
        echo "You bought {$quantity} apples <br>";
        echo "You spent {$total} dollars";
    }
    ?>
</div>