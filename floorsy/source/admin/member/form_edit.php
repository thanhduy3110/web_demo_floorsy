<!DOCTYPE html>
<html lang="en">

<head>
<?php include "../template/head.php" ?>
</head>
<?php
include "../../../libs/config.php";

$DB = new config();
    $id = isset($_GET['id']) ? $_GET['id'] : '';
    $members=$DB->get_list('select * from member_information where id = '.$id);
    foreach($members as $member)
?>
<body>
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="page-header">
                <h3 class="page-title"> Thành Viên</h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Forms</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Thành Viên</li>

                    </ol>
                </nav>
            </div>
            <div class="row">

                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Sửa Thành Viên</h4>
                            <form class="forms-sample" action="edit.php" method="POST">
                                <div class="form-group">
                                    <label for="exampleInputName1">Tên thành viên</label>
                                    <input type="hidden" name="id"value="<?php echo $member['id']; ?>">
                                    <input type="text" class="form-control" id="exampleInputName1" name="fullname"
                                        value="<?php echo $member['fullname']; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputName1">Email</label>
                                    <input type="text" class="form-control" id="exampleInputName1" name="email"
                                        value="<?php echo $member['email']; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputName1">Số điện thoại</label>
                                    <input type="text" class="form-control" id="exampleInputName1" name="sdt"
                                        value="<?php echo $member['sdt']; ?>">
                                </div>
                               
                                <div class="form-group">
                                    <label for="exampleInputName1">Password</label>
                                    <input type="text" class="form-control" id="exampleInputName1" name="password"
                                        value="<?php echo $member['password']; ?>">
                                    <input type="hidden" name="status"value="<?php echo $member['status']; ?>">
                                </div>
                                <button type="submit" class="btn btn-primary me-2">Sửa</button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <?php include "../template/footer.php" ?>
</body>

</html>