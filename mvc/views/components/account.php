<div class="main">
    <section id="content">
        <div class="container rounded bg-white mt-5 mb-5">
            <div class="row">
                <div style="max-width: 300px;">
                    <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" src="https://meovatcuocsong.vn/wp-content/uploads/2019/03/avatar-facebook-dep-29.jpg">
                    <button style="margin-top: 20px;"><a href="#" >Uploads File</a></button></div>
                </div>
                <div style="max-width: 700px;">
                <form action="account/changeProfile" method="POST">
                    <div class="p-3 py-5">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h4 class="text-right">Trang cá nhân</h4>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-12"><label class="labels">Tên</label><input type="text" class="form-control"  value="<?php echo $_SESSION['login']['tenNV']?>" name="name"></div>
                        </div>
                        <div class="row mt-3">
                                <div class="col-md-6">
                                    <label class="labels">Giới tính</label>
                                    <div>
                                        <input class="btn-radio" <?php if($_SESSION['login']['gioiTinh']==1) echo "checked";?> type="radio" name="gender" value="1">
                                        <label for="male"> Nam </label>
                                        <input class="btn-radio"  type="radio" <?php if($_SESSION['login']['gioiTinh']==0) echo "checked";?>   name="gender" value="0">
                                        <label for="female"> Nữ</label>
                                        <input class="btn-radio" type="radio" <?php if($_SESSION['login']['gioiTinh']>1) echo "checked";?>  name="gender" value="2">
                                        <label for="other"> Khác </label>
                                    </div>
                                </div>
                                <div class="col-md-6"><label class="labels">Ngày sinh</label><input type="date" 
                                 class="form-control" value="<?php echo $_SESSION['login']['ngaySinh']?>" name="old"></div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-12"><label class="labels">Địa chỉ</label><input type="text" class="form-control"  value="<?php echo $_SESSION['login']['diaChi']?>" name="address"></div>
                            <div class="col-md-12"><label class="labels">Số điện thoại</label><input type="text" class="form-control"  value="<?php echo $_SESSION['login']['SDT']?>" name="sdt"></div>
                            <div class="col-md-12"><label class="labels">Căng cước công dân</label><input type="text" class="form-control"  value="<?php echo $_SESSION['login']['CCCD']?>" name="cccd"></div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-6"><label class="labels">Tài khoảng</label><input type="text" class="form-control"  value="<?php echo $_SESSION['login']['taiKhoang']?>" name="user"></div>
                            <div class="col-md-6"><label class="labels">Mật khẩu</label><input type="password" class="form-control" value="<?php echo $_SESSION['login']['matKhau']?>" name="pass"></div>
                        </div>
                        <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="submit">Lưu thay đổi</button></div>
                    </div>
                </form>
                </div>
            </div>
        </div>
</div>
</div>
</section>
</div>