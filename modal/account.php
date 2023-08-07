<h3>新增管理者帳號</h3>
<hr>
<form action="api/add.php" method="post" enctype="multipart/form-data">
    <table style="width:70%;margin:auto">
        <tr>
            <td style="text-align:right">帳號：</td>
            <td><input type="text" name="name"></td>
        </tr>
        <tr>
            <td style="text-align:right">密碼：</td>
            <td><input type="password" name="password"></td>
        </tr>
        <tr>
            <td style="text-align:right">確認密碼：</td>
            <td><input type="password" name="password2"></td>
        </tr>
    </table>
    <div style="width:100px;margin:auto">
        <input type="hidden" name="table" value="account">
        <input type="submit" value="新增">
        <input type="reset" value="重置">
    </div>
</form>