
<?php    
    $categorys = json_decode($data['categoryList']); 
    $straps = json_decode($data['strapList']);
?>

<div class="col-xl-3 col-lg-4 order-lg-1">
    <aside class="shop-sidebar">
        <div class="shop-widget mb--40">
            <h1 class="widget-title mb--25"><a href="shop">Thương hiệu</a></h1>
            <ul class="widget-list category-list">
                <?php foreach($categorys as $category) {?>
                <li>
                    <a href="shop/categoryClick/<?=$category->Ten?>/<?php 
                        if($data['cate']=="Đồng Hồ Nam") echo 'Nam'; 
                        else 
                            if($data['cate']=="Đồng Hồ Nữ") echo 'Nữ'; 
                            else echo ''; 
                    ?>">
                        <span class="category-title <?php if(isset($data['name']) and $data['name']==$category->Ten) echo 'active' ?>"><?=$category->Ten?></span>
                    </a>
                </li>
                <?php }?>
            </ul>
        </div>
        <div class="shop-widget mb--40">
            <h3 class="widget-title mb--25"><a href="shop">Chất liệu dây</a></h3>
            <ul class="widget-list brand-list">
                <?php foreach($straps as $strap) {?>
                <li>
                    <a href="shop/strapClick/<?=$strap->DayDeo?>/<?php 
                        if($data['cate']=="Đồng Hồ Nam") echo 'Nam'; 
                        else 
                            if($data['cate']=="Đồng Hồ Nữ") echo 'Nữ'; 
                            else echo ''; 
                    ?>">
                        <span class="category-title <?php if(isset($data['name1']) and $data['name1']==$strap->DayDeo) echo 'active' ?>"><?=$strap->DayDeo?></span>
                    </a>
                </li>
                <?php } ?>
            </ul>
        </div>
    </aside>
</div>