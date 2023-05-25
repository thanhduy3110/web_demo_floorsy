<?php
include "../../../libs/config.php";

$DB = new config();

$listId = explode(" ", $_POST['idAll']);

foreach ($listId as $id) {
    if (!empty($id)) {
        $DB->remove('member_information', 'id=' . $id);
    }
}

header("location: http://localhost/demo-Floorsy/source/admin/member/index.php");

?>