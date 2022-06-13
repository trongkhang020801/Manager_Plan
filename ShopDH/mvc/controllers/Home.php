<?php 
class home extends Controller {

    var $ProductModel;
    var $HighModel;
    public function __construct()
    {
        // Call Models
        $this->ProductModel = $this->model("ProductModel");
        $this->HighModel = $this->model("HighModel");
    }

    function showHome() {      
        // Call Views
        $this->view("home", [
            "productList" =>  $this->ProductModel->getProductList(),
            "highList" =>  $this->HighModel->highList(),
            "new" =>  $this->HighModel->new()
        ]);
    }

}
?>