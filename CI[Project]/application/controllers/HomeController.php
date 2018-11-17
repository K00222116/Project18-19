<?php
class HomeController extends CI_Controller {
    public function __construct() {
        parent::__construct();
    }
    public function HomePage() {
        // URL http://localhost:80/CI[Project]/index.php/HomeController/HomePage
        $this->load->view('Home');
    }
    
    function maintain_material_details(){
        $this->load->view('maintain_material_details');
    }
    function prepare_scrap_note(){
        $this->load->view('prepare_scrap_note');
    }
    function raw_materials_Enquiry(){
        $this->load->view('raw_materials_Enquiry');
    }
    function accept_returned_goods(){
        $this->load->view('accept_returned_goods');
    }
    function supplier_purchase_order(){
        $this->load->view('supplier_purchase_order');
    }
}
?>