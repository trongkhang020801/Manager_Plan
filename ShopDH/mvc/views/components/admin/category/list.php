<?php if (isset($_SESSION['isAdmin']) && $_SESSION['isAdmin'] == true) { ?>
<a href="admin/category/add" type="button" class="btn btn-primary">Thêm mới</a>
<?php } ?>
<?php if (isset($_COOKIE['msg'])) {
  ?>
  <div class="alert alert-success">
    <strong>Thông báo</strong> <?= $_COOKIE['msg'] ?>
  </div>
<?php } 
  $cateList = json_decode($data['cateList']);
  ?>
<hr>
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
  <thead>
    <tr>
      <th scope="col">Mã danh mục</th>
      <th scope="col">Tên danh mục</th>
      <th scope="col" style="width: 100px;">Chức năng</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($cateList as $row) { ?>
      <tr>
        <td><?= $row->MaDM ?></td>
        <td><?= $row->TenDM ?></td>
        <td>
          <?php if (isset($_SESSION['isAdmin']) && $_SESSION['isAdmin'] == true) { ?>
          <a href="admin/category/edit&id=<?= $row->MaDM ?>" class="btn btn-warning">Sửa</a>
          <a href="admin/category/delete&id=<?= $row->MaDM ?>" onclick="return confirm('Bạn có thật sự muốn xóa ?');" type="button" class="btn btn-danger">Xóa</a>
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