<?php
class ProductModel extends DB{
    
    function getProductList() {
        $qr = "SELECT * FROM sanpham as s,danhmuc as d, thuonghieu as t
             where s.madm=d.madm and s.math=t.math";
        $rows = mysqli_query($this->con, $qr);
        $products = array();
        while ( $row = mysqli_fetch_assoc($rows)) {
            $products[] = $row;
        }
        return json_encode($products);
    } 

    function getMenList() {
        $qr =  "SELECT * FROM sanpham as s,danhmuc as d, thuonghieu as t
                where s.madm=d.madm and d.tendm='Nam' and s.math=t.math";
        $rows = mysqli_query($this->con, $qr);
        $products = array();
        while ( $row = mysqli_fetch_assoc($rows)) {
            $products[] = $row;
        }
        return json_encode($products);
        
    }
    function getSearchList($search) {
        $qr =  "select * from sanpham INNER JOIN danhmuc ON sanpham.MaDM = danhmuc.MaDM INNER JOIN thuonghieu on sanpham.MaTH = 
        thuonghieu.MaTH WHERE sanpham.TenSP like '%$search%' or danhmuc.TenDM like '%$search%' or sanpham.mota like '%$search%'";
        $rows = mysqli_query($this->con, $qr);
        $products = array();
        while ( $row = mysqli_fetch_assoc($rows)) {
            $products[] = $row;
        }
        return json_encode($products);
        
    }

    function getWomenList() {
        $qr =  "SELECT * FROM sanpham as s,danhmuc as d, thuonghieu as t
                where s.madm=d.madm and d.tendm='Nữ' and s.math=t.math";
        $rows = mysqli_query($this->con, $qr);
        $products = array();
        while ( $row = mysqli_fetch_assoc($rows)) {
            $products[] = $row;
        }
        return json_encode($products);
        
    }

    function getPkList() {
        $qr =  "SELECT * FROM sanpham as s,danhmuc as d, thuonghieu as t
                where s.madm=d.madm and d.tendm='Phụ kiện' and s.math=t.math";
        $rows = mysqli_query($this->con, $qr);
        $products = array();
        while ( $row = mysqli_fetch_assoc($rows)) {
            $products[] = $row;
        }
        return json_encode($products);
        
    }

    function getProductDetail($name, $id) {
        if ($id == '') {
             $qr = "SELECT * FROM sanpham,danhmuc,thuonghieu as t
            where sanpham.madm=danhmuc.madm
            and sanpham.tensp = '$name' and sanpham.math=t.math";
        }
        else {
            $qr = "SELECT * FROM sanpham,danhmuc,thuonghieu as t
            where sanpham.madm=danhmuc.madm
            and sanpham.masp = '$id' and sanpham.math=t.math";
        }
        $row =  mysqli_query($this->con, $qr);
        $info = mysqli_fetch_assoc($row);
        if (!empty($info)) {
            return json_encode($info);
        }
        else {
        return '';
        }
    }

    function getCategory(){
        $qr="select * from thuonghieu";
        $rows = mysqli_query($this->con, $qr);
        $categori = array();
        while ( $row = mysqli_fetch_assoc($rows)) {
            $categori[] = $row;
        }
        return json_encode($categori);
    }
    function getmass(){
        $qr="select * from khuyenmai";
        $rows = mysqli_query($this->con, $qr);
        $categori = array();
        while ( $row = mysqli_fetch_assoc($rows)) {
            $categori[] = $row;
        }
        return json_encode($categori);
    }
    function categoryList($name, $cate) {
        if ($cate == '') {
             $qr = "SELECT * FROM sanpham,danhmuc,thuonghieu
            where sanpham.madm=danhmuc.madm and sanpham.math=thuonghieu.math 
            and thuonghieu.ten = '$name'";
        }
        else {
            $qr = "SELECT * FROM sanpham,danhmuc,thuonghieu
            where sanpham.madm=danhmuc.madm and sanpham.math=thuonghieu.math 
            and thuonghieu.ten = '$name' and danhmuc.tendm='$cate'";
        }
        $rows = mysqli_query($this->con, $qr);
        $categori = array();
        while ( $row = mysqli_fetch_assoc($rows)) {
            $categori[] = $row;
        }
        return json_encode($categori);
    }

