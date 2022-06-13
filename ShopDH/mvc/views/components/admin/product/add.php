<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
  <?php $cates = json_decode($data['cateList']);
        $types = json_decode($data['typeList']);
        $mass = json_decode($data['kmList']);
     if (isset($_COOKIE['msg'])) { ?>
    <div class="alert alert-warning">
      <strong>Thông báo</strong> <?= $_COOKIE['msg'] ?>
    </div>
  <?php } ?>
  <form action="admin/product/addproduct" method="POST" role="form" enctype="multipart/form-data">
    <div class="form-group">
      <label for="cars">Danh mục: </label>
      <select id="" name="madm" class="form-control">
        <?php foreach ($types as $row) { ?>
          <option value="<?=$row->MaDM ?>"><?=$row->TenDM ?></option>
        <?php } ?>
      </select>
    </div>
    <div class="form-group">
      <label for="cars">Thương hiệu: </label>
      <select id="" name="MaTH" class="form-control">
        <?php foreach ($cates as $row) { ?>
          <option value="<?= $row->MaTH ?>"><?= $row->Ten ?></option>
        <?php } ?>
      </select>
    </div>
    <div class="form-group">
      <label for="">Tên sản phẩm</label>
      <input type="text" class="form-control" id="" placeholder="" name="TenSP">
    </div>
    <div class="form-group">
      <label for="">Đơn giá</label>
      <input type="text" class="form-control" id="" placeholder="" name="DonGia">
    </div>
    <div class="form-group">
      <label for="">Số lượng</label>
      <input type="text" class="form-control" id="" placeholder="" name="SoLuong">
    </div>
    <div class="form-group">
      <label for="">Hình ảnh 1 </label>
      <input type="file" class="form-control" id="" placeholder="" name="HinhAnh1">
    </div>
    <div class="form-group">
      <label for="">Hình ảnh 2</label>
      <input type="file" class="form-control" id="" placeholder="" name="HinhAnh2">
    </div>
    <div class="form-group">
      <label for="">Hình ảnh 3</label>
      <input type="file" class="form-control" id="" placeholder="" name="HinhAnh3">
    </div>
    <div class="form-group">
      <label for="">Hình ảnh 4</label>
      <input type="file" class="form-control" id="" placeholder="" name="HinhAnh4">
    </div>
    <div class="form-group">
      <label for="">Đã bán</label>
      <input type="text" class="form-control" id="" placeholder="" name="DaBan">
    </div>
    <div class="form-group">
      <label for="cars">Mã giảm giá: </label>
      <select id="" name="magg" class="form-control">
        <?php foreach ($mass as $row) { ?>
          <option value="<?= $row->MaKM ?>"><?= $row->TenKM ?></option>
        <?php } ?>
      </select>
    </div>
    <div class="form-group">
      <label for="">Số hiệu sản phẩm</label>
      <input type="text" class="form-control" id="" placeholder="" name="sohieu">
    </div>
    <div class="form-group">
      <label for="">Xuất xứ</label>
      <input type="text" class="form-control" id="" placeholder="" name="xuatxu">
    </div>
    <div class="form-group">
      <label for="">Giới tính</label>
      <input type="text" class="form-control" id="" placeholder="" name="gioitinh">
    </div>
    <div class="form-group">
      <label for="">Loại kính</label>
      <input type="text" class="form-control" id="" placeholder="" name="loaikinh">
    </div>
    <div class="form-group">
      <label for="">Loại máy</label>
      <input type="text" class="form-control" id="" placeholder="" name="loaimay">
    </div>
    <div class="form-group">
      <label for="">DKMS</label>
      <input type="text" class="form-control" id="" placeholder="" name="dkms">
    </div>
    <div class="form-group">
      <label for="">BDMS</label>
      <input type="text" class="form-control" id="" placeholder="" name="dbms">
    </div>
    <div class="form-group">
      <label for="">DayDeo</label>
      <input type="text" class="form-control" id="" placeholder="" name="daydeo">
    </div>
    <div class="form-group">
      <label for="">Chống Nước</label>
      <input type="text" class="form-control" id="" placeholder="" name="chongnuoc">
    </div>
    <div class="form-group">
      <label for="">Chức năng khácc</label>
      <input type="text" class="form-control" id="" placeholder="" name="cnk">
    </div>
    <label for="">Mô tả</label>
    <div class="form-group">
      <textarea class="form-control" id="summernote" placeholder="" name="MoTa"></textarea>
    </div>
    <div class="form-group">
      <label for="">Trạng thái </label>
      <input type="checkbox" id="" placeholder="" value="1" name="TrangThai"><em></em>
    </div>
    <button type="submit" class="btn btn-primary">Create</button>
  </form>
  <script>
    $(document).ready(function() {
      $('#summernote').summernote();
    });
  </script>
</table>