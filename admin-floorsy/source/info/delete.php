<?php
include "../../libs/config.php";

$DB = new config();

$listId = explode(" ", $_POST['idAll']);

foreach ($listId as $id) {
    if (!empty($id)) {
        $DB->remove('table_info', 'id=' . $id);
    }
}

header("location: http://localhost/demo-admin/source/info/index.php");


?>