<?php 

  if (isset($_SESSION['isAdmin']) && $_SESSION['isAdmin'] == true) { ?>
  <a href="admin/khuyenmai/add" type="button" class="btn btn-primary">Thêm mới</a>
<?php } ?>
<?php if (isset($_COOKIE['msg'])) { ?>
  <div class="alert alert-success">
    <strong>Thông báo</strong> <?= $_COOKIE['msg'] ?>
  </div>
<?php }  $khuyenmai = json_decode($data['listkm']); ?>
<hr>
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

  <thead>
    <tr>
      <th scope="col">Mã khuyến mãi</th>
      <th scope="col">Tên khuyến mãi</th>
      <th scope="col">Loại khuyến mãi</th>
      <th scope="col">Giá trị khuyến mãi</th>
      <th scope="col">Ngày bắt đầu</th>
      <th>Chức năng</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($khuyenmai as $row) { ?>
      <tr>
        <td><?=$row->MaKM?></td>
        <td><?=$row->TenKM?></td>
        <td><?=$row->LoaiKM?></td>
        <td><?=$row->GiaTri?></td>
        <td><?=$row->NgayBD?></td>
        <td>
        <?php if (isset($_SESSION['isAdmin']) && $_SESSION['isAdmin'] == true) { ?>
          <a href="admin/khuyenmai/edit&id=<?= $row->MaKM ?>" class="btn btn-warning">Sửa</a>
          <a href="admin/khuyenmai/delete&id=<?= $row->MaKM ?>" onclick="return confirm('Bạn có thật sự muốn xóa ?');" type="button" class="btn btn-danger">Xóa</a>
        <?php }?>
        </td>
      </tr>
    <?php } ?>
</table>
<script>
  $(document).ready(function() {
    $('#dataTable').DataTable();
  });
</script>