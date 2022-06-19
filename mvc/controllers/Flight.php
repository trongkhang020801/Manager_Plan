<?php
    class flight extends Controller{

        var $AccountModel;

        public function __construct()
        {
            // Call Models
            $this->AccountModel = $this->model("AccountModel");
            $this->InformationFlight = $this->model("InformationFlight");
            $this->HighModel = $this->model("HighModel");
        }

        function showFlight() {      
            // Call Views
            $this->view("flight",[
                "infflight"=>$this->InformationFlight->getInformationFilght(),
                "nameflight"=>$this->HighModel->getInformationAirline_fl()
            ]);
        }
        function delFlight($id=''){
            $data=$this->InformationFlight->deleteFlightInformation($id);
            if($data){
                $_SESSION['flight']='Xóa thông tin chuyến bay thành công';
            } else{
                $_SESSION['flight']='Xóa thông tin chuyến bay thất bại';
            }
            $this->view("flight",[
                "infflight"=>$this->InformationFlight->getInformationFilght(),
                "nameflight"=>$this->HighModel->getInformationAirline_fl()
            ]);
        }
        function InFlight(){
            if(isset($_POST['namecb'])){
                $name=$_POST['namecb'];
                $diemdi=$_POST['diemdi'];
                $diemden=$_POST['diemden'];
                $timego=$_POST['timego'];
                $timeend=$_POST['timeend'];
                $tiemfly=$_POST['timefly'];
                $content=$_POST['content'];
                $namefl=$_POST['namefl'];
                $data=$this->InformationFlight->insertFlightInformation($name,$diemdi,$diemden, $timego,$timeend,$tiemfly,$content,$namefl);
                if($data){
                    $_SESSION['flight']='Thêm thông tin chuyến bay thành công';
                } else{
                    $_SESSION['flight']='Thêm thông tin chuyến bay thất bại';
                }
            } else{
                $_SESSION['flight']='Bạn chưa nhâp đủ thông tin';
            }
            $this->view("flight",[
                "infflight"=>$this->InformationFlight->getInformationFilght(),
                "nameflight"=>$this->HighModel->getInformationAirline_fl()
            ]);
        }
        function UpdateFli($id=''){
            if(isset($_POST['namecb1'])){
                $name=$_POST['namecb1'];
                $diemdi=$_POST['diemdi1'];
                $diemden=$_POST['diemden1'];
                $timego=$_POST['timego1'];
                $timeend=$_POST['timeend1'];
                $tiemfly=$_POST['timefly1'];
                $content=$_POST['content1'];
                $namefl=$_POST['namefl1'];
                $data=$this->InformationFlight->updateFlightInformation($id,$name,$diemdi,$diemden, $timego,$timeend,$tiemfly,$content,$namefl);
                if($data){
                    $_SESSION['flight']='Cập nhật thông tin chuyến bay thành công';
                } else{
                    $_SESSION['flight']='Cập nhật thông tin chuyến bay thất bại'.$id.$name.$diemdi.$diemden.$timego.$timeend.$tiemfly.$content.$namefl;
                }
            } else{
                $_SESSION['flight']='Bạn chưa nhâp đủ thông tin';
            }
            $this->view("flight",[
                "infflight"=>$this->InformationFlight->getInformationFilght(),
                "nameflight"=>$this->HighModel->getInformationAirline_fl()
            ]);
        }
    }
?>