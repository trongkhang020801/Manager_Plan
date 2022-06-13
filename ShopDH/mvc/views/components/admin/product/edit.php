<?php if (isset($_COOKIE['msg'])) { ?>
    <div class="alert alert-success">
        <strong>Thông báo</strong> <?= $_COOKIE['msg'] ?>
    </div>
<?php }
$product = json_decode($data['productDetail']);
$cates = json_decode($data['cateList']);
$types = json_decode($data['typeList']);
// $images = json_decode($data['imageList']);
// print_r($cates);
?>
<hr>
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <form action="admin/product/update&id=<?=$product->MaSP?>" method="POST" role="form" enctype="multipart/form-data">
        <input type="hidden" name="MaSP" value="<?= $product->id ?>">
        <div class="form-group">
            <label for="cars">Danh mục: </label>
            <select id="" name="MaDM" class="form-control">
                <?php foreach ($types as $row) { ?>
                    <option <?= ($row->MaDM == $product->MaDM) ? 'selected' : '' ?> value="<?= $row->MaDM?>"><?= $row->TenDM ?></option>
                <?php } ?>
            </select>
        </div>
        <div class="form-group">
            <label for="cars">Thương hiệu: </label>
            <select id="" name="MaTH" class="form-control">
                <?php foreach ($cates as $row) { ?>
                    <option <?= ($row->MaTH == $product->MaTH) ? 'selected' : '' ?> value="<?= $row->MaTH ?>"><?= $row->Ten ?></option>
                <?php } ?>
            </select>
        </div>
        <div class="form-group">
            <label for="">Tên sản phẩm</label>
            <input type="text" class="form-control" id="" placeholder="" name="TenSP" value="<?= $product->TenSP ?>">
        </div>
        <div class="form-group">
            <label for="">Đơn giá</label>
            <input type="text" class="form-control" id="" placeholder="" name="DonGia" value="<?= $product->GiaBan ?>">
        </div>
        <div class="form-group">
            <label for="">Số lượng</label>
            <input type="text" class="form-control" id="" placeholder="" name="SoLuong" value="<?= $product->SoLuong ?>">
        </div>
        <div class="form-group">
            <label for="">Mô tả</label>
            <input type="text" class="form-control" id="" placeholder="" name="MoTa" value="<?= $product->MoTa ?>">
        </div>
        <div class="form-group">
            <label for="">Ảnh 1</label>
            <img src="<?= $product->image1 ?>" height="200px" width="200px">
            <input type="file" class="form-control" id="" placeholder="" name="Avatar1" accept="<?= $product->image1 ?>">
        </div>
        <div class="form-group">
            <label for="">Ảnh 2</label>
            <img src="<?= $product->image2 ?>" height="200px" width="200px">
            <input type="file" class="form-control" id="" placeholder="" name="Avatar2" accept="<?= $product->image2 ?>">
        </div>
        <div class="form-group">
            <label for="">Ảnh 3</label>
            <img src="<?= $product->image3 ?>" height="200px" width="200px">
            <input type="file" class="form-control" id="" placeholder="" name="Avatar3" accept="<?= $product->image3 ?>">
        </div>
        <div class="form-group">
            <label for="">Ảnh bìa</label>
            <img src="<?= $product->image4 ?>" height="200px" width="200px">
            <input type="file" class="form-control" id="" placeholder="" name="Avatar4" accept="<?= $product->image4 ?>">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
    <script>
        $(document).ready(function() {
            $('#summernote').summernote();
        });
    </script>