
<div style="display: flex; justify-content: space-between;">
<?php
$orderDetails = json_decode($data['orderDetail']);
if ($orderDetails != null) { 
    switch ($orderDetails[0]->trangthai) {
        case 1: ?>   <a  href="admin/order/approve&id=<?= $orderDetails[0]->id_hd ?>&status=2" type="button" class="btn btn-success btn-approve-order">Xác nhận đơn hàng</a> <?php break;
        case 2: ?>   <a  href="admin/order/approve&id=<?= $orderDetails[0]->id_hd ?>&status=3" type="button" class="btn btn-success btn-approve-order">Xác nhận giao hàng</a> <?php break;
    }
    ?>
    <a  href="admin/order/print&id=<?= $orderDetails[0]->id_hd?>" type="button" class="btn btn-success btn-approve-order"> In Hóa Đơn </a>
    </div>
<?php } ?>
<?php if (isset($_COOKIE['msg'])) { ?>
    <div class="alert alert-success">
        <strong>Thông báo</strong> <?= $_COOKIE['msg'] ?>
    </div>
<?php }
?>
<hr>
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <thead>
        <tr>
            <th scope="col">Mã Sản Phẩm</th>
            <th scope="col">Tên Sản Phẩm</th>
            <th scope="col">Ảnh Sản Phẩm</th>
            <th scope="col">Đon Giá</th>
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
                    <img style='background: #f5f5f5' width='200px' height='200px' src="<?= $row->image1 ?>" alt="">
                </td>
                <td><?= number_format($row->GiaBan) ?> VNĐ</td>
                <td><?= $row->soluongdat ?></td>
                <td><?= number_format($row->tongtien) ?> VNĐ</td>
            </tr>
        <?php } ?>
</table>
<script>
    $(document).ready(function() {
        $('#dataTable').DataTable();
    });
</script>