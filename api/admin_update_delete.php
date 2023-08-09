<?php
include_once '../setting.php';
$admin = new DB('admin');
foreach ($_POST['id'] as $key => $id) {
    //delete data
    if (!empty($_POST['delete']) && in_array($id, $_POST['delete'])) {
        $admin->deleteById($id);
    } else {
        //update data
        $data = $admin->findById($id);
        $data['name'] = $_POST['name'][$key];
        $data['password'] = $_POST['password'][$key];
        $admin->updateByArray($data);
    }
}
to("../admin.php?goto=admin");
