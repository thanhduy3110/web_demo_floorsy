<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    $level = "../../";
    include $level . "template/layouts/head.php";
    ?>
</head>

<body>
    <?php
    include $level . "template/layouts/header.php";
    include "../../libs/config.php";

    $DB = new config();
    $id = isset($_GET['id']) ? $_GET['id'] : '';
    $news = $DB->get_list('select * from table_news where id = ' . $id);
    foreach ($news as $new)
    ?>

    <div class="bg-secondary rounded h-100 p-4">
        <h6 class="mb-4">Form Sửa Sản Phẩm</h6>
        <form action="edit.php" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Tên Tiếng Việt</label>
                <input type="hidden" name="id"value="<?php echo $new['id']; ?>">
                <input type="hidden" name="status"value="<?php echo $new['status']; ?>">
                <input type="text" class="form-control" name="name_vn" value="<?php echo $new['name_vn']; ?>"
                    aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Tên Tiếng Anh</label>
                <input type="text" class="form-control" name="name_eng" value="<?php echo $new['name_eng']; ?>"
                    aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Tên Tiêu đề</label>
                <input type="text" class="form-control" name="title" value="<?php echo $new['title']; ?>"
                    aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Mô Tả</label>
                <textarea class="form-control" placeholder="" name="description"
                    style="height: 100px;"><?php echo $new['description'] ?></textarea>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nội Dung</label>
                <textarea class="form-control" placeholder="" name="content"
                    style="height: 150px;"><?php echo $new['content'] ?></textarea>
            </div>
            <button type="submit" class="btn btn-primary" name="edit">Sửa</button>
        </form>
    </div>


    <?php include $level . "template/layouts/footer.php"; ?>
</body>

</html>