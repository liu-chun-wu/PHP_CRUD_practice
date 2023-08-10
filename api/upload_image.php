<?
include_once '../setting.php';
$index_image = new DB('index_image');
$data = [];
//取得上傳檔案的檔名
$filename = $_FILES['image']['name'];

//將檔案搬至指定的目錄下
move_uploaded_file($_FILES['image']['tmp_name'], "../img/" . $filename);

//將檔名存入陣列中，陣列的key名和資料表的欄位名必須一樣
$data['image'] = $filename;
$data['display'] = '0';

$index_image->createByArray($data);
to('../admin.php?goto=index_image');
