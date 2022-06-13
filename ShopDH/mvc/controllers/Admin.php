<?php
class Admin extends Controller
{
    var $ProductModel;
    var $UserModel;
    var $OrderModel;
    var $CateModel;
    var $StatisticalModel;
    public function __construct()
    {
        // Call Models
        $this->ProductModel = $this->model("ProductModel");
        $this->UserModel = $this->model("UserModel");
        $this->OrderModel = $this->model("OrderModel");
        // $this->CateModel = $this->model("CategoryModel");
        $this->StatisticalModel = $this->model("StatisticalModel");
    }
    function showAdmin()
    {

        $month = date('m');
        $year = date('Y');
        $this->StatisticalModel->insert();
        // Call Views
        $this->view("admin", [
            "component" => "home/admin",
            "salesMonth" =>  $this->StatisticalModel->getSalesMonth($month),
            "salesYear" =>  $this->StatisticalModel->getSalesYear($year),
            "countCustomer" =>  $this->UserModel->countCustomer(),
            "countStaff" =>  $this->UserModel->countStaff(),
        ]);
    }
    
    function statistical() {
        $fromDay = $_POST['fromday'];
        $nextDay = $_POST['nextday'];
       /*  $nextDay = strtotime('+1 day', strtotime($nextDay));
        $nextDay = date('Y-m-d', $nextDay); */
        echo $this->StatisticalModel->total($fromDay, $nextDay);
    }

    function account($action = "list")
    {
        if ($action == "update") {
            $lastname = $_POST['Ten'];
            $gender = $_POST['GioiTinh'];
            $phone = $_POST['SDT'];
            $email = $_POST['Email'];
            $address = $_POST['DiaChi'];
            $permission_id = $_POST['MaQuyen'];
            $status = $_POST['TrangThai'];

            $this->UserModel->updateUser($_GET['id'], $lastname, $gender, $phone, $email, $address, $permission_id, $status);
        } else 
        if ($action == "adduser") {
            $lastname = $_POST['Ten'];
            $gender = $_POST['GioiTinh'];
            $phone = $_POST['SDT'];
            $email = $_POST['Email'];
            $address = $_POST['DiaChi'];
            $pass =  $_POST['MatKhau'];
            $permission_id = $_POST['MaQuyen'];
            $status = $_POST['TrangThai'];
            if ($this->UserModel->insertUser($lastname, $gender, $email, $phone, $address, $pass, $permission_id, $status)) {
                setcookie('msg', 'Them thành công!', time() + 2);
                header('Location: http://localhost/ShopDH/admin/account');
            }
        } else 
        if ($action == "delete") {
            if ($this->UserModel->deleteUser($_GET['id'])) {
                setcookie('msg', 'Xóa thành công!', time() + 2);
                header('Location: http://localhost/ShopDH/admin/account');
            };
        } else {
            $this->view("admin", [
                "component" => "account/" . $action,
                "userList" => $this->UserModel->getUserList(),
                "userDetail" => $this->UserModel->getUserDetail(isset($_GET['id']) ? $_GET['id'] : '')
            ]);
        }
    }

    function product($action = "list")
    {
        if ($action == "update") {
            $cateId = $_POST['MaDM'];
            $cateId1 = $_POST['MaTH'];
            // $typeId = $_POST['MaLSP'];
            $name = $_POST['TenSP'];
            $price = $_POST['DonGia'];
            $desc = $_POST['MoTa'];
            $quantity = $_POST['SoLuong'];
            $avt1 = isset($_POST['Avatar1']) ? $_POST['Avatar1'] : '';
            $avt2 = isset($_POST['Avatar2']) ? $_POST['Avatar2'] : '';
            $avt3 = isset($_POST['Avatar3']) ? $_POST['Avatar3'] : '';
            $avt4 = isset($_POST['Avatar4']) ? $_POST['Avatar4'] : '';

            $this->ProductModel->updateProduct($_GET['id'],$cateId, $cateId1, $name, $price, $desc, $quantity, $avt1, $avt2, $avt3, $avt4);
        } else 
        if ($action == "addproduct") {
            $madm=$_POST['madm'];
            $math=$_POST['MaTH'];
            $TenSP=$_POST['TenSP'];
            $DonGia=$_POST['DonGia'];
            $SoLuong=$_POST['SoLuong'];
            $HinhAnh1=isset($_POST['HinhAnh1']) ? $_POST['HinhAnh1'] : '';
            $HinhAnh2=isset($_POST['HinhAnh2']) ? $_POST['HinhAnh2'] : '';
            $HinhAnh3=isset($_POST['HinhAnh3']) ? $_POST['HinhAnh3'] : '';
            $HinhAnh4=isset($_POST['HinhAnh4']) ? $_POST['HinhAnh4'] : '';
            $DaBan=$_POST['DaBan'];
            $magg=$_POST['magg'];
            $sohieu=$_POST['sohieu'];
            $xuatxu=$_POST['xuatxu'];
            $gioitinh=$_POST['gioitinh'];
            $loaikinh=$_POST['loaikinh'];
            $loaimay=$_POST['loaimay'];
            $dkms=$_POST['dkms'];
            $dbms=$_POST['dbms'];
            $daydeo=$_POST['daydeo'];
            $chongnuoc=$_POST['chongnuoc'];
            $cnk=$_POST['cnk'];
            $MoTa=$_POST['MoTa'];
            $TrangThai=$_POST['TrangThai'];
            $this->ProductModel->insertProduct($madm, $math, $TenSP, $DonGia, $SoLuong, $HinhAnh1, $HinhAnh2, $HinhAnh3, $HinhAnh4
                                                ,$DaBan, $magg, $sohieu, $xuatxu, $gioitinh, $loaikinh, $loaimay, $dkms, $dbms,$daydeo, $chongnuoc, $cnk, $MoTa, $TrangThai);
        } else 
        if ($action == "delete") {
            if ($this->ProductModel->deleteProduct($_GET['id'])) {
                setcookie('msg', 'Xóa thành công!', time() + 2);
                header('Location: http://localhost/ShopDH/admin/product');
            };
        } else {
            $this->view("admin", [
                "component" => "product/" . $action,
                "productList" => $this->ProductModel->getProductList(),
                "productDetail" => $this->ProductModel->getProductDetail('', isset($_GET['id']) ? $_GET['id'] : ''),
                "cateList" => $this->ProductModel->getCategory(),
                "typeList" => $this->ProductModel->getCateList(),
                "kmList" => $this->ProductModel->getmass(),
            ]);
        }
    }

