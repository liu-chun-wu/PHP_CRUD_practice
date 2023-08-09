<?php
include_once '../setting.php';
$admin = new DB('admin');
$admin->createByArray($_POST);
to('../admin.php?goto=admin');
