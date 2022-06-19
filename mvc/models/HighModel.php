<?php

class HighModel extends DB{
    
    // function highList() {
    //     $qr = "select s.MaSP,s.TenSP,s.image1,s.GiaBan,sum(c.SoLuongdat) as soLanMua from chitiethoadon as c,hoadon as d ,sanpham as s where c.id_hd=d.id and c.id_sp=s.MaSP and ngaydac is not null and d.trangthai=3 group by s.MaSP,s.TenSP,s.image1,s.GiaBan,c.id_sp order by sum(c.SoLuongdat) DESC LIMIT 0,3";
    //     $rows = mysqli_query($this->con, $qr);
    //     $products = array();
    //     while ( $row = mysqli_fetch_assoc($rows)) {
    //         $products[] = $row;
    //     }
    //     return json_encode($products);
    // } 
    // function new() {
    //     $qr = "select MaSP,TenSP,image4 from sanpham 
    //             order by thoigian LIMIT 0,1";
    //     $row = mysqli_query($this->con, $qr);
    //     $products = mysqli_fetch_assoc($row);
    //     if (empty($products)) {
    //         echo 'deo co clg';
    //     }
    //     else {
    //     return json_encode($products);
    //     }
    // } 
    function getInformationAirline() {
        $qr = "SELECT * FROM maybay.hangmaybay";
        $rows = mysqli_query($this->con, $qr);
        $nameAirline = array();
        while ( $row = mysqli_fetch_assoc($rows)) {
            $nameAirline[] = $row;
        }
        return json_encode($nameAirline);
    } 
    function getInformationAirline_to() {
        $qr = "SELECT DISTINCT diemDen FROM maybay.thongtinchuyenbay";
        $rows = mysqli_query($this->con, $qr);
        $nameAirline = array();
        while ( $row = mysqli_fetch_assoc($rows)) {
            $nameAirline[] = $row;
        }
        return json_encode($nameAirline);
    }
    function getInformationAirline_fl() {
        $qr = "SELECT DISTINCT soHieu FROM maybay.thongtinchuyenbay";
        $rows = mysqli_query($this->con, $qr);
        $nameAirline = array();
        while ( $row = mysqli_fetch_assoc($rows)) {
            $nameAirline[] = $row;
        }
        return json_encode($nameAirline);
    }
}

?>