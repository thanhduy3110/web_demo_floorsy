<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    $level = "../../";
    ?>
    <?php include $level . "template/layouts/head.php"; ?>
</head>

<body>
    <?php include $level . "template/layouts/header.php"; ?>

    <div class="bg-secondary rounded h-100 p-4">
        <h6 class="mb-4">Form Thêm Thông Tin</h6>
        <form action="create.php" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Tên Tiếng Việt</label>
                <input type="text" class="form-control" id="name_vn" name="name_vn" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Tên Tiếng Anh</label>
                <input type="text" class="form-control" id="name_eng" name="name_eng" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Mô Tả</label>
                <textarea class="form-control" placeholder="" id="description" name="description" style="height: 100px;"></textarea>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nội Dung</label>
                <textarea class="form-control" placeholder="" id="content" name="content" style="height: 150px;"></textarea>
            </div>
            <input type="hidden" name="status" value="1">
            <button type="submit" class="btn btn-primary" name="add">Thêm</button>
        </form>
    </div>

    <?php include $level . "template/layouts/footer.php"; ?>
</body>

</html>