<?php
$this->load->view('header');
$template = array(
        'table_open' => '<table border="1" cellpadding="2" cellspacing="1" class="mytable" style="text-align: center;">'
);

$this->table->set_template($template);
?>

<h1>Maintain material details</h1>
<?php  
        $this->table->set_heading(
         'Item Description','Quantity',
         'Item Size','Item Colour','Item Price','Total Price','Action');
        ?>
<?php echo $this->table->generate();?>
</div>
<?php 
$this->load->view('footer');
?>

