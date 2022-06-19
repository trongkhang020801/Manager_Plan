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
            "nameAirline" =>  $this->HighModel->getInformationAirline(),
            "nameTo" => $this->HighModel->getInformationAirline_to(),
            "nameflight" => $this->HighModel->getInformationAirline_fl()
        ]);
    }
    function search() {      
        // Call Views
        $idHang = $_POST['nameair'];
        $Destination = $_POST['namedes'];
        $FLIGHT= $_POST['namefl'];
        $this->view("home", [
            "infflight" =>  $this->Informationflight->getInformationFilghtSearch($idHang,$Destination,$FLIGHT),
            "nameAirline" =>  $this->HighModel->getInformationAirline(),
            "nameTo" => $this->HighModel->getInformationAirline_to(),
            "nameflight" => $this->HighModel->getInformationAirline_fl()
        ]);
     
    }
}
?>