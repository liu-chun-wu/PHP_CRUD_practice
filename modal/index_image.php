<h3 class="cent">上傳首頁圖片</h3>
<hr>
<form action="api/upload_image.php" method="post" enctype="multipart/form-data">
    <table style="width:70%;margin:auto">
        <tr>
            <td style="text-align:right">上傳圖片</td>
            <td><input type="file" name="image" accept="image/*"></td>
        </tr>
    </table>
    <div style="width:100px;margin:auto">
        <input type="submit" value="上傳">
        <input type="reset" value="重置">
    </div>
</form>