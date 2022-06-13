<?php 
class cart extends Controller {
    var $ProductModel;
    public function __construct()
    {
        // Call Models
        $this->ProductModel = $this->model('ProductModel');
    }

    function showCart() {      
        // Call Views
        $this->view("cart", [
            
        ]);
    }

    function addToCart($id='',$chose='') {
        $data = json_decode($this->ProductModel->getProductDetail('', $id));
        if (isset($data)) {
            if (isset($_SESSION['product'][$id])) {
                $arr = $_SESSION['product'][$id];
                $arr['quantity']++;
                $arr['total'] = $arr['quantity'] * $arr["price"];
                $arr['isChecked'] = true;
                $_SESSION['product'][$id] = $arr;
                $arr['isChecked'] = true;
            } else {
                $arr['id'] = $data->MaSP;
                $arr['name'] = $data->TenSP;
                $arr['price'] = $data->GiaBan;
                $arr['quantity'] = 1;
                $arr['total'] =  $arr['quantity'] * $arr["price"];
                $arr['avatar'] = $data->image1;
                $arr['isChecked'] = true;
                $_SESSION['product'][$id] = $arr;
            }
            switch ($chose) {
                case 1:
                    $this->view("product", [
                        "productInfo" =>  $this->ProductModel->getProductDetail('', $id)
                    ]);
                   break;
                case 2:
                    header('Location: http://localhost/ShopDH/shop');
                    break;
                case 3:
                    header('Location: http://localhost/ShopDH/');
                    break;
                default:
                    header('Location: http://localhost/ShopDH/cart');
                    break;
            }
        }
    }
    function delCart($id=''){
        if($id <0)
        {
            unset($_SESSION['product']);
        }
        else
        {
            unset($_SESSION['product'][$id]);
        }
        header('Location: http://localhost/ShopDH/cart');
    }
    function delmgg($id=''){
        unset($_SESSION['mgg']);
        header('Location: http://localhost/ShopDH/cart');
    }
    function ggCart(){
        if(isset($_POST['mgg'])){
            $gg=$_POST['mgg'];
            $data = json_decode($this->ProductModel->getmgg($gg));
            if (isset($data)) 
            {
                $_SESSION['mgg']=$data->giatri;
            }
        }
        header('Location: http://localhost/ShopDH/cart');
    }
}
?>