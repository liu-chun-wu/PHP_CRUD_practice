<?
include_once '../setting.php';
$index_image = new DB('index_image');
foreach ($_POST['id'] as $id) {
    if (!empty($_POST['delete']) && in_array($id, $_POST['delete'])) {
        $index_image->deleteById($id);
    } else {
        $data = $index_image->findById($id);
        $data['display'] = ($_POST['display'][0] == $id) ? 1 : 0;
        $index_image->updateByArray($data);
    }
}
to('../admin.php?goto=index_image');