    function getCateList(){
        $qr="select * from danhmuc";
        $rows = mysqli_query($this->con, $qr);
        $categori = array();
        while ( $row = mysqli_fetch_assoc($rows)) {
            $categori[] = $row;
        }
        return json_encode($categori);
    }
    function getstrap(){
        $qr="SELECT DayDeo FROM sanpham group by DayDeo";
        $rows = mysqli_query($this->con, $qr);
        $straps = array();
        while ( $row = mysqli_fetch_assoc($rows)) {
            $straps[] = $row;
        }
        return json_encode($straps);
    }
    function strapList($name, $cate) {
        if ($cate == '') {
            $qr = "SELECT * FROM sanpham,danhmuc
            where sanpham.madm=danhmuc.madm 
            and sanpham.daydeo = '$name'";
        }
        else {
            $qr = "SELECT * FROM sanpham,danhmuc
            where sanpham.madm=danhmuc.madm 
            and sanpham.daydeo = '$name' and danhmuc.tendm='$cate'";
        }
        $rows = mysqli_query($this->con, $qr);
        $straps = array();
        while ( $row = mysqli_fetch_assoc($rows)) {
            $straps[] = $row;
        }
        return json_encode($straps);
    }

    function getmgg($gg){
        $qr = "SELECT giatri FROM khuyenmai
        where TenKM='$gg'";
        $row =  mysqli_query($this->con, $qr);
        $info = mysqli_fetch_assoc($row);
        if (empty($info)) {
            echo 'không có mã';
        }
        else {
        return json_encode($info);
        }
    }

