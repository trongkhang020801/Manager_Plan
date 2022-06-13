<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>TSHOP</title>
  <base href="http://localhost/ShopDH/">
  <!-- Custom fonts for this template-->
  <link href="public/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Concert+One&family=Monda:wght@700&family=Rubik:ital,wght@0,500;0,600;0,700;1,800&display=swap" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="public/css/sb-admin-2.min.css" rel="stylesheet" type="text/css">
  <script src="public/vendor/jquery/jquery.min.js"></script>

  <!-- summernote-->
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
  <!-- Data table -->
  <link type="text/css" rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">

  <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
  <link rel="stylesheet" href="public/css/admin.css">
</head>

<body id="page-top">
  <!-- Page Wrapper -->
  <div id="wrapper">

    <?php require_once('./mvc/views/components/admin/menu.php');
    ?>

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">
        <?php require_once('./mvc/views/components/admin/header.php');
        ?>
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 table-name">
            <?php
            $arr = explode('/', $data['component']);
            switch ($arr[0]) {
              case 'account':
                echo 'Quản Lý Tài Khoản';
                break;
              case 'product':
                echo 'Quản Lý Sản Phẩm';
                break;
              case 'product_type':
                echo 'Quản Lý Loại Sản Phẩm';
                break;
              case 'order':
                echo 'Quản Lý Hóa Đơn';
                break;
              case 'category':
                echo 'Quản Lý Danh Mục Sản Phẩm';
                break;
                case 'khuyenmai':
                  echo 'Quản Lý Khuyến Mãi';
                  break;
              default :  echo 'Trang chủ';
            }
            ?>
          </h1>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">

            <div class="card-body">
              <div class="table-responsive">
                <?php
                require_once('./mvc/views/components/admin/' . $data['component'] . '.php') ?>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- /.container-fluid -->

      <!-- End of Main Content -->


      <!-- Bootstrap core JavaScript-->
      <script src="public/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

      <!-- Core plugin JavaScript-->
      <script src="public/vendor/jquery-easing/jquery.easing.min.js"></script>

      <!-- Custom scripts for all pages-->
      <script src="public/js/admin/sb-admin-2.min.js"></script>

      <!-- Page level plugins -->
      <script src="public/vendor/chart.js/Chart.min.js"></script>

      <!-- Page level custom scripts -->
      <script src="public/js/admin/chart-area-demo.js"></script>
      <script src="public/js/admin/chart-pie-demo.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
      <script src="public/js/admin/index.js"></script>

</body>

</html>