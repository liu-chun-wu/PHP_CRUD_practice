<?php
include_once '../setting.php';
$index_text = new DB('index_text');
//update data
$index_text->updateByArray($_POST);
to("../admin.php?goto=index_text");
