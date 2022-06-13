<?php 
      $user = json_decode($data['userDetail']);
?>
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <h2>Mã Tài Khoản: <?=$user->MaND?></h2>
    <h2>Họ Tên: <?=$user->HoTen?></h2>
    <h2>Giới tính: <?=$user->GioiTinh?></h2>
    <h2>Số điện thoại: <?=$user->SDT?></h2>
    <h2>Địa chỉ: <?=$user->Address?></h2>
    <h2>Quyền hạn:  <?php
          if ($user->MaQuyen == 2) {
            echo 'Quản trị viên';
          } else {
            if ($user->MaQuyen == 3) {
              echo 'Nhân viên';
            } else {
              echo 'Khách hàng';
            }
          }
          ?></h2>
</table>