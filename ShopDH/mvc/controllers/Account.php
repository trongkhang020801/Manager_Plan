<?php 
class account extends Controller {
    
    var $AccountModel;
    var $OrderModel;
    public function __construct()
    {
        // Call Models
        $this->AccountModel = $this->model('AccountModel');
        $this->OrderModel = $this->model('OrderModel');
    }

    function showAccount() {      
        // Call Views
        $this->view("account", [
            'check'=>1,
            'OrderList'=>$this->OrderModel->getOrder($_SESSION['login']['MaND'])
        ]);
    }

    function changeProfile(){
        if(isset($_POST['name'])){
            $id=$_SESSION['login']['MaND'];
            $name=$_POST['name'];
            $sex=$_POST['sex'];
            $sdt=$_POST['sdt'];
            $email=$_POST['email'];
            $address=$_POST['address'];
            $data = json_decode($this->AccountModel->changefl($id,$name,$sex,$sdt,$email,$address));
            if($data==true){
                $_SESSION['profile']='Thay đổi thành công';
                $this->view("account", [
                    'check'=>1
                ]);
            }
            else{
                $_SESSION['profile']='Thay đổi thành công';
                $this->view("account", [
                    'check'=>1
                ]);
            }
        }
        else{
            $_SESSION['profile']='Bạn chưa nhập đủ thông tin';
            $this->view("account", [
                'check'=>1
            ]);
        }
    }

    function changepass(){
        if(isset($_POST['pass']) and isset($_POST['newpass']) and isset($_POST['newpass1'])){
            $pass=$_POST['pass'];
            $newpass=$_POST['newpass'];
            $newpass1=$_POST['newpass1'];
            if($newpass!=$newpass1){
                $_SESSION['pass']='Mật khẩu mới không trùng!!!';
            } else{
                $data = json_decode($this->AccountModel->checkpass($pass,$_SESSION['login']['MaND']));
                if($data==true){
                    $data1 = json_decode($this->AccountModel->cpass($newpass,$_SESSION['login']['MaND']));
                    if($data1==true)
                    $_SESSION['pass']='success';
                    else $_SESSION['pass']='false';
                }
                else{
                    $_SESSION['pass']='Mật khẩu cũ không đúng';
                }
            }
        }
        else{
            $_SESSION['pass']='Bạn chưa nhập đủ thông tin!!';
        }
        $this->view("account", [
            'check'=>3
        ]);
    }

    function deleteOrder($id=''){
        $data=$this->OrderModel->delodel($id);
        if($data){
            $_SESSION['delorder']='Hủy đơn thành công';
        } else{
            $_SESSION['delorder']='Hủy đơn thất bại';
        }
        $this->view("account", [
            'check'=>2,
            'OrderList'=>$this->OrderModel->getOrder($_SESSION['login']['MaND'])
        ]);
    }

}
?>