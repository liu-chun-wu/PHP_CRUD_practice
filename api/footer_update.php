<?php
include_once '../setting.php';
$footer = new DB('footer');
//update data
$footer->updateByArray($_POST);
to("../admin.php?goto=footer");
