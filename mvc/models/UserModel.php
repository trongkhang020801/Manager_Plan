<?php
    class UserModel extends DB{

    function insertUser($name,$gender,$phone, $email,$address, $pass)
        {
            $qr = "INSERT into nguoidung VALUE(null, '$name', '$gender',
             '$phone','$email','$address', '$pass', '1', '1')";
            $rs = false;
            if (mysqli_query($this->con, $qr)){
                $rs = true;
            }
            return $rs;
        }

    function checkUser($idLogin, $password)
    {

        $qr = "SELECT * from nguoidung
        WHERE email = '$idLogin'";
        $rows = mysqli_query($this->con, $qr);
        $rs=false;
        // echo $idLogin;
        $row = mysqli_fetch_assoc($rows);
        if ($row > 0)  {
            if ($password==$row['MatKhau']) {
                $_SESSION['login'] = $row;
                $rs=true;
                if ($row['MaQuyen'] == 2) {
                    $_SESSION['isAdmin'] = true;
                } else {
                    if ($row['MaQuyen'] == 3) {
                        $_SESSION['isStaff'] = true;
                    } else {
                        $_SESSION['isCustomer'] = true;
                    }
                }
            }
        }
        return $rs;
    }

    function updateUser($id, $lastName, $gender, $phone, $email, $address, $permission_id, $status)
    {
        $qr = "UPDATE nguoidung set
                hoten = '$lastName',
                gioitinh = '$gender',
                sdt = '$phone',
                email = '$email',
                address = '$address',
                maquyen = '$permission_id',
                trangthai = '$status'
            where MaND = '$id'";
        $rs = false;
        if (mysqli_query($this->con, $qr)) {
            echo "ấDSADAS";
            $rs = true;
            setcookie('msg', 'Chỉnh sửa thông tin thành công!', time() + 2);
            header('Location: http://localhost/ShopDH/admin/account/');
        }

        return $rs;
    }

    function deleteUser($id)
    {
        $qr = "DELETE from nguoidung where MaND = '$id'";
        $rs = false;
        if (mysqli_query($this->con, $qr)) {
            $rs = true;
        }
        return $rs;
    }

    function countCustomer() {
        $qr = "SELECT count(*) as total from nguoidung where MaQuyen = '1'";
        $rows =  mysqli_query($this->con, $qr);
        $row = mysqli_fetch_assoc($rows);

        return json_encode($row);
    }

    function countStaff() {
        $qr = "SELECT count(*) as total from nguoidung where MaQuyen= '3'";
        $rows =  mysqli_query($this->con, $qr);
        $row = mysqli_fetch_assoc($rows);

        return json_encode($row);
    }
    
    function getUserList()
    {
        $qr = "SELECT * FROM nguoidung";
        $rows = mysqli_query($this->con, $qr);
        $users = array();
        while ($row = mysqli_fetch_assoc($rows)) {
            $users[] = $row;
        }
        return json_encode($users);
    }

    
    function getUserDetail($id = "")
    {
        $qr = "SELECT * FROM nguoidung
            where MaND = '$id'";
        $rows = mysqli_query($this->con, $qr);
        $row = mysqli_fetch_assoc($rows);
        return json_encode($row);
    }
    
}
?>