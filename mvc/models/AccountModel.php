<?php

class AccountModel extends DB{
    function changefl($id,$name,$old,$cccd,$sdt,$address,$user,$pass)
    {
        $sql="update nhanvien set tenNV='$name',ngaySinh='$old',SDT='$sdt',CCCD='$cccd',diaChi='$address',taiKhoang='$user',matKhau='$pass' where idNV='$id'";
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
            }
        }
        return $rs;
    }
    function cpass($pass,$id)
    {
        $sql1="update nguoidung  set matkhau='$pass' where  mand='$id'";
        $rs=false;
        if (mysqli_query($this->con, $sql1))  {
            $rs=true;
        }
        return $rs;
    }
}

?>