<?php
    require_once './MVC/processing/controller.php';
    class ProductController extends controller{
        public $ProductModel;

        public function __construct()
        {
            $this -> ProductModel = $this->model("ProductModel");
        }
        public function displayIntroduction()
        {
            $this->view("master", [
                "Page"=> "home"
            ]);
        }

        function getProductsbyBand()
        {
            $this->view("master",["Page"=>"getProductsbyBand"]);
        }
    
        public function displayProductsByBand(){
            if(isset($_POST["btSearch"])){
                $band = $_POST["selectBand"];
                $tblname = 'tlbproduct';
                $field = 'band';
                $products = $this->ProductModel->getRecordsbyField($tblname, $field, $band);
                $this->view("master",["Page"=>"getProductsbyBand","Products"=>$products]);
            }
        }

        
    }
?>