<?
$header = new DB('header');
$data = $header->findById(1);
?>
<header>
    <h2 align="center"><?= $data['title']; ?></h2>
    <div align="center">
        <a href="index.php">首頁</a> <a href="index.php?goto=login">管理員登入</a>
    </div>
    <table border="3" style="background-color:white" align="center">
        <tr align="center" style="background-color:lightblue">
            <td></td>
            <td><a href="index.php?goto=VariablesandArithmetic">Variables and Arithmetic</a></td>
            <td></td>
        </tr>
        <tr align="center" style="background-color:lightblue">
            <td><a href="index.php?goto=PostExcercise">$_POST</a></td>
            <td><a href="index.php?goto=SanitizeInput">Sanitize Input</a></td>
            <td><a href="index.php?goto=ValidateInput">Validate Input</a></td>
        </tr>
        <tr align="center" style="background-color:lightblue">
            <td><a href="index.php?goto=cookie">$_COOKIE</a></td>
            <td><a href="index.php?goto=session">$_SESSION</a></td>
            <td><a href="index.php?goto=server">$_SERVER</a></td>
        </tr>
    </table>
    <hr>
</header>