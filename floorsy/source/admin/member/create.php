<?php
include "../../../libs/config.php";

$DB = new config();

// $data=[];
// foreach($_POST as $key=>)

$fullname = $_POST['fullname'];
$email = $_POST['email'];
$sdt = $_POST['sdt'];
$password = $_POST['password'];
$status = $_POST['status'];
$DB->insert(
    'member_information',
    array(
        'fullname' => $fullname,
        'email' => $email,
        'sdt' => $sdt,
        'password' => $password,
        'status' => $status,
    )
);
//  header("location: http://localhost/demo-Floorsy/source/admin/member/index.php");
?>