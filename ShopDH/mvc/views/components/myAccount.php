        <!-- Breadcrumb area Start -->
        <?php $dt=json_decode($data['OrderList']);   
              $Orders=$dt[0];
              $Orderdetail=$dt[1];
        ?>
        <section class="page-title-area bg-image ptb--80" data-bg-image="public/frontend/img/bg/page_title_bg.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <h1 class="page-title">My Account</h1>
                        <ul class="breadcrumb">
                            <li><a href="home">Home</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- Breadcrumb area End -->

        <!-- Main Content Wrapper Start -->
        <div class="main-content-wrapper">
            <div class="page-content-inner ptb--80 ptb-md--60 pb-sm--55">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="user-dashboard-tab flex-column flex-md-row">
                                <div class="user-dashboard-tab__head nav flex-md-column" role="tablist" aria-orientation="vertical">
                                    <a class="nav-link <?php if($data['check']==1) echo 'active' ?>" data-toggle="pill" role="tab" href="#accountdetails" aria-controls="accountdetails" aria-selected="true">Thông tin cá nhân</a>
                                    <a class="nav-link <?php if($data['check']==2) echo 'active' ?>" data-toggle="pill" role="tab" href="#orders" aria-controls="orders" aria-selected="true">Đơn hàng của bạn</a>
                                    <a class="nav-link <?php if($data['check']==3) echo 'active' ?>" data-toggle="pill" role="tab" href="#addresses" aria-controls="addresses" aria-selected="true">Đổi mật khẩu</a>
                                   <?php if (isset($_SESSION['isAdmin']) || isset($_SESSION['isStaff'])) {
                                       ?>
                                    <a class="nav-link"  href="admin"> Trang Quản Trị</a>
                                    <?php }
                                    ?>
                                    <a class="nav-link" href="login/logOut">Đăng xuất</a>
                                </div>
                                <div class="user-dashboard-tab__content tab-content">
                                    <div class="tab-pane fade <?php if($data['check']==1) echo 'show active' ?>" id="accountdetails">
                                        <form action="account/changeProfile" class="form form--account" method="POST">
                                            <div class="row mb--20">
                                                <div class="col-12">
                                                    <div class="form__group">
                                                        <label class="form__label" for="d_name">Họ tên<span class="required">*</span></label>
                                                        <input type="text" name="name" value='<?php echo $_SESSION['login']['HoTen']?>' class="form__input">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb--20">
                                                <div class="col-md-6 mb-sm--20">
                                                    <div class="form__group">
                                                        <label class="form__label" for="f_name">Số điện thoại<span class="required">*</span></label>
                                                        <input type="text" name="sdt" value='<?php echo $_SESSION['login']['SDT']?>' class="form__input">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form__group">
                                                        <label class="form__label" for="l_name">Giới tính<span class="required">*</span></label>
                                                        <input type="text" name="sex" value='<?php echo $_SESSION['login']['GioiTinh']?>' class="form__input">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb--20">
                                                <div class="col-12">
                                                    <div class="form__group">
                                                        <label class="form__label" for="email">Email<span class="required">*</span></label>
                                                        <input type="email" name="email" value='<?php echo $_SESSION['login']['Email']?>' class="form__input">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb--20">
                                                <div class="col-12">
                                                    <div class="form__group">
                                                        <label class="form__label" >Địa chỉ<span class="required">*</span></label>
                                                        <input type="text" name="address" value='<?php echo $_SESSION['login']['Address']?>' class="form__input">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form__group">
                                                        <input type="submit" value="Lưu thay đổi" class="btn btn-size-md">
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="tab-pane fade <?php if($data['check']==2) echo 'show active' ?>" id="orders">
                                        <div class="message-box mb--30 d-none">
                                            <p><i class="fa fa-check-circle"></i>No order has been made yet.</p>
                                            <a href="shop.html">Go Shop</a>
                                        </div>
                                        <div class="table-content table-responsive">
                                            <table class='table-account' >
                                                <thead>
                                                    <tr>
                                                        <th>STT</th>
                                                        <th>Ngày đặc</th>
                                                        <th >Sản phẩm</th>
                                                        <th >Người đặt</th>
                                                        <th>Tổng tiền</th>
                                                        <th>Trang thái</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $i=0; foreach($Orders as $key=>$Order) { ?>
                                                    <tr>
                                                        <td><?php echo ++$i ?></td>
                                                        <td class="wide-column"><?=$Order->ngaydac?></td>
                                                        <td class="wide-column">
                                                        <?php foreach($Orderdetail[$key] as $value) { ?>
                                                            
                                                            <p><a><?=$value->TenSP; ?>:</a><?=$value->soluongdat; ?>x<?php echo number_format($value->GiaBan, 0, ',', '.') ?>₫</p>
                                                           
                                                        <?php } ?>
                                                        </td>
                                                        <td class="wide-column"><?=$Order->hoten?></td>
                                                        <td class="wide-column"><?php echo number_format($Order->tongtien, 0, ',', '.') ?>₫</td>
                                                        <td><?php if($Order->trangthai==1) echo 'Chờ duyệt'; else if($Order->trangthai==2) echo 'Đang giao'; else echo 'Đã giao'; ?></td>   
                                                        <td><?php if($Order->trangthai==1) { ?> 
                                                            <a href="account/deleteOrder/<?php echo $Order->id; ?>" class="btn-huy">Hủy đơn</a><?php } ?></td></td>
                                                    </tr>
                                                    <?php } ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade <?php if($data['check']==3) echo 'show active' ?>" id="addresses">
                                        <form action="account/changepass" method="POST">
                                        <fieldset class="form__fieldset mb--20">
                                            <legend class="form__legend">Password change</legend>
                                            <div class="row mb--20">
                                                <div class="col-12">
                                                    <div class="form__group">
                                                        <label class="form__label" for="cur_pass">Nhập mật khẩu cũ</label>
                                                        <input type="password" name="pass" id="cur_pass" class="form__input">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb--20">
                                                <div class="col-12">
                                                    <div class="form__group">
                                                        <label class="form__label" for="new_pass">Nhập mật khẩu mới</label>
                                                        <input type="password" name="newpass"  class="form__input">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form__group">
                                                        <label class="form__label" for="conf_new_pass">Nhập lại mật khẩu mới</label>
                                                        <input type="password" name="newpass1"  class="form__input">
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>
                                        <div class="row">
                                                <div class="col-12">
                                                    <div class="form__group">
                                                        <input type="submit" value="Lưu thay đổi" class="btn btn-size-md">
                                                    </div>
                                                </div>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main Content Wrapper Start -->