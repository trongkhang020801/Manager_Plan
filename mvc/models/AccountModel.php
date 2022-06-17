<?php

class AccountModel extends DB{
    function changefl($id,$name,$old,$cccd,$sdt,$address,$user,$pass,$gender)
    {
        $sql="update nhanvien set tenNV='$name',ngaySinh='$old',gioiTinh='$gender',SDT='$sdt',CCCD='$cccd',diaChi='$address',taiKhoang='$user',matKhau='$pass' where idNV='$id'";
        $sql1="select * from nhanvien where idNV='$id'";
        $rs = false;
        if (mysqli_query($this->con, $sql)) {
            $rs = true;
        }
        $rows = mysqli_query($this->con, $sql1);
        $row = mysqli_fetch_assoc($rows);
        if ($row > 0)  {
            $_SESSION['login'] = $row;
        }
        return $rs;
    }

    function checkpass($id,$pass)
    {
        $qr = "SELECT * from nhanvien
        WHERE taikhoang = '$id'";
        $rows = mysqli_query($this->con, $qr);
        $rs=false;
        $row = mysqli_fetch_assoc($rows);
        if ($row > 0)  {
            if ($pass==$row['matKhau']) {
                $_SESSION['login'] = $row;
                $rs=true;
                if ($row['idQuyen'] ==1) {
                    $_SESSION['isAdmin'] = true;
                } 
            }
        }
        return $rs;
    }
    function getStatilist()
    {
        $qr = "SELECT * from nhanvien
        WHERE idQuyen != '1'";
        $rows = mysqli_query($this->con, $qr);
        $stati = array();
        while ( $row = mysqli_fetch_assoc($rows)) {
            $stati[] = $row;
        }
        return json_encode($stati);
    }
    function deleteStati($id){
        $qr="delete from nhanvien where idNV='$id'";
        $rs = false;
        if (mysqli_query($this->con, $qr)) {
            $rs = true;
        }
        return $rs;
    }
    function insertStati($name,$gender,$phone, $cccd,$address,$old)
        {
            $qr = "INSERT into nhanvien VALUE(null,'2', '$name', '$gender','$old',
             '$address','$phone','$cccd', '$name','123456')";
            $rs = false;
            if (mysqli_query($this->con, $qr)){
                $rs = true;
            }
            return $rs;
        }
}

?>