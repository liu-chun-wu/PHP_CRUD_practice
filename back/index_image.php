<div style="width: 40%; border:#333 1px solid;">
    <p class="t cent botli">首頁圖片管理</p>
    <form method="post" action="api/index_image_update_delete.php">
        <table width="100%">
            <tr class="yel">
                <td width="45%">圖片</td>
                <td width="45%">展示</td>
                <td width="10%">刪除</td>
            </tr>
            <?php
            $index_image = new DB('index_image');
            // 
            if (!empty($_GET['page'])) {
                $current_page = $_GET['page'];
            } else {
                $current_page = 1;
            }

            $columns_per_page = 3;
            $total_columns = $index_image->countColumns();
            $total_page = ceil($total_columns / $columns_per_page);
            $data = $index_image->all();
            for ($i = ($current_page - 1) * $columns_per_page; $i < ($current_page - 1) * $columns_per_page + $columns_per_page; $i++) {
                if ($i < $total_columns) {
                    if ($data[$i]['display'] == '1') {
                        $display = "checked";
                    } else {
                        $display = "";
                    }
            ?>
                    <tr class='cent'>
                        <td><img src="img/<?= $data[$i]['image']; ?>" style="width:40%"></td>
                        <td><input type="radio" name="display[]" value="<?= $data[$i]['id']; ?>" style='width:75%; text-align:center;' <?= $display; ?>> </td>
                        <td><input type="checkbox" name="delete[]" value="<?= $data[$i]['id']; ?>"></td>
                        <input type="hidden" name="id[]" value="<?= $data[$i]['id']; ?>">
                    </tr>
            <?

                }
            }
            ?>
            <!-------------------沒有分頁功能功能的寫法----------------------------------------->
            <?
            // $data = $index_image->all();
            // foreach ($data as $value) {
            //     if ($value['display'] == '1') {
            //         $display = "checked";
            //     } else {
            //         $display = "";
            //     }
            // 
            ?>
            <!-- <tr class='cent'>
                    <td><img src="img/<?= $value['image']; ?>" style="width:40%"></td>
                    <td><input type="radio" name="display[]" value="<?= $value['id']; ?>" style='width:75%; text-align:center;' <?= $display; ?>> </td>
                    <td><input type="checkbox" name="delete[]" value="<?= $value['id']; ?>"></td>
                    <input type="hidden" name="id[]" value="<?= $value['id']; ?>">
                </tr> -->
            <?php
            // }
            // 
            ?>
            <!---------------------------------------------------------------->
        </table>
        <div style="height: 30px;width:100%;" align="center">
            <?
            if ($current_page > 1) {
            ?>
                <a href="?goto=index_image&page=<?= $current_page - 1; ?>">上一頁</a>
            <?
            }
            for ($i = 1; $i <= $total_page; $i++) {
            ?>
                <a href="?goto=index_image&page=<?= $i; ?>"><?= $i; ?></a>
            <?
            }
            if ($current_page <  $total_page) {
            ?>
                <a href="?goto=index_image&page=<?= $current_page - 1; ?>">下一頁</a>
            <?
            }
            ?>
        </div>
        <table style="margin-top:40px; width:70%;">
            <tr>
                <td width="200px"><input type="button" onclick="op('#cover','#cvr','modal/index_image.php')" value="新增圖片"></td>
                <td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置">
                </td>
            </tr>
        </table>
    </form>
</div>