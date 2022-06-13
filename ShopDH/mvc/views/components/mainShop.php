    
    <?php $products = json_decode($data['productList']); ?>
    <!-- Breadcrumb area Start -->
    <section class="page-title-area bg-image ptb--80" data-bg-image="public/frontend/img/bg/page_title_bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="page-title"><a href="shop/<?php if($data['cate']=="Đồng Hồ Nam") echo 'men'; else if($data['cate']=="Đồng Hồ Nữ") echo 'women'; else echo ''; ?>"><?=$data['cate'] ?></a></h1>
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
        <div class="shop-page-wrapper ptb--80">
            <div class="container">
                <div class="row">
                <?php
                    include('./mvc/views/components/product.php');
                    include('./mvc/views/components/category.php');
                ?>
                </div>
            </div>
        </div>
    </div>
    <!-- Main Content Wrapper Start -->