    function productType($action = "list")
    {
        if ($action == "update") {
            $ten=$_POST['TenLSP'];
            if ($this->ProductModel->editType($_GET['id'],$ten)) {
                setcookie('msg', 'Sửa thành công!', time() + 2);
                header('Location: http://localhost/ShopDH/admin/producttype');
            }
        } else 
        if ($action == "addtype") {
            $name = $_POST['TenLSP'];
            if ($this->ProductModel->insertType($name)) {
                setcookie('msg', 'Thêm thành công!', time() + 2);
                header('Location: http://localhost/ShopDH/admin/producttype');
            }
        } else 
        if ($action == "delete") {
            if ($this->ProductModel->deleteType($_GET['id'])) {
                setcookie('msg', 'Xóa thành công!', time() + 2);
                header('Location: http://localhost/ShopDH/admin/producttype');
            };
        } else {
            $this->view("admin", [
                "component" => "product_type/" . $action,
                "typeList" => $this->ProductModel->getCategory(),
                "typeDetail" => $this->ProductModel->getTypeDetail(isset($_GET['id']) ? $_GET['id'] : ''),
            ]);
        }
    }

    function category($action = "list")
    {
        if ($action == "update") {
            $ten=$_POST['TenDM'];
            if ($this->ProductModel->editCate($_GET['id'],$ten)) {
                setcookie('msg', 'Sửa thành công!', time() + 2);
                header('Location: http://localhost/ShopDH/admin/category');
            }
        } else 
        if ($action == "addcate") {
            $name = $_POST['TenDM'];
            if ($this->ProductModel->insertCate($name)) {
                setcookie('msg', 'Thêm thành công!', time() + 2);
                header('Location: http://localhost/ShopDH/admin/category');
            }
        } else 
        if ($action == "delete") {
            if ($this->ProductModel->deleteCate($_GET['id'])) {
                setcookie('msg', 'Xóa thành công!', time() + 2);
                header('Location: http://localhost/ShopDH/admin/category');
            };
        } else {
            $this->view("admin", [
                "component" => "category/" . $action,
                "cateList" => $this->ProductModel->getCateList(),
                "cateDetail" => $this->ProductModel->getCateDetail(isset($_GET['id']) ? $_GET['id'] : ''),
            ]);
        }
    }


    function order($action = "list")
    {
        if ($action == "delete") {
            if ($this->OrderModel->deleteOrder($_GET['id'])) {
                setcookie('msg', 'Xóa thành công!', time() + 2);
                header('Location: http://localhost/ShopDH/admin/order');
            };
        } else 
        if ($action == "approve") {
            if ($this->OrderModel->updateStatus($_GET['id'], $_GET['status'])) {
                setcookie('msg', 'Duyệt thành công!', time() + 2);
                header('Location: http://localhost/ShopDH/admin/order');
            };
        } else 
        if ($action == "print") {
            $this->view("print", [
                // "orderList" => $this->CateModel->getTypeList(),  
                "orderDetail" => $this->OrderModel->getOrderDetailAdmin(isset($_GET['id']) ? $_GET['id'] : '')
            ]);
        } else {
            $this->view("admin", [
                "component" => "order/" . $action,
                // "orderList" => $this->CateModel->getTypeList(),  

                "orderDetail" => $this->OrderModel->getOrderDetailAdmin(isset($_GET['id']) ? $_GET['id'] : '')
            ]);
        }
    }
    function khuyenmai($action = "list")
    {
        if ($action == "delete") {
            if ($this->ProductModel->deletekm($_GET['id'])) {
                setcookie('msg', 'Xóa thành công!', time() + 2);
                header('Location: http://localhost/ShopDH/admin/khuyenmai');
            };
        } else 
        if ($action == "update") {
            $name = $_POST['ten'];
            $loai = $_POST['loai'];
            $Gia = $_POST['gia'];
            if ($this->ProductModel->editkm($_GET['id'], $name,$loai,$Gia)) {
                setcookie('msg', 'Cập nhập thành công!', time() + 2);
                header('Location: http://localhost/ShopDH/admin/khuyenmai');
            };
        } else 
        if ($action == "addkm") {
            $name = $_POST['TenKM'];
            $loai = $_POST['LoaiKM'];
            $Gia = $_POST['GiaTri'];
            if ($this->ProductModel->insertkm($name,$loai,$Gia)) {
                setcookie('msg', 'Thêm thành công!', time() + 2);
                header('Location: http://localhost/ShopDH/admin/khuyenmai');
            }
        } else {
            $this->view("admin", [
                "component" => "khuyenmai/" . $action,
                "listkm" => $this->ProductModel-> getKhuyemai(),
                "kmdetail" => $this->ProductModel-> getkmDetail(isset($_GET['id']) ? $_GET['id'] : ''),
            ]);
        }
    }

    function getOrderListAdmin()
    {
        $status = $_POST['orderStatus'];
        echo $this->OrderModel->getOrderListAdmin($status);
    }
}
