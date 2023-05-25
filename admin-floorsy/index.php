<?php

define("layouts","template/layouts/");
include_once "libs/functions.php";

 ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>
    <?php
    $level = "";

    ?>
    <?php include $level.layouts."head.php"; ?>
</head>

<body>
    <?php include $level.layouts."header.php"; ?>

    <?php include $level.layouts."footer.php"; ?>
</body>

</html>