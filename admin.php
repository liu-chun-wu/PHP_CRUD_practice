<?php
include_once 'setting.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php practice</title>
    <link href="./css/css.css" rel="stylesheet" type="text/css">
    <script src="./js/jquery-1.9.1.min.js"></script>
    <script src="./js/js.js" defer></script>
</head>

<body>
    <? include 'front/admin_header.php'; ?>
    <div id="cover" style="display:none; ">
        <div id="coverr">
            <a style="position:absolute; right:3px; top:4px; cursor:pointer; z-index:9999;" onclick="cl('#cover')">X</a>
            <div id="cvr" style="position:absolute; width:99%; height:100%; margin:auto; z-index:9898;"></div>
        </div>
    </div>
    <div style="display:flex" align="center">
        <div style="border:1px solid #333; height:450px; width:30%;position:relative">
            <p class="t cent botli">後臺主選單 </p>
            <a style="color:#000; font-size:13px; text-decoration:none;" href="admin.php?goto=admin">
                <div class="mainmu" align="center"> 管理員帳號管理 </div>
            </a>
            <a style=" color:#000; font-size:13px; text-decoration:none;" href="admin.php?goto=index_image">
                <div class="mainmu" align="center"> 首頁圖片管理 </div>
            </a>
            <a style="color:#000; font-size:13px; text-decoration:none;" href="admin.php?goto=index_text">
                <div class="mainmu" align="center"> 首頁文字管理 </div>
            </a>
            <a style="color:#000; font-size:13px; text-decoration:none;" href="admin.php?goto=header">
                <div class="mainmu" align="center"> header文字管理 </div>
            </a>
            <a style="color:#000; font-size:13px; text-decoration:none;" href="admin.php?goto=footer">
                <div class="mainmu" align="center"> footer文字管理 </div>
            </a>
            <a style="color:#000; font-size:13px; text-decoration:none;" href="admin.php?goto=admin_image">
                <div class="mainmu" align="center"> 後台圖片管理 </div>
            </a>
        </div>
        <?
        if (!empty($_GET['goto'])) {
            $goto = $_GET['goto'];
        } else {
            $goto = 'admin';
        }
        $file = 'back/' . $goto . '.php';
        if (file_exists($file)) {
            include $file;
        } else {
            include 'back/admin.php';
        }
        ?>
        <div style="border:1px solid #333; height:450px;width:30%;align-items: center">
            <p class="t cent botli">後臺圖片</p>
            <img src="img\admin_img.jpeg" style="width:100%;display:block; margin:auto; ">
        </div>
    </div>
</body>

</html>

<?
include("front/footer.php");
?>