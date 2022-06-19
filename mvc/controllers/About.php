<?php 
class About extends Controller {

    var $InformationFlight;
    var $HighModel;
    public function __construct()
    {
        // Call Models
        $this->Informationflight = $this->model("InformationFlight");
        $this->HighModel = $this->model("HighModel");
    }
    function showAbout() {      
        // Call Views
        $this->view("about", [
            "nameAirline" =>  $this->HighModel->getInformationAirline(),
            "nameTo" => $this->HighModel->getInformationAirline_to(),
            "nameflight" => $this->HighModel->getInformationAirline_fl()
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