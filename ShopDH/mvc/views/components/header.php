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
                                            <a href="shop/Pk" class="mainmenu__link">
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
                            <div class="header__main-right">
                                <div class="header-toolbar-wrap">
                                    <div class="header-toolbar">
                                        <form action="shop/search" method="POST">
                                        <div class="search-box">
                                            <div class="input-box">
                                                <input type="text" name='search' placeholder="Nhập từ khóa">
                                            </div>
                                            <div class="search-button">
                                                <button type='submit' style="background: none;border: none;"><img src='public/img/search.png' alt=''></button>
                                            </div>
                                        </div>
                                        </form>
                                        <div class="header-toolbar__item header-toolbar--minicart-btn">
                                            <a href="#miniCart" class="header-toolbar__btn toolbar-btn">
                                                <i class="la la-shopping-cart"></i>
                                            </a>
                                        </div>
                                        <div class="header-toolbar__item d-block d-lg-none">
                                            <a href="#offcanvasMenu" class="header-toolbar__btn toolbar-btn menu-btn">
                                                <div class="hamburger-icon">
                                                    <span></span>
                                                    <span></span>
                                                    <span></span>
                                                    <span></span>
                                                    <span></span>
                                                    <span></span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
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
                    <a href="shop/men">Nam</a>
                </li>
                <li class="menu-item-has-children">
                    <a href="shop/women">Nữ</a>
                </li>
                <li class="menu-item-has-children">
                    <a href="shop/Pk">Phụ kiện</a>
                </li>
                <li class="menu-item-has-children">
                    <a href="#">Giới thiệu</a>
                </li>
                <li class="menu-item-has-children">
                    <a href="#">Đăng nhập</a>
                </li>
            </ul>
        </nav>
    </div>
</div>


<aside class="mini-cart" id="miniCart">
    <div class="mini-cart-wrapper">
        <div class="mini-cart__close">
            <a href="#" class="btn-close"><i class="la la-remove"></i></a>
        </div>
        <div class="mini-cart-inner">
            <h3 class="mini-cart__heading mb--45">Giỏ hàng</h3>
            <div class="mini-cart__content">
                <ul class="mini-cart__list">
                    <?php $tongtien = 0;
                    if (isset($_SESSION['product'])) {
                        foreach ($_SESSION['product'] as $value) { ?>
                            <li class="mini-cart__product">
                                <div class="mini-cart__product-image">
                                    <img src="<?php echo $value['avatar'] ?>" alt="products">
                                </div>
                                <div class="mini-cart__product-content">
                                    <a class="mini-cart__product-title" href="product-details.html">Golden Easy Spot Chair.</a>
                                    <span class="mini-cart__product-quantity"><?php echo number_format($value['quantity']) ?> x <?php echo number_format($value['price'], 0, ',', '.') ?> đ</span>
                                </div>
                                <?php $tongtien += $value['total']; ?>
                            </li>
                    <?php }
                    } ?>
                </ul>
                <div class="mini-cart__total">
                    <span>Tổng tiền</span>
                    <span class="ammount"><?php echo number_format($tongtien, 0, ',', '.') ?> đ</span>
                </div>
                <div class="mini-cart__buttons">
                    <a href="cart" class="btn btn-fullwidth btn-bg-primary mb--20">Xem giỏ hàng</a>
                </div>
            </div>
        </div>
    </div>
</aside>