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
    $products = $DB->get_list('select * from table_product where id = ' . $id);
    foreach ($products as $product)
    ?>

    <div class="bg-secondary rounded h-100 p-4">
        <h6 class="mb-4">Form Sửa Sản Phẩm</h6>
        <form action="edit.php" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Tên Tiếng Việt</label>
                <input type="hidden" name="id"value="<?php echo $product['id']; ?>">
                <input type="hidden" name="imgs"value="<?php echo $product['img']; ?>">
                <input type="hidden" name="status"value="<?php echo $product['status']; ?>">
                <input type="text" class="form-control" name="name_vn" value="<?php echo $product['name_vn']; ?>"
                    aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Tên Tiếng Anh</label>
                <input type="text" class="form-control" name="name_eng" value="<?php echo $product['name_eng']; ?>"
                    aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Mô Tả</label>
                <textarea class="form-control" placeholder="" name="description"
                    style="height: 100px;"><?php echo $product['description'] ?></textarea>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nội Dung</label>
                <textarea class="form-control" placeholder="" name="content"
                    style="height: 150px;"><?php echo $product['content'] ?></textarea>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Giá</label>
                <input type="text" class="form-control" name="price" value="<?php echo $product['price']; ?>"
                    aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="formFile" class="form-label">Hình Ảnh Sản Phẩm</label>
                <input type="hidden" name="size" value="1000000">
                <input class="form-control bg-dark" type="file" id="img" name="img">
            </div>
            <div class="form-group">
                <img id="image" src="<?php echo $level . "assets/images/" . $product['img'] ?>" alt="no img" class="img-thumbnail"
                    width='400' height='300' />
            </div>
            <button type="submit" class="btn btn-primary" name="edit">Sửa</button>
        </form>
    </div>


    <?php include $level . "template/layouts/footer.php"; ?>
</body>

</html>