<?php
    class checkout extends Controller{

        var $OrderModel;
        var $AccountModel;
        public function __construct()
        {
            // Call Models
            $this->OrderModel = $this->model('OrderModel');
            $this->AccountModel = $this->model('AccountModel');
        }

        function showCheckout() {      
            // Call Views
            $this->view("checkout", [
                
            ]);
        }

        function getCheckOut(){
            if(isset($_POST['name'])){
                $name=$_POST['name'];
                $sdt=$_POST['sdt'];
                $email=$_POST['email'];
                $address=$_POST['address'];
                $note=$_POST['note'];
                $total=$_POST['total'];
                $data = $this->OrderModel->insertOrder($_SESSION['login']['MaND'],$name,$sdt,$email,$address,$note,$total);
                if(isset($data)){
                    foreach ($_SESSION['product'] as $value) {                
                        $rs1=$this->OrderModel->insertOrderDetail($data['id'],$value['id'],$value['quantity']);
                    }
                    if($rs1){
                        $_SESSION['success']=1;
                        if(isset($_SESSION['product'])){
                            unset($_SESSION['product']);
                        }
                        if(isset($_SESSION['cart'])){
                            unset($_SESSION['cart']);
                        }
                        if(isset($_SESSION['mgg'])){
                            unset($_SESSION['mgg']);
                        }
                        header('Location: http://localhost/ShopDH/checkout');
                    }
            } else{
                $_SESSION['checkout']='Bạn chưa nhập đủ thông tin';
                header('Location: http://localhost/ShopDH/checkout');
            }
        }


    }
}
?>