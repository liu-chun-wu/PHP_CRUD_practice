<? $index_text = new DB('index_text'); ?>
<div style="width: 40%; border:#333 1px solid;">
    <p class="t cent botli">首頁文字管理</p>
    <form method="post" action="api\index_text_update.php">
        <table width="100%">
            <tbody>
                <tr class="yel">
                    <?
                    foreach ($index_text->findById(1) as $key => $value) {
                        if ($key != 'id') {
                    ?>
                            <td width="33%"><?= $key; ?> : </td>
                    <?
                        }
                    }
                    ?>
                </tr>
                <?php
                $data = $index_text->all();
                foreach ($data as $data) {
                ?>
                    <tr class='cent'>
                        <td><input type="text" name="age" value="<?= $data['age']; ?>" style='width:%;text-align:center; '> </td>
                        <td><input type="text" name="school" value="<?= $data['school']; ?>" style='width:%;text-align:center; '> </td>
                        <td><input type="text" name="interest" value="<?= $data['interest']; ?>" style='width:%;text-align:center; '> </td>
                        <input type="hidden" name="id" value="<?= $data['id']; ?>">
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
        <table style="margin-top:40px; width:70%;">
            <tbody>
                <tr>
                    <td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置">
                    </td>
                </tr>
            </tbody>
        </table>
    </form>
</div>