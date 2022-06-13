<header class="header">
    <div class="header__inner fixed-header">
        <div class="header__main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="header__main-inner">
                            <div class="header__main-left">
                                <div class="logo">
                                    <a href="home" class="logo--normal">
                                        <img src="public/img/logo/logo.png" alt="Logo">
                                    </a>
                                </div>
                            </div>
                            <div class="header__main-center">
                                <nav class="main-navigation text-center d-none d-lg-block">
                                    <ul class="mainmenu">
                                        <li class="mainmenu__item menu-item-has-children megamenu-holder">
                                            <a href="shop/men" class="mainmenu__link">
                                                <span class="mm-text">Nam</span>
                                            </a>
                                        </li>
                                        <li class="mainmenu__item menu-item-has-children megamenu-holder">
                                            <a href="shop/women" class="mainmenu__link">
                                                <span class="mm-text">Nữ</span>
                                            </a>
                                        </li>
                                        <li class="mainmenu__item menu-item-has-children megamenu-holder">
                                            <a href="shop/accessory" class="mainmenu__link">
                                                <span class="mm-text">Phụ kiện</span>
                                            </a>
                                        </li>
                                        <li class="mainmenu__item menu-item-has-children">
                                            <a href="#" class="mainmenu__link">
                                                <span class="mm-text">Giới thiệu</span>
                                            </a>
                                        </li>
                                        <?php if (isset($_SESSION['login'])) { ?>
                                            <li class="mainmenu__item menu-item-has-children">
                                                <a href="account" class="mainmenu__link">
                                                    <span class="mm-text"><?php echo $_SESSION['login']['HoTen'] ?> </span>
                                                </a>
                                            </li>
                                        <?php } else { ?>
                                            <li class="mainmenu__item menu-item-has-children">
                                                <a href="login" class="mainmenu__link">
                                                    <span class="mm-text">Đăng nhập </span>
                                                </a>
                                            </li>
                                        <?php } ?>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="offcanvas-menu-wrapper" id="offcanvasMenu">
    <div class="offcanvas-menu-inner">
        <a href="" class="btn-close">
            <i class="la la-remove"></i>
        </a>
        <nav class="offcanvas-navigation">
            <ul class="offcanvas-menu">
                <li class="menu-item-has-children active">
                    <a href="shop">Nam</a>
                </li>
                <li class="menu-item-has-children">
                    <a href="#">Nữ</a>
                </li>
                <li class="menu-item-has-children">
                    <a href="#">Phụ kiện</a>
                </li>
                <li class="menu-item-has-children">
                    <a href="#">Giới thiệu/a>
                </li>
                <li class="menu-item-has-children">
                    <a href="#">Đăng nhập</a>
                </li>
            </ul>
        </nav>
    </div>
</div>