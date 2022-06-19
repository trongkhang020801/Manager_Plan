<?php
$infflight = json_decode($data['infflight']);
$nameflight = json_decode($data['nameflight']);
?>
<div class="main">
    <section id="content">
        <div class="stati">
            <p><b>Quản lý thông tin chuyến bay</b></p>
            <button type="button" class="btn-success btn-primary" style="height: 40px;border-radius: 10px;width: 300px;margin-bottom: 20px;" data-toggle="modal" data-target="#myModal">Thêm mới thông tin chuyến bay</button>
        <table id="example" class="table table-striped" width="100%">
            <thead>
                <tr>
                <th class="th-sm">IdAir

                </th>
                <th class="th-sm">NameAir

                </th>
                <th class="th-sm">Departure

                </th>
                <th class="th-sm">Destination

                </th>
                <th class="th-sm">TimeGo

                </th>
                <th class="th-sm">TimeArrival

                </th>
                <th></th>
                <th></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($infflight as $item) {?>
                            <tr>
                                <td><?php echo $item->soHieu ?></td>
                                <td><?php echo $item->tenChuyenBay ?></td>
                                <td><?php echo $item->diemDi ?></td>
                                <td><?php echo $item->diemDen ?></td>
                                <td><?php echo $item->thoigiandi ?></td>
                                <td><?php echo $item->thoigianden ?></td>
                                <td><button type="button" class="btn btn-outline-warning" data-toggle="modal" data-target="#myModal<?php echo $item->idChuyenBay?>">Edit</button></td>
                                <td><button type="button" class="btn btn-outline-danger"><a href="flight/delFlight/<?php echo $item->idChuyenBay; ?>" style="text-decoration: none; color:black;">Delete</a></button></td>
                            
                                <div class="modal" id="myModal<?php echo $item->idChuyenBay?>">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                            
                                <!-- Modal Header -->
                                            <div class="modal-header">
                                                <h4 class="modal-title">Thêm thông tin chuyến bay</h4>
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>
                                            <form action="flight/UpdateFli/<?php echo $item->idChuyenBay?>" method="POST">
                                                <div class="modal-body">
                                                    <div class="p-3 py-5">
                                                        <div class="row mt-2">
                                                            <div class="col-md-12"><label class="labels">Tên Chuyến bay</label><input type="text" class="form-control" name="namecb1" value="<?php echo $item->tenChuyenBay?>"></div>
                                                        </div>
                                                        <div class="row mt-3">
                                                            <div class="col-md-6"><label class="labels">Điểm đi</label><input type="text" class="form-control"  name="diemdi1" value="<?php echo $item->diemDi?>"></div>
                                                            <div class="col-md-6"><label class="labels">Điểm đến</label><input type="text" class="form-control" name="diemden1" value="<?php echo $item->diemDen?>"></div>
                                                        </div>
                                                        <div class="row mt-3">
                                                            <div class="col-md-6"><label class="labels">Thời gian đi</label><input type="datetime-local" class="form-control"   name="timego1" value="<?php echo substr($item->thoigiandi,0,10).'T'.substr($item->thoigiandi,11)?>"></div>
                                                            <div class="col-md-6"><label class="labels">Thời gian đến</label><input type="datetime-local" class="form-control"  name="timeend1" value="<?php echo substr($item->thoigianden,0,10).'T'.substr($item->thoigianden,11)?>"></div>
                                                        </div>
                                                        <div class="row mt-3">
                                                            <div class="col-md-6"><label class="labels">Thời gian bay</label><input type="time" class="form-control"  name="timefly1" value="<?php echo $item->thoigiandukien?>"></div>
                                                            <div class="col-md-12"><label class="labels">Mô tả</label><input type="text" class="form-control" name="content1" value="<?php echo $item->moTa?>"></div>
                                                            <div class="col-md-12"><label class="labels">Số hiệu</label>
                                                                <select class="form-select" aria-label="Default select example" name="namefl1" id="namefl1">
                                                                    <option value="<?php echo $item->soHieu?>"><?php echo $item->soHieu?></option>
                                                                    <?php foreach($nameflight as $item) {?>
                                                                    <option value=<?php echo '"'.$item->soHieu.'"'?>><?php echo $item->soHieu?></option>
                                                                    <?php } ?>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-warning">Update</button>
                                                </div>
                                            </form>
                                        </div>
                                     </div>
                                </div> 
                            </tr>         
                        <?php }?>
            </tbody>
        </table>

        <!-- insert -->
        </div>
        <div class="modal" id="myModal">
            <div class="modal-dialog">
            <div class="modal-content">
            
                <!-- Modal Header -->
                <div class="modal-header">
                <h4 class="modal-title">Thêm thông tin chuyến bay</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <form action="flight/InFlight" method="POST">
                    <!-- Modal body -->
                    <div class="modal-body">
                        <div class="p-3 py-5">
                            <div class="row mt-2">
                                <div class="col-md-12"><label class="labels">Tên Chuyến bay</label><input type="text" class="form-control" name="namecb"></div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-6"><label class="labels">Điểm đi</label><input type="text" class="form-control"  name="diemdi"></div>
                                <div class="col-md-6"><label class="labels">Điểm đến</label><input type="text" class="form-control" name="diemden"></div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-6"><label class="labels">Thời gian đi</label><input type="datetime-local" class="form-control"   name="timego"></div>
                                <div class="col-md-6"><label class="labels">Thời gian đến</label><input type="datetime-local" class="form-control"  name="timeend"></div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-6"><label class="labels">Thời gian bay</label><input type="time" class="form-control"  name="timefly"></div>
                                <div class="col-md-12"><label class="labels">Mô tả</label><input type="text" class="form-control" name="content"></div>
                                <div class="col-md-12"><label class="labels">Số hiệu</label>
                                <select class="form-select" aria-label="Default select example" name="namefl" id="namefl">
                                <option value=""></option>
                                <?php foreach($nameflight as $item) {?>
                                <option value=<?php echo '"'.$item->soHieu.'"'?>><?php echo $item->soHieu?></option>
                                <?php } ?>
                                </select></div>
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
        <!-- Update -->
                  
</section>
    </div>