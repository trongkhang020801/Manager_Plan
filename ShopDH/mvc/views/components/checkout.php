    <!-- Breadcrumb area Start -->
    <section class="page-title-area bg-image ptb--80" data-bg-image="public/frontend/img/bg/page_title_bg.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <h1 class="page-title">Checkout</h1>
                        <ul class="breadcrumb">
                            <li><a href="index.html">Home</a></li>
                            <li class="current"><span>Checkout</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- Breadcrumb area End -->
    <?php if(isset($_SESSION['success'])) { unset($_SESSION['success']); ?>
    <h3 class="checkout-success">Bạn đã đặc hàng thành công</h3>
    <?php } else { ?>
        <!-- Main Content Wrapper Start -->
    <div class="main-content-wrapper">
            <div class="page-content-inner pt--80 pt-md--60 pb--72 pb-md--60">
                <div class="container">
                <form action="checkout/getCheckOut" class="form form--checkout" method="POST">
                    <div class="row">
                        <!-- Checkout Area Start -->  
                        <div class="col-lg-6">
                            <div class="checkout-title mt--10">
                                <h2>Địa chỉ nhận hàng</h2>
                            </div>
                            <div class="checkout-form">
                               
                                    <div class="form-row mb--20">
                                        <label for="billing_company" class="form__label">Họ tên</label>
                                        <input type="text" name="name" id="billing_company" class="form__input" value='<?php echo $_SESSION['login']['HoTen'] ?>'>
                                    </div>
                                    <div class="form-row mb--20">
                                        <div class="form__group col-12">
                                            <label for="billing_company" class="form__label">Email</label>
                                            <input type="text" name="email" id="billing_company" class="form__input" value='<?php echo $_SESSION['login']['Email'] ?>'>
                                        </div>
                                    </div>
                                    <div class="form-row mb--20">
                                        <div class="form__group col-12">
                                            <label for="billing_company" class="form__label">sdt</label>
                                            <input type="text" name="sdt" id="billing_company" class="form__input" value='<?php echo $_SESSION['login']['SDT'] ?>'>
                                        </div>
                                    </div>
                                    <div class="form-row mb--20">
                                        <div class="form__group col-12">
                                            <label for="billing_company" class="form__label">Địa chỉ</label>
                                            <input type="text" name="address" id="billing_company" class="form__input" value='<?php echo $_SESSION['login']['Address'] ?>'>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form__group col-12">
                                            <label for="orderNotes" class="form__label">Ghi chú</label>
                                            <textarea class="form__input form__input--textarea" id="orderNotes" name="note" placeholder="Ghi chú trong hóa đơn"></textarea>
                                        </div>
                                    </div>
                            </div>
                        </div>
                        <div class="col-xl-5 offset-xl-1 col-lg-6 mt-md--40">
                            <div class="order-details">
                                <div class="checkout-title mt--10">
                                    <h2>Hóa đơn của bạn</h2>
                                </div>
                                <div class="table-content table-responsive mb--30">
                                    <table class="table order-table order-table-2">
                                        <tbody>
                                        <?php $tongtien=0; if (isset($_SESSION['product'])) {
                                                        foreach ($_SESSION['product'] as $value) { ?>
                                            <tr>
                                                <th><?php echo $value['name'] ?>
                                                    <strong><span>&#10005;</span><?php echo number_format($value['quantity']) ?></strong>
                                                </th>
                                                <td class="text-right"><?php echo number_format($value['price'], 0, ',', '.') ?> đ</td>
                                                <?php $tongtien+=$value['total']?>
                                            </tr>
                                        <?php } } ?>    
                                        </tbody>
                                        <tfoot>
                                            <tr class="cart-subtotal">
                                                <th>Mã giảm giá</th>
                                                <td class="text-right"><?php if(isset($_SESSION['mgg'])) $mgg=$_SESSION['mgg']; else $mgg=0; echo number_format($mgg, 0, ',', '.'); ?>đ</td>
                                            </tr>
                                            <tr class="shipping">
                                                <th>Phí ship</th>
                                                <td class="text-right">
                                                    <span><?php echo number_format(50000, 0, ',', '.') ?> đ</span>
                                                </td>
                                            </tr>
                                            <tr class="order-total">
                                                <th>Tổng tiền</th>
                                                <td class="text-right"><span class="order-total-ammount"><?php echo number_format($tongtien-$mgg+50000, 0, ',', '.') ?> đ</span>
                                                <input type="hidden" id='mgg'  name="total" value='<?php echo ($tongtien-$mgg+50000);?>'>
                                                </td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                                <div class="checkout-payment">
                                    <form action="#" class="payment-form">
                                        <div class="payment-group mt--20">
                                            <button type="submit" class="btn btn-size-md btn-fullwidth">Đặt hàng</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- Checkout Area End -->
                    </div>
                    </from>
                </div>
                
            </div>
        </div>
        <!-- Main Content Wrapper end -->
    <?php } ?>