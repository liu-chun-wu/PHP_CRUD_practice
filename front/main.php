<?
$index_text = new DB('index_text');
$index_image = new DB('index_image');
?>
<div align="center">
    <h3>首頁圖片</h3>
    <?
    //print_r($index_image->all());
    foreach ($index_image->all() as $key => $value) {
        if ($value['display'] == '1') {
    ?>
            <img src="img/<?= $value['image']; ?>" style="width:15%">
    <?
        }
    }
    ?>
    <h3>About me</h3>
    <?
    $data = $index_text->findById(1);
    foreach ($data as $key => $value) {
        if ($key != 'id') {
    ?>
            <table>
                <tr>
                    <td><?= $key; ?> : <?= $value; ?></td>
                </tr>
            </table>
    <?
        }
    }
    ?>
</div>