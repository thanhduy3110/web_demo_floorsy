<?php
include "../../libs/config.php";

$DB = new config();

// $data=[];
// foreach($_POST as $key=>)

$name_vn = $_POST['name_vn'];
$name_eng = $_POST['name_eng'];
$title = $_POST['title'];
$description = $_POST['description'];
$content = $_POST['content'];
$status = $_POST['status'];
$DB->insert(
    'table_news',
    array(
        'name_vn' => $name_vn,
        'name_eng' => $name_eng,
        'title' => $title,
        'description' => $description,
        'content' => $content,
        'status' => $status,
    )
);
header("location: http://localhost/demo-admin/source/news/index.php");

?>