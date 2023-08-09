<?
$header = new DB('header');
$data = $header->findById(1);
?>
<header>
    <h2 align="center"><?= $data['title']; ?></h2>
    <div align="center">
        <a align="center" href="index.php">首頁</a> <a align="center" href="index.php?goto=login">管理員登出</a>
    </div>
    <hr>
</header>