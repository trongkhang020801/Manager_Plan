<?php $statis = json_decode($data['statiList']); ?>
<div class="main">
    <section id="content">
        <div class="stati">
            <p><b>Quản lý nhân viên</b></p>
            <button type="button" class="btn btn-success btn btn-primary" style="margin-bottom: 20px;" data-toggle="modal" data-target="#myModal">Thêm mới nhân viên</button>
            <table id="example" class="table table-striped" width="100%">
                <thead>
                    <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Họ Tên</th>
                    <th scope="col">Giới tính</th>
                    <th scope="col">Ngày sinh</th>
                    <th scope="col">Số điện thoại</th>
                    <th scope="col">Tài khoảng</th>
                    <th></th>
                    </tr>
                </thead>
                <?php  foreach ($statis as $key => $stati) { ?>
                <tbody>
                    <tr>
                    <td><?php echo $stati->idNV ?></td>
                    <td><?php echo $stati->tenNV ?></td>
                    <td><?php if($stati->gioiTinh == 1) 
                                    echo "Nam";
                              else{
                                if($stati->gioiTinh == 0)
                                    echo "Nữ";
                                else
                                    echo "Khác";
                                }?></td>
                    <td><?php echo $stati->ngaySinh ?></td>
                    <td><?php echo $stati->SDT ?></td>
                    <td><?php echo $stati->taiKhoang ?></td>
                    <td><button type="button" class="btn btn-outline-danger"><a href="statistical/delStati/<?php echo $stati->idNV; ?>" style="text-decoration: none; color:black;">Delete</a></button></td>
                    </tr>
                </tbody>
                <?php } ?>
            </table>
            
        </div>
  <!-- The Modal -->
        <div class="modal" id="myModal">
            <div class="modal-dialog">
            <div class="modal-content">
            
                <!-- Modal Header -->
                <div class="modal-header">
                <h4 class="modal-title">Thêm nhân viên</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <form action="statistical/InStati" method="POST">
                    <!-- Modal body -->
                    <div class="modal-body">
                        <div class="p-3 py-5">
                            <div class="row mt-2">
                                <div class="col-md-12"><label class="labels">Tên</label><input type="text" class="form-control"   name="name"></div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-6">
                                    <label class="labels">Giới tính</label>
                                    <div>
                                        <input class="btn-radio" type="radio" name="gender" value="1">
                                        <label for="male"> Nam </label>
                                        <input class="btn-radio" type="radio" name="gender" value="0">
                                        <label for="female"> Nữ</label>
                                        <input class="btn-radio" type="radio" name="gender" value="2">
                                        <label for="other"> Khác </label>
                                    </div>
                                </div>
                                <div class="col-md-6"><label class="labels">Ngày sinh</label><input type="date" 
                                 class="form-control" name="old"></div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-12"><label class="labels">Địa chỉ</label><input type="text" class="form-control" name="address"></div>
                                <div class="col-md-12"><label class="labels">Số điện thoại</label><input type="text" class="form-control" name="sdt"></div>
                                <div class="col-md-12"><label class="labels">Căng cước công dân</label><input type="text" class="form-control" name="cccd"></div>
                            </div>
                        </div>
                    </div>
                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success">Add</button>
                    </div>
                </form>
            </div>
            </div>
        </div>
    </section>
</div>