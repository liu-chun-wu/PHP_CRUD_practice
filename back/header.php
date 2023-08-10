<div style="width: 40%; border:#333 1px solid;">
    <p class="t cent botli">管理者帳號管理</p>
    <form method="post" action="api\header_update.php">
        <table width="100%">
            <tbody>
                <tr class="yel">
                    <td width="45%">header</td>
                </tr>
                <?php

                $header = new DB('header');
                $data = $header->all();
                foreach ($data as $data) {
                ?>
                    <tr class='cent'>
                        <td><input type="text" name="title" value="<?= $data['title']; ?>" style='width:75%;text-align:center; '> </td>
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