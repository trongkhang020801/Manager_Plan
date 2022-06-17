<?php
 class account extends Controller{
    var $AccountModel;

    public function __construct()
    {
        // Call Models
        $this->AccountModel = $this->model("AccountModel");
    }

    function showAccount() {      
        // Call Views
        $this->view("account");
    }
    function changeProfile(){
        if(isset($_POST['name'])){
            $id=$_SESSION['login']['idNV'];
            $name=$_POST['name'];
            $cccd=$_POST['cccd'];
            $sdt=$_POST['sdt'];
            $old=$_POST['old'];
            $user=$_POST['user'];
            $pass=$_POST['pass'];
            $address=$_POST['address'];
            $data = json_decode($this->AccountModel->changefl($id,$name,$old,$cccd,$sdt,$address,$user,$pass));
            if($data==true){
                $_SESSION['profile']='Thay đổi thành công';
                header('Location: http://localhost/Manager_Plan/account');
            }
            else{
                $_SESSION['profile']='Thay không thành công';
                header('Location: http://localhost/Manager_Plan/account');
            }
        }
        else{
            $_SESSION['profile']='Bạn chưa nhập đủ thông tin';
            header('Location: http://localhost/Manager_Plan/account');
        }
    }
 }
?>