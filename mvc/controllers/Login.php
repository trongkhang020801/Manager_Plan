<?php 
class login extends Controller {
    var $UserModel;

    public function __construct()
    {
        // Call Models
        $this->UserModel = $this->model("UserModel");
    }
    function showLogin() {      
        // Call Views
        $this->view("login", [
        
        ]);
    }
    function checkLogin(){
        if(isset($_POST['Username']) and $_POST['Pass']){
            $idUser=$_POST['Username'];
            $Pass=$_POST['Pass'];

            if($this->UserModel->checkUser($idUser,$Pass)){
                if(isset($_SESSION['product'])){
                    header('Location: http://localhost:81/Manager_Plan/checkout');
                }
                else{
                    header('Location: http://localhost/ShopDH/');
                }
            }
            else{
                $_SESSION['mess']="Tài khảng hoặc mật khẩu không đúng"; 
                header('Location: http://localhost/ShopDH/login');
            }
        } else{
            $_SESSION['mess']="Bạn chưa nhập thông tin"; 
             header('Location: http://localhost/ShopDH/login');
        }        
            
    }
    function register(){
        $pass=$_POST['pass'];
        $pass1=$_POST['pass1'];
        $email=$_POST['email'];
        $address=$_POST['address'];
        $phone=$_POST['phone'];
        $gender=$_POST['gender'];
        $name=$_POST['name'];   
        if($pass!=$pass1){
            $_SESSION['mess']="Mật khẩu không đúng";
        }   else{
                if($this->UserModel->insertUser($name,$gender,$phone,$email,$address,$pass)){
                    $_SESSION['mess']="Đăng kí thành công"; 
                }
                else
                    $_SESSION['mess']="Đăng kí thất bại";
                    
        }
        header('Location: http://localhost/ShopDH/login');
    }
    function logOut()
    {
        unset($_SESSION['login']);
        if(isset($_SESSION['product'])){
            unset($_SESSION['product']);
        }
        if(isset($_SESSION['cart'])){
            unset($_SESSION['cart']);
        }
        if(isset($_SESSION['isAdmin'])){
            unset($_SESSION['isAdmin']);
        }
        if(isset($_SESSION['isStaff'])){
            unset($_SESSION['isStaff']);
        }
        header('location:http://localhost/ShopDH/login');
    }
}
?>