<?php
$this->load->view('header');
$template = array(
        'table_open' => '<table border="1" cellpadding="2" cellspacing="1" class="mytable" style="text-align: center; margin-left: 5%">'
);

$this->table->set_template($template);
?>

<h1>Lot Traveller to Finished</h1>
<?php  
        $this->table->set_heading(
         'Batch Number','Step On at This time','Step next',
         'Date started on this step','Date started on this batch','Finished?');
        $this->table->add_row('123', 'packaging', 'Finnished','25/11/18', "15/11/18", 'Finnished??');
        $this->table->add_row('124', 'packaging', 'Finnished','26/11/18', '16/11/18', 'Finnished??');
        ?>
  
<?php echo $this->table->generate();?>
</div>
<?php 
$this->load->view('footer');
?>

