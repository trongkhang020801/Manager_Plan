<div class="main">
        <!-- content -->
        <section id="content">
        <div id="acc">
        <form action="account/changeProfile" method="POST">
            <div class="mb-3" style="margin-top: 10px;">
                <label for="exampleInputEmail1" class="form-label">Họ Tên</label>
                <input type="text" class="form-control" name="name" id="exampleInputEmail1" name aria-describedby="emailHelp"value="<?php echo $_SESSION['login']['tenNV'] ?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Ngày sinh</label>
                <input type="text" class="form-control" name="old" id="exampleInputPassword1" value="<?php echo $_SESSION['login']['ngaySinh'] ?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Địa chỉ</label>
                <input type="text" class="form-control" name="address" id="exampleInputEmail1" aria-describedby="emailHelp"value="<?php echo $_SESSION['login']['diaChi'] ?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">SDT</label>
                <input type="text" class="form-control" name="sdt" id="exampleInputPassword1"value="<?php echo $_SESSION['login']['SDT'] ?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Căn cước công dân</label>
                <input type="text" class="form-control" name="cccd" id="exampleInputEmail1" aria-describedby="emailHelp"value="<?php echo $_SESSION['login']['CCCD'] ?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Tài khoảng</label>
                <input type="text" class="form-control" name="user" id="exampleInputPassword1"value="<?php echo $_SESSION['login']['taiKhoang'] ?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Mật khẩu</label>
                <input type="password" class="form-control" name="pass" id="exampleInputEmail1" aria-describedby="emailHelp"value="<?php echo $_SESSION['login']['matKhau'] ?>">
            </div>
            <button type="submit" class="btn btn-primary" style="margin-bottom: 10px;">Sửa</button>
            <button class="btn btn-primary" style="margin-bottom: 10px;"><a href="login/logOut" style="text-decoration: none; color:white;">Đăng xuất</a></button>
        </form>
        </div>
</div>