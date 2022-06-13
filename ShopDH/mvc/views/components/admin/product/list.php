<?php if (isset($_SESSION['isAdmin']) && $_SESSION['isAdmin'] == true) { ?>
<a href="admin/product/add" type="button" class="btn btn-primary">Thêm mới</a>
<?php } ?>
<?php if (isset($_COOKIE['msg'])) { ?>
  <div class="alert alert-success">
    <strong>Thông báo</strong> <?= $_COOKIE['msg'] ?>
  </div>
<?php } 
  $products = json_decode($data['productList']);
?>
<hr>
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
  <thead>
    <tr>
      <th scope="col">Mã sản phẩm</th>
      <th scope="col">Tên sản phẩm</th>
      <th scope="col">Giá thành</th>
      <th scope="col">Số lượng</th>
      <th scope="col">Mô Tả</th>
      <th class="function-table"> Chức năng</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($products as $row) { ?>
      <tr>
        <th scope="row" width='40px'><?= $row->MaSP ?></th>
        <td><?= $row->TenSP ?></td>
        <td><?= $row->GiaBan ?> VNĐ</td>
        <td><?= $row->SoLuong ?></td>
        <td><?= $row->MoTa?> </td>
        <td>
          <a href="product/detail/<?=$row->TenSP.'/'.$row->Masp ?>" type="button" class="btn btn-success">Xem</a>
          <?php if (isset($_SESSION['isAdmin']) && $_SESSION['isAdmin'] == true) { ?>
          <a href="admin/product/edit&id=<?= $row->MaSP ?>" type="button" class="btn btn-warning">Sửa</a>
          <a href="admin/product/delete&id=<?= $row->MaSP ?>" onclick="return confirm('Bạn có thật sự muốn xóa ?');" type="button" class="btn btn-danger">Xóa</a>
          <?php } ?>
        </td>
      </tr>
    <?php } ?>
  </tbody>
</table>
<script>
  $(document).ready(function() {
    $('#dataTable').DataTable();
  });
</script>