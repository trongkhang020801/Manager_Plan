<div class="col-xl-9 col-lg-8 order-lg-2 mb-md--50">
    <div class="shop-toolbar mb--50">
        <div class="row align-items-center">
            <div class="col-md-5 mb-sm--30 mb-xs--10">
                <div class="shop-toolbar__left">
                    <div class="product-ordering">
                        <select class="product-ordering__select ">
                            <option value="0">Tất cả</option>
                            <option value="1">Bán chạy</option>
                            <option value="2">Thấp - Cao</option>
                            <option value="3">Cao - Thấp</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-md-7">
                <div class="shop-toolbar__right d-flex justify-content-md-end justify-content-start flex-sm-row flex-column">
                    <p class="product-pages"><?php if (isset($data['name'])) echo $data['cate'] . '/' . $data['name'] ;
                                                   else
                                                        if (isset($data['name1'])) echo $data['cate'] . '/' . $data['name1'] ;
                                                        else
                                                            if((isset($data['name1'])) and isset($data['name']))
                                                                echo $data['cate'] . '/' . $data['name']. '/' . $data['name1'];
                                                    ?></p>
                </div>
            </div>
        </div>
    </div>
    <div class="shop-products">
        <?php for ($i = 1; $i <= count($products) / 3 + 1; $i++) { ?>
            <div class="row">
                <?php foreach ($products as $key => $product) {
                    if (($key + 1) / 3 > $i) {
                        break;
                    } else {
                        if ($key / 3 >= $i - 1) { ?>
                            <div class="col-xl-4 col-sm-6 mb--50">
                                <div class="ft-product">
                                    <div class="product-inner">
                                        <div class="product-image">
                                            <figure class="product-image--holder">
                                                <img src="<?= $product->image1 ?>" alt="Product">
                                            </figure>
                                            <a href="shop/detail/<?php echo $product->TenSP ?>?id=<?php echo $product->MaSP ?>" class="product-overlay"></a>
                                        </div>
                                        <div class="product-info">
                                            <div class="product-category">
                                                <a href="shop/detail/<?php echo $product->TenSP ?>?id=<?php echo $product->MaSP ?>"><?= $product->TenSP ?></a>
                                            </div>
                                            <h3 class="product-title"><a href="#"><?= $product->TenDM ?></a></h3>
                                            <div class="product-info-bottom">
                                                <div class="product-price-wrapper">
                                                    <span class="money"><?php echo number_format($product->GiaBan, 0, ',', '.') ?>₫</span>
                                                </div>
                                                <a href="cart/addToCart/<?php echo $product->MaSP ?>/2" class="add-to-cart pr--15">
                                                    <i class="la la-plus"></i>
                                                    <span>Thêm vào giỏ hàng</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                <?php }
                    }
                } ?>
            </div>
        <?php } ?>
    </div>
</div>