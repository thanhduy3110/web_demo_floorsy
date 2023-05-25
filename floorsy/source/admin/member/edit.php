<?php
include "../../../libs/config.php";

$DB = new config();

$id = $_POST['id'];
$fullname = $_POST['fullname'];
$email = $_POST['email'];
$sdt = $_POST['sdt'];
$password = $_POST['password'];
$status = $_POST['status'];
$DB->update(
    'member_information',
    array(
        'fullname' => $fullname,
        'email' => $email,
        'sdt' => $sdt,
        'password' => $password,
        'status' => $status,
    ),'id ='.$id
);

 header("location: http://localhost/floorsy/source/admin/member/index.php");
?>
