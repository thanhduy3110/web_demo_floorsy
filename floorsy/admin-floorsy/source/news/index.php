<?php
define("layouts","template/layouts/");
 ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    $level = "../../";
    include $level .layouts."head.php";
    ?>
</head>

<body>
    <?php
    include $level .layouts."header.php";
    include "../../libs/config.php";

    $DB = new config();

    $news = $DB->get_list('select * from table_news where status=1');
    ?>

    <div class="col-12">
        <div class="bg-secondary rounded h-100 p-4">
            <h6 class="mb-4">News Table</h6>
            <a href="form_create.php">
                <button type="button" class="btn btn-success m-2">
                    Thêm mới
                </button>
            </a>
            <button type="submit" class="btn btn-success m-2" id="btnCheckAll">Chọn tất cả
            </button>
            <button type="submit" class="btn btn-success m-2" id="btnUnCheckAll">Bỏ chọn tất cả
            </button>

            <div class="check-delete">
                <form action="delete.php" method="POST" class="btn-member">
                    <input type="hidden" name="idAll" id="idAll" value="" />
                    <button type="submit" class="btn btn-success m-2" id="btn">Xoá đã chọn
                    </button>
                </form>
            </div>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Check</th>
                            <th scope="col">STT</th>
                            <th scope="col">Tên VN</th>
                            <th scope="col">Tên English</th>
                            <th scope="col">Tiêu đề</th>
                            <th scope="col">Mô tả</th>
                            <th scope="col">Nội dung</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($news as $new) { ?>
                            <tr class="text-product">
                                <td>
                                    <input type="checkbox" class="check-delete" name="idProduct"
                                        value="<?php echo $new['id'] ?>">
                                </td>
                                <th scope="row">
                                    <?php echo $new['id'] ?>
                                </th>
                                <td>
                                    <?php echo $new['name_vn'] ?>
                                </td>
                                <td>
                                    <?php echo $new['name_eng'] ?>
                                </td>
                                <td>
                                    <?php echo $new['title'] ?>
                                </td>
                                <td>
                                    <?php echo $new['description'] ?>
                                </td>
                                <td>
                                    <?php echo $new['content'] ?>
                                </td>
                                <td>
                                    <a href="form_edit.php?id=<?php echo $new['id']; ?>">
                                        <button type="submit" class="btn btn-outline-success btn-icon-text">
                                            <i class="mdi mdi-file-check btn-icon-prepend"></i> Sửa
                                        </button>
                                    </a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <?php include $level .layouts."footer.php"; ?>
</body>

</html>