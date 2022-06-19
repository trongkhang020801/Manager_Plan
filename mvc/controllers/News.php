<?php 
class News extends Controller {

    var $InformationFlight;
    var $HighModel;
    public function __construct()
    {
        // Call Models
        $this->Informationflight = $this->model("InformationFlight");
        $this->HighModel = $this->model("HighModel");
    }
    function showNews() {      
        // Call Views
        $this->view("news", [
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