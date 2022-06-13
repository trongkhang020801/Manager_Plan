<?php

class AccountModel extends DB{
    function changefl($id,$name,$sex,$sdt,$email,$address)
    {
        $sql="update nguoidung set hoten='$name',gioitinh='$sex',sdt='$sdt',email='$email',address='$address' where mand='$id'";
        $sql1="select * from nguoidung where mand='$id'";
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
    function checkpass($pass,$id)
    {
        $sql1="select * from nguoidung where matkhau='$pass' and mand='$id'";
        $rs=false;
        $rows = mysqli_query($this->con, $sql1);
        $row = mysqli_fetch_assoc($rows);
        if ($row > 0)  {
            $rs=true;
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