<?php
$this->load->view('header');
$template = array(
        'table_open' => '<table border="1" cellpadding="2" cellspacing="1" class="mytable" style="text-align: center;">'
);



$this->table->set_template($template);
?>

<h1>Generate Lot Traveler</h1>
<?php  
        $this->table->set_heading(
         'Order id',
         'Date ordered','Expected date to delivered');
        
        $this->table->add_row('1','21/11/2018','26/11/2018');
        
        ?>
<?php echo $this->table->generate();?>
</div>
<?php 
$this->load->view('footer');
?>

