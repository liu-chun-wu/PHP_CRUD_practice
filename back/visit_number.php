<? $visit_number = new DB('visit_number'); ?>
<div style="width: 40%; border:#333 1px solid;">
    <p class="t cent botli">訪問人數管理</p>
    <form method="post" action="api\visit_number_update.php">
        <table width="100%">
            <tr class="yel">
                <td>訪問人數</td>
            </tr>
            <?
            $data = $visit_number->findById(1);
            ?>
            <tr class='cent'>
                <td><input type="text" name="quantity" value="<?= $data['quantity']; ?>" style='width:20%;text-align:center; '> </td>
                <input type="hidden" name="id" value="<?= $data['id']; ?>">
            </tr>
        </table>
        <table style="margin-top:40px; width:70%;">
            <tr>
                <td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置">
                </td>
            </tr>
        </table>
    </form>
</div>