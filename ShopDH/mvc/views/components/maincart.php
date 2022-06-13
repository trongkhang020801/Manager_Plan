        <!-- Breadcrumb area Start -->
        <section class="page-title-area bg-image ptb--80" data-bg-image="public/frontend/img/bg/page_title_bg.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <h1 class="page-title">CART</h1>
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
            <div class="page-content-inner ptb--80 pt-md--40 pb-md--60">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 mb-md--50">
                            <form class="cart-form" action="cart/ggCart" method="POST">
                                <div class="row no-gutters">
                                    <div class="col-12">
                                        <div class="table-content table-responsive">
                                            <table class="table text-center">
                                                <thead>
                                                    <tr>
                                                        <th>&nbsp;</th>
                                                        <th>&nbsp;</th>
                                                        <th class="text-left">Sản phẩm</th>
                                                        <th>Giá</th>
                                                        <th>Số lượng</th>
                                                        <th>Tổng tiền</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php 
                                                    if (isset($_SESSION['product'])) {
                                                        foreach ($_SESSION['product'] as $value) { ?>
                                                            <tr>
                                                                <td class="product-remove text-left"><a href="cart/delCart/<?php echo $value['id'] ?>"><i class="la la-remove"></i></a></td>
                                                                <td class="product-thumbnail text-left">
                                                                    <img src="<?php echo $value['avatar'] ?>" alt="Product Thumnail">
                                                                </td>
                                                                <td class="product-name text-left wide-column">
                                                                    <h3>
                                                                        <a href="product-details.php"><?php echo $value['name'] ?></a>
                                                                    </h3>
                                                                </td>
                                                                <td class="product-price">
                                                                    <span class="product-price-wrapper">
                                                                        <span class="money"><?php echo number_format($value['price'], 0, ',', '.') ?> đ</span>
                                                                        <input type="hidden" class='iprice' value='<?php echo $value['price']; ?>'>
                                                                    </span>
                                                                </td>
                                                                <td class="product-quantity">
                                                                    <div class="quantity">
                                                                        <input type="number" class="quantity-input iquantity"  onchange='subTotal()' value="<?php echo number_format($value['quantity']) ?>" min="1">
                                                                    </div>
                                                                </td>
                                                                <td class="product-total-price">
                                                                    <span class="product-price-wrapper">
                                                                        <span class="money itoalt"></span>
                                                                    </span>
                                                                </td>
                                                            </tr>
                                                    <?php }
                                                    } ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="row no-gutters border-top pt--20 mt--20">
                                    <div class="col-sm-6">                          
                                            <div class="coupon">
                                                <input type="text" id="coupon" name="mgg" class="cart-form__input" placeholder="Mã giảm giá">
                                                <button type="submit" class="cart-form__btn">Áp dụng</button>
                                            </div>        
                                    </div>
                                    <div class="col-sm-6 text-sm-right">
                                        <button type="button" class="cart-form__btn"><a href='cart/delCart/-1'>Xóa hết sản phẩm</a></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-lg-4">
                            <div class="cart-collaterals">
                                <div class="cart-totals">
                                    <h5 class="font-size-14 font-bold mb--15">Hóa đơn
                                        <p>Tạm tính (<?php
                                                        if (isset($_SESSION['product']))
                                                            echo count($_SESSION['product']);
                                                        else
                                                            echo 0;
                                                        ?>)</p>
                                    </h5>
                                    <p class="product-total"></p>
                                    <div class="cart-calculator">
                                        <div class="cart-calculator__item order-total">
                                            <span>Mã giảm giá:</span>
                                            <span><?php if(isset($_SESSION['mgg'])) echo number_format($_SESSION['mgg'], 0, ',', '.'); else echo '0' ?>₫</span>
                                            <input type="hidden" id='mgg' value='<?php if(isset($_SESSION['mgg'])) echo $_SESSION['mgg']; else echo '0' ?>'>
                                            <a href="cart/delmgg"><i class="la la-remove" style='margin-left:10px;'></i></a>
                                        </div>
                                        <div class="cart-calculator__item order-total">
                                            <div class="cart-calculator__item--head">
                                                <span>Tổng tiền</span>
                                            </div>
                                            <div class="cart-calculator__item--value">
                                                <span class="product-price-wrapper">
                                                    <span class="money" id="gtotal">đ</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                               
                                <a href="<?php if(isset($_SESSION['login'])) echo 'checkout'; else echo 'login'; ?>" class="btn btn-size-md btn-shape-square btn-fullwidth">
                                    Đặc hàng
                                </a>
                                <p></p>
                                <a href="shop" class="btn btn-size-md btn-shape-square btn-fullwidth">
                                    Tiếp tục mua
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main Content Wrapper end -->