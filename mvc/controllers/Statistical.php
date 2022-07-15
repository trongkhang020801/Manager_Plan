<?php
    class statistical extends Controller{

        var $AccountModel;

        public function __construct()
        {
            // Call Models
            $this->AccountModel = $this->model("AccountModel");
        }

        function showStatistical() {      
            // Call Views
            $this->view("statistical",[
                "statiList"=>$this->AccountModel->getStatilist()
            ]);
        }
        function delStati($id=''){
            $data=$this->AccountModel->deleteStati($id);
            if($data){
                $_SESSION['stati']='Xóa nhân viên thành công';
            } else{
                $_SESSION['stati']='Xóa nhân viên thất bại';
            }
            $this->view("statistical",[
                "statiList"=>$this->AccountModel->getStatilist()
            ]);
        }
        function InStati(){
            if(isset($_POST['name'])){
                $name=$_POST['name'];
                $gender=$_POST['gender'];
                $phone=$_POST['sdt'];
                $cccd=$_POST['cccd'];
                $address=$_POST['address'];
                $old=$_POST['old'];
                $data=$this->AccountModel->InsertStati($name,$gender,$phone, $cccd,$address,$old);
                if($data){
                    $_SESSION['stati']='Thêm nhân viên thành công';
                } else{
                    $_SESSION['stati']='Thêm nhân viên thất bại'.$name.$gender.$phone.$cccd.$address.$old;
                }
            } else{
                $_SESSION['stati']='Bạn chưa nhâp đủ thông tin';
            }
            $this->view("statistical",[
                "statiList"=>$this->AccountModel->getStatilist()
            ]);
        }
    }
?>