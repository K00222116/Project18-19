<?php  ?>
<!DOCTYPE html>
<html>
<head>
<style>
.dropbtn {
    background-color: black;
    color: white;
    padding: 0% 44% 0% 44%; 
    font-size: 16px;
    border: none;
    cursor: pointer;
    
}

.dropdown {
    /*position: relative;*/
    display: inline-block;
    width: 20%;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {background-color: darkgrey}

.dropdown:hover .dropdown-content {
    display: block;
}

.dropdown:hover .dropbtn {
    background-color: darkgrey;
}
img{
    border: 1px solid #ddd;
    border-radius: 20%;
    padding: 5px;
    width: 80%;
}
.logo{
    border: 0px solid #ddd;
    border-radius: 20%;
    padding: 5px;
    margin-left: 35%;
    width: 20%;
}
.navbar{
    margin-left: 10%;
}
body{
    background-color: floralwhite;
}
.footer {
    position: fixed;
    left: 0;
    bottom: 0;
    width: 100%;
    background-color: lightsalmon;
    color: white;
    text-align: center;
}
</style>
</head>
<body>
    <h1></h1>
    <img src="<?php echo base_url()?>assets/photo/logo.jpg" alt="Girl in a jacket" class="logo"><br>
    <div class="navbar">
<div class="dropdown">
  <button class="dropbtn">A Work</button>
  <div class="dropdown-content">
    <a href="<?php echo site_url('HomeController/Maintain_Supplier/'); ?>">Maintain Supplier</a>
    <a href="<?php echo site_url('HomeController/Prepare_Production_Materials_Requirements_Plan/'); ?>">Prepare Production Materials Requirements Plan</a>
    <a href="<?php echo site_url('HomeController/Prepare_Customer_Invoices/');?>">Prepare Customer Invoices</a>
    <a href="<?php echo site_url('HomeController/Generate_Lot_Traveller/');?>">Generate Lot Traveller</a>
    <a href="<?php echo site_url('HomeController/Accept_Reject_Materials_Delivery_from_Supplier/');?>">Accept/Reject Materials Delivery from Supplier</a>
  </div>  
</div>
    <div class="dropdown">
  <button class="dropbtn">B Work</button>
  <div class="dropdown-content">
    <a href="<?php echo site_url('HomeController/maintain_material_details/'); ?>">Maintain Materials Details</a>
    <a href="<?php echo site_url('HomeController/prepare_scrap_note/'); ?>">Prepare Scrap Note Details for C&E</a>
    <a href="<?php echo site_url('HomeController/raw_materials_Enquiry/'); ?>">Raw Materials Online Enquiry</a>
    <a href="<?php echo site_url('HomeController/accept_returned_goods/'); ?>">Accept Returned Goods from Customer</a>
    <a href="<?php echo site_url('HomeController/supplier_purchase_order/'); ?>">Generate Supplier Purchase Order Requests</a>
  </div>  
    </div>
      <div class="dropdown">
  <button class="dropbtn">C Work</button>
  <div class="dropdown-content">
    <a href="<?php echo site_url('HomeController/Maintain_Product_Details/'); ?>">Maintain Product Details</a>
    <a href="<?php echo site_url('HomeController/Accept_Customer_Order/'); ?>">Accept Customer Order</a>
    <a href="<?php echo site_url('HomeController/Update_Lot_Traveller_Traceability/'); ?>">Update Lot Traveller Traceability</a>
    <a href="<?php echo site_url('HomeController/Finished_Goods_Note/'); ?>">Convert Lot Traveller to Finished Goods Note</a>
    <a href="<?php echo site_url('HomeController/Work_Order/'); ?>">Make Work Order(s) from Cust. Order</a>
  </div> 
</div>
        <div class="dropdown">
  <button class="dropbtn">D Work</button>
  <div class="dropdown-content">
    <a href="#">Maintain Customer</a>
    <a href="#">Supplier Payment Authorisation</a>
    <a href="#">Provide Customer Quotation (Accept/Process)</a>
    <a href="#">Handle Exceptional Purchase Authorisations</a>
    <a href="#">Make Work Order(s) from Cust. Order</a>
  </div> 
</div>
     


