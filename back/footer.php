<div style="width: 40%; border:#333 1px solid;">
    <p class="t cent botli">頁尾內容管理</p>
    <form method="post" action="api\footer_update.php">
        <table width="100%">
            <tbody>
                <tr class="yel">
                    <td width="45%">Author</td>
                    <td width="45%">Email</td>
                </tr>
                <?php

                $footer = new DB('footer');
                $data = $footer->all();
                foreach ($data as $data) {
                ?>
                    <tr class='cent'>
                        <td><input type="text" name="author" value="<?= $data['author']; ?>" style='width:75%;text-align:center; '> </td>
                        <td><input type="text" name="email" value="<?= $data['email']; ?>" style='width:75%;text-align:center; '> </td>
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