    // function getImages($id) {
    //     $qr = "SELECT * FROM product_images
    //     where product_id = $id";
    //     $rows =  mysqli_query($this->con, $qr);
    //     $images = array();
    //     while ( $row = mysqli_fetch_assoc($rows)) {
    //             $images[] = $row;
    //     }
    //     return json_encode($images);
    // }
    function updateProduct($id, $cateId,$cateId1,$name, $price, $desc, $quantity, $avatar1,$avatar2,$avatar3,$avatar4)
    {
        $qrImg = '';
        $image1 = '';
        $image2 = '';
        $image3 = '';
        $image4 = '';
        if($avatar1!="")
            $image1=',image1 = '.$avatar1;
        if($avatar2!="")
            $image2=',image2 = '.$avatar2;
        if($avatar3!="")
            $image3=',image3 = '.$avatar3;
        if($avatar4!="")
            $image4=',image4 = '.$avatar4;
        $qrImg = $image1.$image2.$image3.$image4;
        $qr = "UPDATE sanpham set
               madm = '$cateId',
               math = '$cateId1',
               tensp = '$name',
                giaban= '$price',
               mota = '$desc',
               soluong = '$quantity'"
               .$qrImg.
           "where MaSP = '$id'";
        $rs = false;
        if (mysqli_query($this->con, $qr)) {
            $rs = true;
            setcookie('msg', 'Chỉnh sửa thông tin thành công!', time() + 2);
            header('Location: http://localhost/ShopDH/admin/product');
        }
        echo $qr;
        return $rs;
    }
    function deleteProduct($id)
    {
        $qr = "DELETE from sanpham where MaSP = '$id'";
        $rs = false;
        if (mysqli_query($this->con, $qr)) {
            $rs = true;
        }
        return $rs;
    }
    function insertProduct($madm, $math, $TenSP, $DonGia, $SoLuong, $HinhAnh1, $HinhAnh2, $HinhAnh3, $HinhAnh4
    ,$DaBan, $magg, $sohieu, $xuatxu, $gioitinh, $loaikinh, $loaimay, $dkms, $dbms,$daydeo, $chongnuoc, $cnk, $MoTa, $TrangThai){

        $qrImg = '100';
        $image1 = '';
        $image2 = '';
        $image3 = '';
        $image4 = '';
        if($HinhAnh1!="")
            $image1=$HinhAnh1;
        if($HinhAnh2!="")
            $image2=$HinhAnh2;
        if($HinhAnh3!="")
            $image3=$HinhAnh3;
        if($HinhAnh4!="")
            $image4=$HinhAnh4;
        $qr = "insert into sanpham values('$qrImg','$madm', '$math', '$TenSP','$DonGia', '$SoLuong','$image1','$image2','$image3','$image4','$DaBan', '1', '$sohieu', '$xuatxu', '$gioitinh', '$loaikinh', '$loaimay', '$dkms', '$dbms','$daydeo', '$chongnuoc', '$cnk', '$MoTa', '$TrangThai',null)";
        $rs = false;
        echo $qr;
        if (mysqli_query($this->con, $qr)) {
            $rs = true;
            echo $qr;
            setcookie('msg', 'Thêm thành công!', time() + 2);
            header('Location: http://localhost/ShopDH/admin/product');
        }
        return $rs;
    }
    function insertType($name){
        $sql="insert into thuonghieu values(null,'$name')";
        $rs=false;
        if (mysqli_query($this->con, $sql)) {
            $rs=true;
        }
        return $rs;
    }
    function deleteType($id){
        $sql="delete from thuonghieu where math='$id'";
        $rs=false;
        if (mysqli_query($this->con, $sql)) {
            $rs=true;
        }
        return $rs;
    }
    function getTypeDetail($id){
        $sql="select * from thuonghieu where math='$id'";
        $row =  mysqli_query($this->con, $sql);
        $info = mysqli_fetch_assoc($row);
        return json_encode($info);
    }
    function editType($id,$name){
        $sql="update thuonghieu set ten='$name' where math='$id'";
        $rs=false;
        if (mysqli_query($this->con, $sql)) {
            $rs=true;
        }
        return $rs;
    }
    function insertCate($name){
        $sql="insert into danhmuc values(null,'$name')";
        $rs=false;
        if (mysqli_query($this->con, $sql)) {
            $rs=true;
        }
        return $rs;
    }
    function deleteCate($id){
        $sql="delete from danhmuc where madm='$id'";
        $rs=false;
        if (mysqli_query($this->con, $sql)) {
            $rs=true;
        }
        return $rs;
    }
    function editCate($id,$name){
        $sql="update danhmuc set tendm='$name' where madm='$id'";
        $rs=false;
        if (mysqli_query($this->con, $sql)) {
            $rs=true;
        }
        return $rs;
    }
    function getCateDetail($id){
        $sql="select * from danhmuc where madm='$id'";
        $row =  mysqli_query($this->con, $sql);
        $info = mysqli_fetch_assoc($row);
        return json_encode($info);
    }
    function getKhuyemai(){
        $sql="select * from khuyenmai ";
        $rows = mysqli_query($this->con, $sql);
        $straps = array();
        while ( $row = mysqli_fetch_assoc($rows)) {
            $straps[] = $row;
        }
        return json_encode($straps);
    }
    function insertkm($name,$loai,$gia){
        $sql="insert into khuyenmai(makm,tenkm,loaikm,giatri) values(null,'$name','$loai','$gia')";
        $rs=false;
        if (mysqli_query($this->con, $sql)) {
            $rs=true;
        }
        return $rs;
    }
    function getkmDetail($id){
        $sql="select * from khuyenmai where makm='$id'";
        $row =  mysqli_query($this->con, $sql);
        $info = mysqli_fetch_assoc($row);
        return json_encode($info);
    }
    function editkm($id,$name,$loai,$gia){
        $sql="update khuyenmai set tenkm='$name',loaikm='$loai',giatri='$gia' where makm='$id'";
        $rs=false;
        if (mysqli_query($this->con, $sql)) {
            $rs=true;
        }
        return $rs;
    }
    function deletekm($id){
        $sql="delete from khuyenmai where makm='$id'";
        $rs=false;
        if (mysqli_query($this->con, $sql)) {
            $rs=true;
        }
        return $rs;
    }
}
?>