<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <?php if (isset($_COOKIE['msg'])) { ?>
        <div class="alert alert-warning">
            <strong>Thông báo</strong> <?= $_COOKIE['msg'] ?>
        </div>
    <?php } ?>
    <form action="admin/producttype/addtype" method="POST" role="form" enctype="multipart/form-data">
        <div class="form-group">
            <label for="">Tên loại sản phẩm</label>
            <input type="text" class="form-control" id="" placeholder="" name="TenLSP">
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
</table>