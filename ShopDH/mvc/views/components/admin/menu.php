 <!-- Sidebar -->
 <?php 
  $arr = isset(explode('/', $_GET['url'])[1])? explode('/', $_GET['url'])[1] : 'home';
 ?>
 <ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
  <div class="sidebar-brand-icon rotate-n-15">
    <i class="fas fa-laugh-wink"></i>
  </div>
  <div class="sidebar-brand-text mx-3">T<sup>STORE</sup></div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
  Chức năng
</div>

<!-- Nav Item - Pages Collapse Menu -->
<?php if (isset($_SESSION['isAdmin']) && $_SESSION['isAdmin'] == true) { ?>
<li class="nav-item <?=$arr == 'home'? 'active' : ''?> ">
  <a class="nav-link" href="admin">
    <i class="fas fa-fw fa-chart-area"></i>
    <span>Trang chủ</span></a>
</li>
<?php } ?>
<!-- Nav Item - Charts -->
<?php if (isset($_SESSION['isAdmin']) && $_SESSION['isAdmin'] == true) { ?>
  
  <li class="nav-item <?=$arr == 'account'? 'active' : ''?>">
  <a class="nav-link " href="admin/account">
    <i class="fas fa-fw fa-table"></i>
    <span>Quản lý Tài khoản</span></a>
</li>
<?php } ?>
<!-- Nav Item - Tables -->
<li class="nav-item <?=$arr == 'product'? 'active' : ''?>">
  <a class="nav-link" href="admin/product">
    <i class="fas fa-fw fa-table"></i>
    <span>Quản lý Sản phẩm</span></a>
</li>

<li class="nav-item <?=$arr == 'producttype'? 'active' : ''?>">
  <a class="nav-link" href="admin/producttype">
    <i class="fas fa-fw fa-table"></i>
    <span>Quản lý Loại sản phẩm</span></a>
</li>

<li class="nav-item <?=$arr == 'order'? 'active' : ''?>">
  <a class="nav-link" href="admin/order">
    <i class="fas fa-fw fa-table"></i>
    <span>Xét duyệt hóa đơn</span></a>
</li>

<li class="nav-item <?=$arr == 'category'? 'active' : ''?>">
  <a class="nav-link" href="admin/category">
    <i class="fas fa-fw fa-table"></i>
    <span>Quản lý danh mục</span></a>
</li>



<li class="nav-item <?=$arr == 'khuyenmai'? 'active' : ''?>">
  <a class="nav-link" href="admin/khuyenmai">
    <i class="fas fa-fw fa-table"></i>
    <span>Quản lý khuyến mãi</span></a>
</li>
<!-- Sidebar Toggler (Sidebar) -->
</ul>
<!-- End of Sidebar -->