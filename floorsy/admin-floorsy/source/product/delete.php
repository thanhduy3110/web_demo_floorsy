<?php
include "../../libs/config.php";

$DB = new config();

$listId = explode(" ", $_POST['idAll']);

foreach ($listId as $id) {
    if (!empty($id)) {
        $DB->remove('table_product', 'id=' . $id);
    }
}

header("location: http://localhost/floorsy/admin-floorsy/source/product/index.php");

?>