<?php if (isset($_SESSION['isAdmin']) && $_SESSION['isAdmin'] == true) { ?>
<a href="admin/producttype/add" type="button" class="btn btn-primary">Thêm mới</a>
<?php } ?>
<?php if (isset($_COOKIE['msg'])) { ?>
  <div class="alert alert-success">
    <strong>Thông báo</strong> <?= $_COOKIE['msg'] ?>
  </div>
<?php } 
  $typeLists = json_decode($data['typeList']);
?>
<hr>
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
  <thead>
    <tr>
      <th scope="col">Mã Loại Sản Phẩm </th>
      <th scope="col">Tên Loại Sản Phẩm</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($typeLists as $row) { ?>
      <tr>
        <td><?= $row->MaTH ?></td>
        <td><?= $row->Ten ?></td>

        <td>
          <!-- <a href="admin/producttype/detail&id=<?= $row->MaTH ?>" class="btn btn-success">Xem</a> -->
          <?php if (isset($_SESSION['isAdmin']) && $_SESSION['isAdmin'] == true) { ?>
          <a href="admin/producttype/edit&id=<?= $row->MaTH?>" class="btn btn-warning">Sửa</a>
          <a href="admin/producttype/delete&id=<?= $row->MaTH ?>" onclick="return confirm('Bạn có thật sự muốn xóa ?');" type="button" class="btn btn-danger">Xóa</a>
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