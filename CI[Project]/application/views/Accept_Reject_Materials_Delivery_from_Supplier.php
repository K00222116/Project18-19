<?php
$this->load->view('header');
$template = array(
        'table_open' => '<table border="1" cellpadding="2" cellspacing="1" class="mytable" style="text-align: center;">'
);



$this->table->set_template($template);
?>

<h1>Accept/Reject Materials Delivery from Supplier</h1>

<p><input type="submit" value="Add product to delivery"></p>
<?php  
        $this->table->set_heading(
         'Product name','Supplier name',
         'Product description','Quantity','Delete order');
        $this->table->add_row('somthing','dell','somthing somthing','20','delete');
        ?>
<?php echo $this->table->generate();?>
<?php 
$this->load->view('footer');
?>

