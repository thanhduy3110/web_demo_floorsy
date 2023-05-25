<?php
include "../../libs/config.php";

$DB = new config();

// $data=[];
// foreach($_POST as $key=>)

$name_vn = $_POST['name_vn'];
$name_eng = $_POST['name_eng'];
$description = $_POST['description'];
$content = $_POST['content'];
$status = $_POST['status'];
$DB->insert(
    'table_info',
    array(
        'name_vn' => $name_vn,
        'name_eng' => $name_eng,
        'description' => $description,
        'content' => $content,
        'status' => $status,
    )
);
header("location: http://localhost/demo-admin/source/info/index.php");

?>