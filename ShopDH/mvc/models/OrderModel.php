<?php
class OrderModel extends DB
{

    function insertOrder($id, $name, $sdt, $email, $address,$note, $total)
    {
        $qr = "INSERT into hoadon VALUE(null, '$id', '$name',
        '$sdt', '$email','$address','$note', '$total',current_timestamp(),1)";
        $arr=array();
        $rs = false;
        if (mysqli_query($this->con, $qr)) {
            $rs = true;
            $qr1 = "SELECT id from hoadon where id = (SELECT max(id) from hoadon)";
            $rows = mysqli_query($this->con, $qr1);
            $row = mysqli_fetch_assoc($rows);
        }
        $arr['rs']=$rs;
        $arr['id']=$row['id'];
        return ($arr);
    }
    function insertOrderDetail($orderId, $productId, $quantity)
    {
        $qr = "INSERT into chitiethoadon VALUE(null, '$orderId', '$productId', '$quantity')";
        $rs = false;
        if (mysqli_query($this->con, $qr)) {
            $rs = true;
        }
        return $rs;
    }
    function getOrder($id)
    {
        $qr = "select * from hoadon where id_nd='$id'";
        $rows = mysqli_query($this->con, $qr);
        $order = array();
        $orderdetails = array();
        while ( $row = mysqli_fetch_assoc($rows)) {
            $order[] = $row;
            $idhd=$row['id'];
            $qr1 = "select * from chitiethoadon,sanpham where id_hd='$idhd' and sanpham.masp=chitiethoadon.id_sp";
            $rows1 = mysqli_query($this->con, $qr1);
            $orderdetail = array();
            while ( $row1 = mysqli_fetch_assoc($rows1)) {
                $orderdetail[]=$row1;
            }
            $orderdetails[]=$orderdetail;
        }
        $arr=[$order,$orderdetails];
        return json_encode($arr);
    }
    function delodel($id){
        $qr = "delete from chitiethoadon where id_hd='$id'";
        $qr1 = "delete from hoadon where id='$id'";
        $rs = false;
        if (mysqli_query($this->con, $qr) and mysqli_query($this->con, $qr1)) {
            $rs = true;
        }
        return $rs;
    }

    function updateStatus($id, $status) {
        $qr = "UPDATE hoadon SET trangthai = '$status' WHERE id = '$id'";
        $rs = false;
        if (mysqli_query($this->con, $qr)) {
            $rs = true;
        }
        return $rs;    
    }

    function getOrderListAdmin($status = '') {
        $qr = "SELECT * FROM  hoadon WHERE hoadon.trangthai like '%$status%'
                ORDER BY hoadon.ngaydac desc";
        $rows = mysqli_query($this->con, $qr);
        while ($row = mysqli_fetch_assoc($rows)) {
            $orderId = $row['id'];
         /*    $qr1 = "SELECT count(*) as number from order_detail where order_id = '$orderId'";
            $rows1 = mysqli_query($this->con, $qr1);
            $id = mysqli_fetch_assoc($rows1); */
?>
        <tr>
        <td><?= $row['id'] ?></td>
        <td><?= $row['hoten'] ?></td>
        <td class="total"><?= number_format($row['tongtien']) ?></td>
        <td><?= $row['sdt'] ?></td>
        <td><?= $row['diachi'] ?></td>
        <td><?= $row['ngaydac'] ?></td>
        <td><?php 
        switch ($row['trangthai']) {
            case 1: echo '<p style="color: yellow": yellow">Chưa xét duyệt</p>';break;
            case 2: echo '<p style="color: green">Đang giao hàng</p>';break;
            case 3: echo 'Đã giao hàng';break;
        }
        ?></td>
        <td>
          <a href="admin/order/detail&id=<?= $row['id'] ?>" class="btn btn-success" >Xem chi tiết</a>
        </td>
      </tr>
      <?php }
    }

    function getOrderDetailAdmin($id) {
        $qr = "SELECT * from  sanpham, hoadon, chitiethoadon
        where chitiethoadon.id_sp = sanpham.MaSP and chitiethoadon.id_hd = '$id'
        and hoadon.id = chitiethoadon.id_hd";
        $rows = mysqli_query($this->con, $qr);
        $arr = array();
        while ($row = mysqli_fetch_assoc($rows)) {
            $arr[] = $row;
        }

        return json_encode($arr);
    }
    

}