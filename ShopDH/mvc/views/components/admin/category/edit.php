<?php $types = json_decode($data['cateDetail']);
if (isset($_COOKIE['msg'])) { ?>
    <div class="alert alert-success">
        <strong>Thông báo</strong> <?= $_COOKIE['msg'] ?>
    </div>
<?php } ?>
<hr>
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <form action="admin/category/update&id=<?=$types->MaDM?>" method="POST" role="form" enctype="multipart/form-data">
        <div class="form-group">
            <label for="">Tên danh mục</label>
            <input type="text" class="form-control" id="" placeholder="" name="TenDM" value="<?=$types->TenDM?>">
        </div>
        <button type="submit" class="btn btn-primary">Cập nhật</button>
    </form>
</table>