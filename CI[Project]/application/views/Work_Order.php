<?php
$this->load->view('header');
$template = array(
        'table_open' => '<table border="1" cellpadding="2" cellspacing="1" class="mytable" style="text-align: center;">'
);

$this->table->set_template($template);
?>

<h1>Work Order</h1>
<?php  
        $this->table->set_heading('Customer Order Number','Stock need','Stock that is low need to be order','Order?');
        $this->table->add_row('123', 'Fuse, white Casing, wiring','Fuse', 'Order??');
        ?>
  
<?php echo $this->table->generate();?>
</div>
<?php 
$this->load->view('footer');
?>


