<?php
include "../../libs/config.php";

$DB = new config();

// $data=[];
// foreach($_POST as $key=>)

if (isset($_POST['add'])) {
    $errors = array();
    $file_name = $_FILES['img']['name'];
    $file_size = $_FILES['img']['size'];
    $file_tmp = $_FILES['img']['tmp_name'];
    $file_type = $_FILES['img']['type'];
    $file_parts = explode('.', $_FILES['img']['name']);
    $file_ext = strtolower(end($file_parts));
    $expensions = array("jpeg", "jpg", "png");
    if (in_array($file_ext, $expensions) === false) {
        $errors[] = "Chỉ hỗ trợ upload file JPEG hoặc PNG.";
    }
    if ($file_size > 2097152) {
        $errors[] = 'Kích thước file không được lớn hơn 2MB';
    }
    $path="C:/xampp/htdocs/floorsy/admin-floorsy/assets/images/";
    $image = $_FILES['img']['name'];
    $imageFileType = pathinfo($image, PATHINFO_EXTENSION);
    $imageName = time() . '.' . $imageFileType;
    if (empty($errors) == true) {
        move_uploaded_file($file_tmp, $path . $imageName);
    }

}
$name_vn = $_POST['name_vn'];
$name_eng = $_POST['name_eng'];
$description = $_POST['description'];
$content = $_POST['content'];
$price = $_POST['price'];
$status = $_POST['status'];
$DB->insert(
    'table_product',
    array(
        'name_vn' => $name_vn,
        'name_eng' => $name_eng,
        'description' => $description,
        'content' => $content,
        'price' => $price,
        'img' => $imageName,
        'status' => $status,
    )
);
header("location: http://localhost/floorsy/admin-floorsy/source/product/index.php");

?>