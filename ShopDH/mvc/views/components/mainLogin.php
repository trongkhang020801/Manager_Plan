        <!-- Breadcrumb area Start -->
        <section class="page-title-area bg-image ptb--80" data-bg-image="public/frontend/img/bg/page_title_bg.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <h1 class="page-title">Login &amp; Register</h1>
                        <ul class="breadcrumb">
                            <li><a href="index.html">Home</a></li>
                            <li class="current"><span>Login &amp; Register</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- Breadcrumb area End -->

        <!-- Main Content Wrapper Start -->
        <div class="main-content-wrapper">
            <div class="page-content-inner pt--75 pb--80">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 mb-sm--50">
                            <div class="login-box">
                                <h3 class="heading__tertiary mb--30">Đăng nhập</h3>
                                <p class="check-login"></p>
                                <form class="form form--login" action="login/checkLogin" method="POST">
                                    <div class="form__group mb--20">
                                        <label class="form__label" for="username_email">Tên đăng nhập<span class="required">*</span></label>
                                        <input type="email" class="form__input" id="username_email" name="Username">
                                    </div>
                                    <div class="form__group mb--20">
                                       <label class="form__label" for="login_password">Mật khẩu <span class="required">*</span></label>
                                        <input type="password" class="form__input" id="login_password" name="Pass">
                                    </div>
                                    <div class="d-flex align-items-center mb--20">
                                        <div class="form__group mr--30">
                                            <input type="submit" value="Đăng nhập" class="btn btn-size-sm">
                                        </div>
                                        <div class="form__group">
                                            <label class="form__label checkbox-label" for="store_session">
                                                <input type="checkbox" name="store_session" id="store_session">
                                                <span>Nhớ mật khẩu</span>
                                            </label>
                                        </div>
                                    </div>
                                    <a class="forgot-pass" href="#">Bạn quên mật khẩu?</a>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="register-box">
                                <h4 class="heading__tertiary mb--30">Đăng kí</h4>
                                <form class="form form--login" method="POST" action="login/register">
                                    <div class="form__group mb--20">
                                        <label class="form__label" for="name">Họ Tên<span class="required">*</span></label>
                                        <input type="text" class="form__input" id="email" name="name">
                                    </div>
                                    <div class="form__group mb--20">
                                        <label > Giới tính:  </label>
                                        <label> </label>
                                        <input class="btn-radio" type="radio" id="male" name="gender" value="Nam" required>                                       
                                        <label for="male"> Nam </label>
                                        <input class="btn-radio" type="radio" id="female" name="gender" value="Nữ">
                                        <label for="female"> Nữ</label>
                                        <input class="btn-radio" type="radio" id="other" name="gender" value="Khác">
                                        <label for="other"> Khác </label>
                                    </div>
                                    <div class="form__group mb--20">
                                       <label class="form__label" for="sdt">Số điện thoại<span class="required">*</span></label>
                                        <input type="text" class="form__input" name="phone">
                                    </div>                                  
                                    <div class="form__group mb--20">
                                       <label class="form__label" for="email">Email<span class="required">*</span></label>
                                        <input type="email" class="form__input" name="email">
                                    </div>
                                    <div class="form__group mb--20">
                                       <label class="form__label" for="username">Mật khẩu<span class="required">*</span></label>
                                        <input type="password" class="form__input" name="pass">
                                    </div>
                                    <div class="form__group mb--20">
                                       <label class="form__label" for="register_password">Xát nhận mật khẩu<span class="required">*</span></label>
                                        <input type="password" class="form__input"  name="pass1">
                                    </div>
                                    <p class="privacy-text mb--20">Dữ liệu cá nhân của bạn sẽ được sử dụng để hỗ trợ trải nghiệm của bạn trên toàn bộ trang web này, để quản lý quyền truy cập vào tài khoản của bạn và cho các mục đích khác được mô tả trong chính sách bảo mật của chúng tôi.</p>
                                    <div class="form__group">
                                        <input type="submit" value="Đăng kí" class="btn btn-size-sm">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main Content Wrapper Start -->