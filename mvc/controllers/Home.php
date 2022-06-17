<?php 
class home extends Controller {

    // public function __construct()
    // {
    //     // Call Models
    //     $this->ProductModel = $this->model("ProductModel");
    //     $this->HighModel = $this->model("HighModel");
    // }

    function showHome() {      
        // Call Views
        $this->view("home");
    }
}
?>