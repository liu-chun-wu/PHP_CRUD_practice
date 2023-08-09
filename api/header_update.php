<?php
include_once '../setting.php';
$header = new DB('header');
//update data
$header->updateByArray($_POST);
to("../admin.php?goto=header");
