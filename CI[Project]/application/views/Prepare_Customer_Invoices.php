<?php
$this->load->view('header');
$template = array(
        'table_open' => '<table border="1" cellpadding="2" cellspacing="1" class="mytable" style="text-align: center;">'
);



$this->table->set_template($template);
?>

<h1>Prepare Customer Invoices</h1>
<p>Date ordered:</p>
<?php  
        $this->table->set_heading(
         'Quantity','Product',
         'Description','Price');
        $this->table->add_row('20','somthing','somthing somthing','€20');
        
        $this->table->add_row(array('','', 'Total Price', '€20'));
        ?>
<?php echo $this->table->generate();?>
</div>
<?php 
$this->load->view('footer');
?>

