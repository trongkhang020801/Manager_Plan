    <!-- Top Sale Area Start -->
    <?php
    $products = json_decode($data['productList']);
    $highpProduct=json_decode($data['highList']);
    ?>

    <section class="top-sale-area mb--75 mb-md--55">
        <div class="container">
            <div class="row mb--35 mb-md--23">
                <div class="col-12 text-center">
                    <h2>Đồ hồ bán chạy</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="element-carousel" data-slick-options='{
                                "spaceBetween": 30,
                                "slidesToShow": 3
                            }' data-slick-responsive='[
                                {"breakpoint": 768, "settings": {"slidesToShow": 2}},
                                {"breakpoint": 480, "settings": {"slidesToShow": 1}}
                            ]'>
                    <?php foreach($highpProduct as $product) { ?>
                        <div class="item">
                            <div class="ft-product">
                                <div class="product-inner">
                                    <div class="product-image">
                                        <figure class="product-image--holder">
                                            <img src="<?=$product->image1?>" alt="Product">
                                        </figure>
                                        <a href="shop/detail/<?php echo $product->TenSP ?>?id=<?php echo $product->MaSP ?>" class="product-overlay"></a>
                                    </div>
                                    <div class="product-info plr--20">
                                        <h3 class="product-title"><a href="shop/detail/<?php echo $product->TenSP ?>?id=<?php echo $product->MaSP ?>"><?=$product->TenSP?></a></h3>
                                        <div class="product-info-bottom">
                                            <div class="product-price-wrapper">
                                                <span class="money"><?php echo number_format($product->GiaBan, 0, ',', '.') ?>₫</span>
                                                <p class="product-number">Đã bán:<i style='color:#ff5151;'><?=$product->soLanMua?>SP</i></p>
                                            </div>
                                            <a href="cart/addToCart/<?php echo $product->MaSP ?>/3" class="add-to-cart">
                                                <i class="la la-plus"></i>
                                                <span>Thêm vào giỏ hàng</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Top Sale Area End -->
    <!-- Product Tab Area Start -->
    <section class="product-tab-area mb--30 mb-md--10">
        <div class="container">
            <div class="row mb--28 mb-md--18 mb-sm--33">
                <div class="col-md-3 text-md-left text-center">
                    <h2><a href="shop">Tất cả sản phẩm</a></h2>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="tab-content" id="product-tab-content">
                    <?php for($i=1;$i<=count($products)/4+1;$i++) {?>
                        <div class="tab-pane fade show active" id="new-all" role="tabpanel" aria-labelledby="new-all-tab">                                                          
                            <div class="row">
                                <?php
                                foreach ($products as $key=>$product) { 
                                    if(($key+1)/4>$i) { break;} 
                                    else{
                                        if($key/4>=$i-1){ ?>
                                    <div class="col-lg-3 col-sm-6 mb--45">
                                        <div class="ft-product HTfadeInUp">
                                            <div class="product-inner">
                                                <div class="product-image">
                                                    <figure class="product-image--holder">
                                                        <img src="<?= $product->image1 ?>" alt="Product">
                                                    </figure>
                                                    <a href="shop/detail/<?php echo $product->TenSP ?>?id=<?php echo $product->MaSP ?>" class="product-overlay"></a>
                                                </div>
                                                <div class="product-info">
                                                    <div class="product-category">
                                                        <a href="shop/detail/<?php echo $product->TenSP ?>?id=<?php echo $product->MaSP ?>"><?=$product->TenSP?></a>
                                                    </div>
                                                    <h3 class="product-title"><a href="shop/<?php if($product->TenDM=='Nữ') echo 'women'; else if($product->TenDM=='Nam') echo 'men'; else echo 'phukien' ?>">
                                                        <?=$product->TenDM?></a></h3>
                                                    <div class="product-info-bottom">
                                                        <div class="product-price-wrapper">
                                                            <span class="money"><?php echo number_format($product->GiaBan, 0, ',', '.') ?>₫</span>
                                                        </div>
                                                        <a href="cart/addToCart/<?php echo $product->MaSP ?>/3" class="add-to-cart pr--15">
                                                            <i class="la la-plus"></i>
                                                            <span>Thêm vào giỏ hàng</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php }} }?>
                            </div>
                        </div>
                    <?php }?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Tab Area End -->