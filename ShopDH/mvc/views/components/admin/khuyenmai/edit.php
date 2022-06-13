<?php if (isset($_COOKIE['msg'])) { ?>
    <div class="alert alert-success">
        <strong>Thông báo</strong> <?= $_COOKIE['msg'] ?>
    </div>
<?php } $kmdetail=json_decode($data['kmdetail']); ?>
<hr>
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <form action="admin/khuyenmai/update&id=<?=$kmdetail->MaKM?>" method="POST" role="form" enctype="multipart/form-data">
        <input type="hidden" name="MaKM" value="<?=$kmdetail->MaKM?>">
        <div class="form-group">
            <label for="">Tên khuyến mãi</label>
            <input type="text" class="form-control" id="" placeholder="" name="ten" value="<?=$kmdetail->TenKM ?>">
        </div>
        <div class="form-group">
            <label for="">Loại khuyến mãi</label>
            <input type="text" class="form-control" id="" placeholder="" name="loai" value="<?= $kmdetail->LoaiKM ?>">
        </div>
        <div class="form-group">
            <label for="">Giá trị Khuyến mãi</label>
            <input type="text" class="form-control" id="" placeholder="" name="gia" value="<?= $kmdetail->GiaTri ?>">
        </div>
        <button type="submit" class="btn btn-primary">Cập nhật</button>
    </form>
</table>