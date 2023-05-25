<?php
include "libs/config.php";
$DB = new config();

$products = $DB->get_list('select * from table_product where status=1');
$news = $DB->get_list('select * from table_news where status=1');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "template/layouts/head.php" ?>
</head>

<body>

    <?php include "template/layouts/header.php" ?>
    <?php include "source/pages/home.php" ?>
    <?php include "template/layouts/footer.php" ?>


</body>

</body>



</html>