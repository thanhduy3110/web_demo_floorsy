<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "../template/head.php" ?>
</head>
<?php
include "../../../libs/config.php";

$DB = new config();

$menbers = $DB->get_list('select * from member_information where status=1');
?>

<body>
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="page-header">
                <h3 class="page-title">Thông tin thành viên </h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                    </ol>
                </nav>
            </div>

            <div class="template-demo check-delete">

                <form action="delete.php" method="POST" class="btn-member">
                    <input type="hidden" name="idAll" id="idAll" value="" />
                    <button type="submit" class="btn btn-inverse-primary btn-fw" id="btn">Xoá đã chọn
                    </button>
                </form>

                <button type="submit" class="btn btn-inverse-primary btn-fw" id="btnCheckAll">Chọn tất cả
                </button>
                <button type="submit" class="btn btn-inverse-primary btn-fw" id="btnUnCheckAll">Bỏ chọn tất cả
                </button>

            </div>



            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr style="text-align:center">
                                            <th>Check Box</th>
                                            <th> STT </th>
                                            <th>Tên Thành Viên</th>
                                            <th>Email</th>
                                            <th>Số Điện Thoại</th>
                                            <th>Password</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        foreach ($menbers as $member) { ?>
                                            <tr style="text-align:center">
                                                <td>
                                                    <input type="checkbox" class="check-delete" name="idMember"
                                                        value="<?php echo $member['id'] ?>">

                                                </td>
                                                <td>
                                                    <?php echo $member['id']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $member['fullname']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $member['email']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $member['sdt']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $member['password']; ?>
                                                </td>
                                                <td>
                                                    <a href="form_edit.php?id=<?php echo $member['id']; ?>">
                                                        <button type="submit" class="btn btn-outline-success btn-icon-text">
                                                            <i class="mdi mdi-file-check btn-icon-prepend"></i> Sửa
                                                        </button>
                                                    </a>
                                                    <!-- <form action="" method="POST" style="display: inline;">
                                                    <button type="submit"
                                                        onclick="return confirm('Bạn có chắc là muốn xóa loại sản phẩm này ko?"
                                                        class="btn btn-outline-danger btn-icon-text">
                                                        <i class="mdi mdi-delete"></i> Xoá </button>
                                                    </a>
                                                </form> -->
                                                </td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <?php include "../template/footer.php" ?>
</body>

</html>