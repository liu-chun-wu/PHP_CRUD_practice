<?
$header = new DB('header');
$visit_number = new DB('visit_number');
$title = $header->findById(1);
$number = $visit_number->findById(1);
?>
<header>
    <h2 align="center"><?= $title['title']; ?> 訪問人數 : <?= $number['quantity']; ?></h2>
    <div align="center">
        <?
        if (!isset($_SESSION['login']) || $_SESSION['login'] != 'true') {
        ?>
            <a href="index.php">首頁</a> <a href="index.php?goto=login">管理員登入</a>
        <?
        } else {
        ?>
            <a href="admin.php">後台</a> <a href="api/logout.php">管理員登出</a>
        <?
        }
        ?>

    </div>
    <table border="3" style="background-color:white" align="center">
        <tr align="center" style="background-color:lightblue">
            <td><a href="index.php?goto=VariablesAndArithmetic">Variables and Arithmetic</a></td>
        </tr>
        <tr align="center" style="background-color:lightblue">
            <td><a href="index.php?goto=get">$_GET</a></td>
            <td><a href="index.php?goto=post">$_POST</a></td>
        </tr>
        <tr align="center" style="background-color:lightblue">
            <td><a href="index.php?goto=SanitizeInput">Sanitize Input</a></td>
            <td><a href="index.php?goto=ValidateInput">Validate Input</a></td>
        </tr>
        <tr align="center" style="background-color:lightblue">
            <td><a href="index.php?goto=cookie">$_COOKIE</a></td>
            <td><a href="index.php?goto=server">$_SERVER</a></td>
        </tr>
    </table>
    <hr>
</header>