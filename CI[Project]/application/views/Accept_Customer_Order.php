<?php
$this->load->view('header');
$template = array(
        'table_open' => '<table border="1" cellpadding="2" cellspacing="1" class="mytable" style="text-align: center;">'
);

$this->table->set_template($template);
?>

<h1>Accept Customer order</h1>
<?php  
        $this->table->set_heading(
         'Order Number','Customer name',' Customer email','product','Quantity',
         'Total Price','payment','payment Accept?','Accept?');
        $this->table->add_row('123', 'Erin Ahern', 'erinahern2@gmail.com','3mm socket', '3', '€20','Cash', 'Accepted',"Accept  Deny");
        $this->table->add_row('124', 'Erin Ahern', 'erinahern2@gmail.com','3mm socket', '3', '€20','Card', 'Denied',"Accept  Deny");
        ?>
  
<?php echo $this->table->generate();?>
</div>
<?php 
$this->load->view('footer');
?>

