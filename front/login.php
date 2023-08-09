<div align="center">
    <form action="index.php?goto=login" method="post">
        <p class="t botli">管理員登入區</p>
        <p class="cent">帳號 ： <input name="name" type="text" required></p>
        <p class="cent">密碼 ： <input name="pwd" type="password" required></p>
        <p class="cent"><input type="submit" value="送出"><input type="reset" value="清除"></p>
    </form>
</div>
<?php
if (isset($_POST['name']) && isset($_POST['pwd'])) {
    $accountDB = new DB('admin');
    $name = $_POST['name'];
    $pwd = $_POST['pwd'];
    $check = $accountDB->findByArray(['name' => $name, 'password' => $pwd]);
    if (!empty($check)) {
        to('admin.php');
    } else {
        echo "<script>alert('帳號或密碼錯誤')</script>";
    }
}

?>