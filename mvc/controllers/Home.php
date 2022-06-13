<?php 
class home extends Controller {

    var $InformationFlight;
    var $HighModel;
    public function __construct()
    {
        // Call Models
        $this->Informationflight = $this->model("InformationFlight");
        $this->HighModel = $this->model("HighModel");
    }

    function showHome() {      
        // Call Views
        $this->view("home", [
            "infflight" =>  $this->Informationflight->getInformationFilght(),
            "nameAirline" =>  $this->HighModel->getInformationAirline()
        ]);
    }
    function search() {      
        // Call Views
        $idHang = $_POST['nameair'];

        $this->view("home", [
            "infflight" =>  $this->Informationflight->getInformationFilghtSearch($idHang),
            "nameAirline" =>  $this->HighModel->getInformationAirline()
        ]);
     
    }
}
?>