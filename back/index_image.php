<div style="width: 40%; border:#333 1px solid;">
    <p class="t cent botli">管理者帳號管理</p>
    <form method="post" action="api/index_image_update_delete.php">
        <table width="100%">
            <tbody>
                <tr class="yel">
                    <td width="45%">圖片</td>
                    <td width="45%">展示</td>
                    <td width="10%">刪除</td>
                </tr>
                <?php

                $index_image = new DB('index_image');
                $data = $index_image->all();
                foreach ($data as $value) {
                    if ($value['display'] == '1') {
                        $display = "checked";
                    } else {
                        $display = "";
                    }
                ?>
                    <tr class='cent'>
                        <td><img src="img/<?= $value['image']; ?>" style="width:40%"></td>
                        <td><input type="radio" name="display[]" value="<?= $value['id']; ?>" style='width:75%; text-align:center;' <?= $display; ?>> </td>
                        <td><input type="checkbox" name="delete[]" value="<?= $value['id']; ?>"></td>
                        <input type="hidden" name="id[]" value="<?= $value['id']; ?>">
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
        <table style="margin-top:40px; width:70%;">
            <tbody>
                <tr>
                    <td width="200px"><input type="button" onclick="op('#cover','#cvr','modal/index_image.php')" value="新增管理者帳號"></td>
                    <td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置">
                    </td>
                </tr>
            </tbody>
        </table>
    </form>
</div>