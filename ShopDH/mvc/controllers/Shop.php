<?php 
class shop extends Controller {

    var $ProductModel;
    public function __construct()
    {
        // Call Models
        $this->ProductModel = $this->model("ProductModel");
    }

    function showShop() {      
        // Call Views
        $this->view("shop", [
            "cate" => "Sản Phẩm",
            "categoryList" =>  $this->ProductModel->getCategory(),
            "strapList" =>  $this->ProductModel->getstrap(),
            "productList" =>  $this->ProductModel->getProductList()
        ]);
    }

    function search() {
        if(isset($_POST['search'])){
            $search=$_POST['search'];
        } else $search='';
        $this->view("shop", [
            "cate" => "Sản Phẩm",
            "categoryList" =>  $this->ProductModel->getCategory(),
            "strapList" =>  $this->ProductModel->getstrap(),
            "productList" =>  $this->ProductModel->getSearchList($search)
        ]);
    }

    function men() {
        $this->view("shop", [
            "cate" => "Đồng Hồ Nam",
            "categoryList" =>  $this->ProductModel->getCategory(),
            "strapList" =>  $this->ProductModel->getstrap(),
            "productList" =>  $this->ProductModel->getMenList(),
        ]);
    }

    function women() {
        $this->view("shop", [
            "cate" => "Đồng Hồ Nữ",
            "categoryList" =>  $this->ProductModel->getCategory(),
            "strapList" =>  $this->ProductModel->getstrap(),
            "productList" =>  $this->ProductModel->getWomenList(),
        ]);
    }
    function pk() {
        $this->view("shop", [
            "cate" => "Phụ kiện",
            "categoryList" =>  $this->ProductModel->getCategory(),
            "strapList" =>  $this->ProductModel->getstrap(),
            "productList" =>  $this->ProductModel->getPKList(),
        ]);
    }

    function detail($name = '', $id = '') {
        $this->view("product", [
            "productInfo" =>  $this->ProductModel->getProductDetail($name, $id)
        ]);
    }

    function categoryClick($name = '', $cate = '') {
        if($cate=='Nam')
            $prot="Đồng Hồ Nam";
        else
            if($cate=='Nữ')
                $prot="Đồng Hồ Nữ";
            else
            $prot="Sản Phẩm";
        $this->view("shop", [
            "cate" => $prot,
            "name" => $name,
            "strapList" =>  $this->ProductModel->getstrap(),
            "categoryList" =>  $this->ProductModel->getCategory(),
            "productList" =>  $this->ProductModel->categoryList($name, $cate)
        ]);
    }

    function strapClick($name = '', $cate = '') {
        if($cate=='Nam')
            $prot="Đồng Hồ Nam";
        else
            if($cate=='Nữ')
                $prot="Đồng Hồ Nữ";
            else
            $prot="Sản Phẩm";
        $this->view("shop", [
            "cate" => $prot,
            "name1" => $name,
            "strapList" =>  $this->ProductModel->getstrap(),
            "categoryList" =>  $this->ProductModel->getCategory(),
            "productList" =>  $this->ProductModel->strapList($name, $cate)
        ]);
    }
}
?>