<!doctype html>
<html class="no-js" lang="zxx">
 
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>TShop</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicons -->
    <base href="http://localhost/ShopDH/">

    <!-- ************************* CSS Files ************************* -->

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="public/css/vendor.css">

    <!-- style css -->
    <link rel="stylesheet" href="public/css/main.css">
</head>
<body>
  <div class="wrapper">
    <!-- header -->
    
    <?php
          include('./mvc/views/components/header.php');
    ?>
    <!-- end header  -->

    <!-- main -->
    <main>
    <?php
          include('./mvc/views/components/myAccount.php');
    ?>
    <main>
    <!-- end footer  -->

    <!-- footer -->
    <footer class="footer bg-color" data-bg-color="#000">
        <?php include('./mvc/views/components/footer.php');?>
    </footer>
    <!-- end footer  -->
  </div>
   <!-- ************************* JS Files ************************* -->

    <!-- jQuery JS -->
    <script src="public/js/vendor.js"></script>

    <!-- Main JS -->
    <script src="public/js/main.js"></script>
    <?php 
        if(isset($_SESSION['profile'])){
            $kq=$_SESSION['profile'];
            echo "<script>alert('$kq')</script>";
            unset($_SESSION['profile']); 
        }
        if(isset($_SESSION['pass'])){
          $kq=$_SESSION['pass'];
          echo "<script>alert('$kq')</script>";
          unset($_SESSION['pass']); 
        }
        if(isset($_SESSION['delorder'])){
          $kq=$_SESSION['delorder'];
          echo "<script>alert('$kq')</script>";
          unset($_SESSION['delorder']); 
        }
    ?>
</body>
</html>