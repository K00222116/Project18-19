<?php
$this->load->view('header');
$template = array(
        'table_open' => '<table border="1" cellpadding="2" cellspacing="1" class="mytable" style="text-align: center;">'
);

$this->table->set_template($template);
?>

<h1>Update Lot Traveller Traceability</h1>
<?php  
        $this->table->set_heading(
         'Batch Number','Step On at This time','Step next',
         'Date started on this step','Date started on this batch','Finished Step?');
        $this->table->add_row('123', 'Wiring The Sockets', 'Conecting the case','19/11/18', "15/11/18", 'Finnished??');
        $this->table->add_row('124', 'Conecting the case', 'packaging','20/11/18', '16/11/18', 'Finnished??');
        ?>
  
<?php echo $this->table->generate();?>
</div>
<?php 
$this->load->view('footer');
?>

