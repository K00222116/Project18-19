<?php
$this->load->view('header');
$template = array(
        'table_open' => '<table border="1" cellpadding="2" cellspacing="1" class="mytable" style="text-align: center;">'
);

$this->table->set_template($template);
?>
<h1>Maintain Product details</h1>
<?php  
        $this->table->set_heading('Product Number',
         'Product','Product Size','Product Colour','Product Price','Action');
        
$this->table->add_row('12563', 'socket', '3mm ','White', '€20',"Update Delete");
$this->table->add_row('153625', 'socket', '6mm ','Black', '€25',"Update Delete");
?>
<?php echo $this->table->generate();?>
</div>
<?php 
$this->load->view('footer');
?>