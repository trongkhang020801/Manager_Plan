<?php $products = json_decode($data['productInfo']); ?>

<section class="page-title-area bg-image ptb--80" data-bg-image="public/frontend/img/bg/page_title_bg.jpg">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="page-title">PRODUCT</h1>
                <ul class="breadcrumb">
                    <li><a href="hone">Home</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb area End -->

<!-- Main Content Wrapper Start -->
<div class="main-content-wrapper">
    <div class="page-content-inner pt--80 pt-md--60">
        <div class="container">
            <div class="row no-gutters mb--70 mb-md--57">
                <div class="col-lg-7 product-main-image">
                    <div class="product-image">
                        <div class="product-gallery">
                            <div class="product-gallery__large-image mb--30">
                                <div class="product-gallery__wrapper">
                                    <div class="element-carousel main-slider image-popup" data-slick-options='{
                                                "slidesToShow": 1,
                                                "slidesToScroll": 1,
                                                "infinite": true,
                                                "arrows": false, 
                                                "asNavFor": ".nav-slider"
                                            }'>
                                        <figure style="width: 683px;">
                                            <img src="<?= $products->image2 ?> " style="width: 683px;height:450px" alt="Product">
                                        </figure>
                                        <figure>
                                            <img src="<?= $products->image3 ?>" style="width: 683px;height:450px" alt="Product">
                                        </figure>
                                        <figure>
                                            <img src="<?= $products->image4 ?>" style="width: 683px;height:450px" alt="Product">
                                        </figure>
                                    </div>
                                </div>
                            </div>
                            <div class="product-gallery__nav-image">
                                <div class="element-carousel nav-slider product-slide-nav slick-vertical-center" data-slick-options='{
                                            "spaceBetween": 30,
                                            "slidesToShow": 3,
                                            "slidesToScroll": 1,
                                            "swipe": true,
                                            "infinite": true,
                                            "focusOnSelect": true,
                                            "asNavFor": ".main-slider",
                                            "arrows": true, 
                                            "prevArrow": {"buttonClass": "slick-btn slick-prev", "iconClass": "la la-angle-left" },
                                            "nextArrow": {"buttonClass": "slick-btn slick-next", "iconClass": "la la-angle-right" }
                                        }' data-slick-responsive='[
                                            {
                                                "breakpoint":767, 
                                                "settings": {
                                                    "slidesToShow": 4
                                                } 
                                            },
                                            {
                                                "breakpoint":575, 
                                                "settings": {
                                                    "slidesToShow": 3
                                                } 
                                            },
                                            {
                                                "breakpoint":480, 
                                                "settings": {
                                                    "slidesToShow": 2
                                                } 
                                            }
                                        ]'>
                                    <figure class="product-gallery__nav-image--single">
                                        <img src="<?= $products->image2 ?>" alt="Products">
                                    </figure>
                                    <figure class="product-gallery__nav-image--single">
                                        <img src="<?= $products->image3 ?>" alt="Products">
                                    </figure>
                                    <figure class="product-gallery__nav-image--single">
                                        <img src="<?= $products->image4 ?>" alt="Products">
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 offset-xl-1 col-lg-5 product-main-details mt-md--40">
                    <div class="product-summary pl-lg--30 pl-md--0">
                        <h3 class="product-title mb--20"><?= $products->TenSP ?></h3>
                        <p class="product-short-description mb--20"><?= $products->MoTa ?></p>
                        <div class="product-price-wrapper mb--25">
                            <span class="money"><?php echo number_format($products->GiaBan, 0, ',', '.') ?>₫</span>
                        </div>
                        <form action="cart/addtocart/<?php echo $products->MaSP ?>" class="variation-form mb--20" method="POST">    
                            <div class="product-action d-flex flex-sm-row align-items-sm-center flex-column align-items-start mb--30">
                                <div class="quantity-wrapper d-flex align-items-center mr--30 mr-xs--0 mb-xs--30">
                                    <div class="product-footer-meta">
                                        <p><span>Tình trạng:</span>
                                            <a style="color:#53c66e;"><?php if (($products->SoLuong) > 0) echo 'Còn hàng';
                                                                        else echo 'Hết hàng'  ?></a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="quantity-wrapper d-flex align-items-center mr--30 mr-xs--0 mb-xs--30">
                                <div class="quantity-wrapper d-flex align-items-center mr--30 mr-xs--0 mb-xs--30">
                                    <div class="product-footer-meta">
                                        <button type="btn" class="btn btn-shape-square btn-size-sm">
                                           <a href="cart/addToCart/<?php echo $products->MaSP ?>/1">Thêm vào giỏ hàng</a>
                                        </button>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-shape-square btn-size-sm">
                                    Mua ngay
                                </button>
                            </div>
                        </form>
                        <div class="product-footer-meta">
                            <p><span></span>
                            <p><span>Từ khóa:</span>
                                <a href="shop/men"><?= $products->TenDM ?></a>,
                                <a href="shop/categoryClick/<?= $products->Ten ?>/"><?= $products->Ten ?></a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center mb--77 mb-md--57">
                <div class="col-12">
                    <div class="tab-style-2">
                        <div class="nav nav-tabs mb--35 mb-sm--25" id="product-tab" role="tablist">
                            <a class="nav-link active" id="nav-description-tab" data-toggle="tab" href="#nav-description" role="tab" aria-selected="true">
                                <span>Thông tin sản phẩm</span>
                            </a>
                            <a class="nav-link" id="nav-info-tab" data-toggle="tab" href="#nav-reviews" role="tab" aria-selected="true">
                                <span>Đánh giá</span>
                            </a>
                        </div>
                        <div class="tab-content" id="product-tabContent">
                            <div class="tab-pane fade show active" id="nav-description" role="tabpanel" aria-labelledby="nav-description-tab">
                                <div class="table-content table-responsive">
                                    <table class="table-product">
                                        <tbody>
                                            <tr>
                                                <th>Thương Hiệu:</th>
                                                <td><?= $products->Ten ?></td>
                                            </tr>
                                            <tr>
                                                <th class="th-tabe-product">Xuất Xứ:</th>
                                                <td><?= $products->XuatXu ?></td>
                                            </tr>
                                            <tr>
                                                <th class="th-tabe-product">Giới tính:</th>
                                                <td><?php if (($products->GioiTinh) == 0) echo 'Nam';
                                                    else echo 'Nữ'; ?></td>
                                            </tr>
                                            <tr>
                                                <th class="th-tabe-product">Kính:</th>
                                                <td><?= $products->LoaiKinh ?></td>
                                            </tr>
                                            <tr>
                                                <th class="th-tabe-product">Máy:</th>
                                                <td><?= $products->LoaiMay ?></td>
                                            </tr>
                                            <tr>
                                                <th class="th-tabe-product">Đường Kính Mặt Số:</th>
                                                <td><?= $products->DKMS ?></td>
                                            </tr>
                                            <tr>
                                                <th class="th-tabe-product">Bề Dày Mặt Số:</th>
                                                <td><?= $products->BDMS ?></td>
                                            </tr>
                                            <tr>
                                                <th class="th-tabe-product">Dây Đeo: </th>
                                                <td><?= $products->DayDeo ?></td>
                                            </tr>
                                            <tr>
                                                <th class="th-tabe-product">Chống Nước:</th>
                                                <td><?php if (($products->ChongNuoc) == 1) echo 'Có';
                                                    else echo 'Không'; ?></td>
                                            </tr>
                                            <tr>
                                                <th class="th-tabe-product">Chức Năng Thêm:</th>
                                                <td><?= $products->ChucNangKhac ?></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-reviews" role="tabpanel" aria-labelledby="nav-reviews-tab">
                                <div class="product-reviews">
                                    <h3 class="review__title">1 đánh giá về sản phẩm</h3>
                                    <ul class="review__list">
                                        <li class="review__item">
                                            <div class="review__container">
                                                <img src="public/img/others/avatar-large-2.png" alt="Review Avatar" class="review__avatar">
                                                <div class="review__text">
                                                    <div class="d-flex flex-sm-row flex-column justify-content-between">
                                                        <div class="review__meta">
                                                            <strong class="review__author">Thịnh huỳnh </strong>
                                                            <span class="review__dash">-</span>
                                                            <span class="review__published-date">2022-01-01</span>
                                                        </div>
                                                        <div class="product-rating">
                                                            <div class="star-rating star-five">
                                                                <span>Rated <strong class="rating">5.00</strong> out of 5</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <p class="review__description">Sản phẩm rất tốt :))</p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="review-form-wrapper">
                                        <div class="row">
                                            <div class="col-lg-8">
                                                <form action="#" class="form pr--30">
                                                    <div class="form__group mb--10 pb--1">
                                                        <div class="rating">
                                                            <span><i class="la la-star"></i></span>
                                                            <span><i class="la la-star"></i></span>
                                                            <span><i class="la la-star"></i></span>
                                                            <span><i class="la la-star"></i></span>
                                                            <span><i class="la la-star"></i></span>
                                                        </div>
                                                    </div>
                                                    <div class="form__group mb--10">
                                                        <label class="form__label d-block" for="email">Your Review<span class="required">*</span></label>
                                                        <textarea name="review" id="review" class="form__input form__input--textarea"></textarea>
                                                    </div>
                                                    <div class="form__group">
                                                        <div class="form-row">
                                                            <div class="col-12">
                                                                <input type="submit" value="Đánh giá" class="btn btn-size-md">
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
            </div>
        </div>
    </div>
</div>