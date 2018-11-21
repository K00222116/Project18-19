<?php
$this->load->view('header');
$template = array(
        'table_open' => '<table border="1" cellpadding="2" cellspacing="1" class="mytable" style="text-align: center;">'
);

$this->table->set_template($template);
?>

<h1>Maintain Supplier</h1>
<?php  
        $this->table->set_heading(
         'Supplier name','Product',
         'Location','Update','Remove');
        
        $this->table->add_row('dell','somthing somthing','somwhere','update','delete');
        ?>
<?php echo $this->table->generate();?>
</div>
<?php 
$this->load->view('footer');
?>

