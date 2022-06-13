<?php $products = json_decode($data['new']); ?>

<section class="homepage-slider mb--75 mb-md--55">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="element-carousel slick-right-bottom"
                data-slick-options='{
                    "slidesToShow": 1, 
                    "arrows": true,
                    "prevArrow": {"buttonClass": "slick-btn slick-prev", "iconClass": "la la-arrow-left" },
                    "nextArrow": {"buttonClass": "slick-btn slick-next", "iconClass": "la la-arrow-right" }
                }' 
                data-slick-responsive='[{"breakpoint": 768, "settings": {"arrows": false}}]'>
                    <div class="item">
                        <div class="single-slide d-flex align-items-center bg-color" data-bg-color="#000">
                            <div class="row align-items-center no-gutters w-100">
                                <div class="col-xl-7 col-md-6 mb-sm--50">
                                    <figure data-animation="fadeInUp" data-duration=".3s" data-delay=".3s" class="plr--15">
                                        <img src="<?=$products->image4?>" alt="Slider O1 image" class="mx-auto">
                                    </figure>
                                </div>
                                <div class="col-md-6 col-lg-5 offset-lg-1 offset-xl-0">
                                    <div class="slider-content">
                                        <div class="slider-content__text mb--40 mb-md--30">
                                            <p class="mb--20" data-animation="fadeInUp" data-duration=".3s" data-delay=".3s">Sản phẩm mới nhất</p>
                                            <h1 class="heading__primary lh-pt7" data-animation="fadeInUp" data-duration=".3s" data-delay=".3s"><?=$products->TenSP?></h1>
                                        </div>
                                        <div class="slider-content__btn">
                                            <a href="shop/detail/<?php echo $products->TenSP ?>?id=<?php echo $products->MaSP ?>" class="btn btn-outline btn-brw-2" data-animation="fadeInUp" data-duration=".3s" data-delay=".6s" data-color="#fff">Xem sản  phẩm</a>
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
</section>