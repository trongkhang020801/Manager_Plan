<a type="button" class="btn btn-primary btn-filter-order">Tất cả</a>
<a type="button" class="btn btn-primary btn-filter-order">Chưa duyệt</a>
<a type="button" class="btn btn-primary btn-filter-order">Đang giao</a>
<a type="button" class="btn btn-primary btn-filter-order">Đã giao</a>
<?php if (isset($_COOKIE['msg'])) {
?>
  <div class="alert alert-success">
    <strong>Thông báo</strong> <?= $_COOKIE['msg'] ?>
  </div>
<?php } ?>
<hr>
<table class="table table-bordered table-order" id="dataTable" width="100%" cellspacing="0">
  <thead>
    <tr>
      <th scope="col" class="order-id">Mã đơn hàng</th>
      <th scope="col">Tên khách hàng</th>
      <th scope="col">Tổng tiền</th>
      <th scope="col">SĐT</th>
      <th scope="col" class="order-address">Địa chỉ</th>
      <th scope="col">Ngày đặt hàng</th>
      <th scope="col">Trạng thái</th>
      <th class="function-table"> Chức năng</th>
    </tr>
  </thead>
  <tbody>
     
  </tbody>
</table>
<script>
</script>