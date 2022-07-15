<?php 
class thongke extends Controller {

    var $InformationFlight;
    var $HighModel;
    public function __construct()
    {
        // Call Models
        $this->Informationflight = $this->model("InformationFlight");
        $this->HighModel = $this->model("HighModel");
    }

    function showThongKe() {      
        // Call Views
        $this->view("thongke", [

        ]);
    }
}
?>