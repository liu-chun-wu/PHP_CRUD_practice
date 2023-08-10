<?
include_once '../setting.php';
$visit_number = new DB('visit_number');
$visit_number->updateByArray($_POST);
to('../admin.php?goto=visit_number');
