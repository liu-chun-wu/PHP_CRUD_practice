<div style="width: 40%; border:#333 1px solid;">
    <p class="t cent botli">管理者帳號管理</p>
    <form method="post" action="api/admin_update_delete.php">
        <table width="100%">
            <tbody>
                <tr class="yel">
                    <td width="45%">帳號</td>
                    <td width="45%">密碼</td>
                    <td width="10%">刪除</td>
                </tr>
                <?php

                $db = new DB('admin');
                $acc = $db->all();
                foreach ($acc as $acc) {
                ?>
                    <tr class='cent'>
                        <td><input type="text" name="name[]" value="<?= $acc['name']; ?>" style='width:75%; text-align:center;'> </td>
                        <td><input type="text" name="password[]" value="<?= $acc['password']; ?>" style='width:75%;text-align:center;'> </td>
                        <td><input type="checkbox" name="delete[]" value="<?= $acc['id']; ?>"></td>
                        <input type="hidden" name="id[]" value="<?= $acc['id']; ?>">
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
        <table style="margin-top:40px; width:70%;">
            <tbody>
                <tr>
                    <td width="200px"><input type="button" onclick="op('#cover','#cvr','modal/admin.php')" value="新增管理者帳號"></td>
                    <td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置">
                    </td>
                </tr>
            </tbody>
        </table>
    </form>
</div>