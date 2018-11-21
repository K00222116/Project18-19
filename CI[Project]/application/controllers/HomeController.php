<?php
class HomeController extends CI_Controller {
    public function __construct() {
        parent::__construct();
    }
     public function Register() {
        $this->load->view('Register');
    }
    
     public function login() {
        $this->load->view('login');
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
    function Maintain_Supplier(){
        $this->load->view('Maintain_Supplier');
    }
    
    function Prepare_Production_Materials_Requirements_Plan(){
        $this->load->view('Prepare_Production_Materials_Requirements_Plan');
    }
    
    function Prepare_Customer_Invoices(){
        $this->load->view('Prepare_Customer_Invoices');
    }
    
    function Generate_Lot_Traveller(){
        $this->load->view('Generate_Lot_Traveller');
    }
    
    function Accept_Reject_Materials_Delivery_from_Supplier(){
        $this->load->view('Accept_Reject_Materials_Delivery_from_Supplier');
    }
    function Maintain_Product_Details() {
        //URL http://localhost:80/CI[Project]/index.php/HomeController/Maintain_Product_Details
        $this->load->view('Maintain_Product_Details');
    }

    function Accept_Customer_Order() {
        //URL http://localhost:80/CI[Project]/index.php/HomeController/Accept_Customer_Order
        $this->load->view('Accept_Customer_Order');
    }

    function Update_Lot_Traveller_Traceability() {
        //URL http://localhost:80/CI[Project]/index.php/HomeController/Update_Lot_Traveller_Traceability
        $this->load->view('Update_Lot_Traveller_Traceability');
    }

    function Finished_Goods_Note() {
        //URL http://localhost:80/CI[Project]/index.php/HomeController/Finished_Goods_Note
        $this->load->view('Finished_Goods_Note');
    }

    function Work_Order() {
        //URL http://localhost:80/CI[Project]/index.php/HomeController/Work_Order
        $this->load->view('Work_Order');
    }

}
?>