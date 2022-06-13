<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>BQ Store Admin - Dashboard</title>
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
    <link rel="stylesheet" href="public/css/reset.css">
    <link rel="stylesheet" href="public/css/print.css">
</head>
<?php
$orderDetails = json_decode($data['orderDetail']);
?>

<body id="page-top">
    <!-- Page Wrapper -->
    <div class="wrapper">
        <header>
            <div class="header-left">
                <h2> TSHOP</h2>
                <h5> Cửa Hàng Chuyên Cung Cấp D</h5>
            </div>
            <div class="header-mid">
                <h1> Hóa Đơn</h1>
                <h5> (Bản thể hiện của hóa đơn điện tử)</h5>
                <h5> Ngày 14 tháng 1 năm 2022</h5>
            </div>
            <div class="header-right">
                <p> Mẫu số: xx/BQSTORE</p>
                <p> Ký hiệu: xxxx</p>
                <p> Số: 1110x</p>
                <p> ID Hóa Đơn: <?=$orderDetails[0]->id_hd?></p>
            </div>

        </header>
        <div class="body">
            <p> Tên khách hàng: <?=$orderDetails[0]->hoten?></p>
            <p> Địa chỉ: <?=$orderDetails[0]->diachi?></p>
            <p> Số điện thoại: <?=$orderDetails[0]->sdt?></p>
        </div>
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th scope="col">Mã Sản Phẩm</th>
                    <th scope="col">Tên Sản Phẩm</th>
                    <th width='100px'scope="col">Ảnh Sản Phẩm</th>
                    <th scope="col">Đơn Giá</th>
                    <th scope="col">Số lượng</th>
                    <th scope="col">Thành tiền</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($orderDetails as $row) { ?>
                    <tr>
                        <td><?= $row->id_sp ?></td>
                        <td><?= $row->TenSP ?></td>
                        <td>
                            <img style='background: #f5f5f5' width='100px' height='100px' src="<?= $row->image1 ?>" alt="">
                        </td>
                        <td><?= number_format($row->GiaBan) ?> VNĐ</td>
                        <td><?= $row->soluongdat?></td>
                        <td><?= number_format($row->tongtien) ?> VNĐ</td>
                    </tr>
                <?php } ?>
        </table>
    </div>
    <script> 
        window.print()
</script>
</body>

</html>