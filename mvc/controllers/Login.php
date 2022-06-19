<?php 
class login extends Controller {
    var $AccountModel;

    public function __construct()
    {
        // Call Models
        $this->AccountModel = $this->model("AccountModel");
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

            if($this->AccountModel->checkpass($idUser,$Pass)){
                    header('Location: http://localhost:81/Manager_Plan/');
            }
            else{
                $_SESSION['mess']="Tài khảng hoặc mật khẩu không đúng"; 
                header('Location: http://localhost:81/Manager_Plan/login');
            }
        } else{
            $_SESSION['mess']="Bạn chưa nhập thông tin"; 
             header('Location: http://localhost:81/Manager_Plan/login');
        }        
            
    }
    function logOut()
    {
        unset($_SESSION['login']);
        if(isset($_SESSION['profile'])){
            unset($_SESSION['profile']);
        }
        if(isset($_SESSION['isAdmin'])){
            unset($_SESSION['isAdmin']);
        }
        header('location:http://localhost:81/Manager_Plan/login');
    }
}
?>