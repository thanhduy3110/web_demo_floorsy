<!DOCTYPE html>
<html lang="en">

<head>
<link rel="stylesheet" href="../../assets/css/style.css">
</head>

<body>
  
    <div class="main">

        <form action="../admin/member/create.php" method="POST" class="form" id="form-1" name="myForm" onsubmit="return(validate());">

            <p class="desc">Đăng Ký Thành Viên</p>

            <div class="spacer"></div>

            <div class="form-group">
                <label for="fullname" class="form-label">Tên đầy đủ</label>
                <input id="fullname" name="fullname" type="text" placeholder="VD: Thanh Duy" class="form-control">
                <span class="form-message" id="messageName"></span>
            </div>

            <div class="form-group">
                <label for="email" class="form-label">Email</label>
                <input id="email" name="email" type="text" placeholder="VD: email@gmail.com" class="form-control">
                <span class="form-message" id="messageEmail"></span>
            </div>


            <div class="form-group">
                <label for="sdt" class="form-label">Số điện thoại</label>
                <input id="sdt" name="sdt" type="text" placeholder="VD: 0123456789" class="form-control">
                <span class="form-message" id="messageSdt"></span>
            </div>

            <div class="form-group">
                <label for="password" class="form-label">Mật khẩu</label>
                <input id="password" name="password" type="password" placeholder="Nhập mật khẩu" class="form-control">
                <span class="form-message" id="messagePass"></span>
            </div>

            <div class="form-group">
                <label for="password_confirmation" class="form-label">Nhập lại mật khẩu</label>
                <input id="password_confirmation" name="password_confirmation" placeholder="Nhập lại mật khẩu"
                    type="password" class="form-control">
                <span class="form-message" id="messageConf"></span>
            </div>

            <div class="form-group">
                <label for="captcha" class="form-label">Mã Captcha</label>
                <input id="code_captcha" name="code_captcha"type="text" disabled="disabled" class="form-control">
            </div>

            <div class="form-group">
                <label for="captcha" class="form-label">Nhập mã Captcha</label>
                <input id="captcha_confirmation" name="captcha_confirmation"type="text" class="form-control">
                <input type="hidden" name="status" value="1">
                <span class="form-message" id="messageCaptcha"></span>
            </div>

            <button class="form-submit">Đăng ký</button>
        </form>

    </div>

    
</body>
<script src="../../assets/js/function.js"></script>
</html>