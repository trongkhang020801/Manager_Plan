<?php $types = json_decode($data['typeDetail']); 
    if (isset($_COOKIE['msg'])) { ?>
    <div class="alert alert-success">
        <strong>Thông báo</strong> <?= $_COOKIE['msg'] ?>
    </div>
<?php } ?>
<hr>
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <form action="admin/productType/update&id=<?=$types->MaTH?>" method="POST" role="form" enctype="multipart/form-data">
        <input type="hidden" name="MaLSP" value="<?= $data_detail['MaLSP'] ?>">
        <div class="form-group">
            <label for="">Tên loại sản phẩm</label>
            <input type="text" class="form-control" id="" placeholder="" name="TenLSP" value="<?=$types->Ten?>">
        </div>
        <button type="submit" class="btn btn-primary">Cập nhật</button>
    </form>
</table>