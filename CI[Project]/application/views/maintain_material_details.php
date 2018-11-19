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
         'Part Number','Item Description',
         'Quantity','Item Price','Total Price','Action');
        
        $this->table->add_row(
         'KF2200RT','Some random Part','100','20','2000','Update');
        $this->table->add_row(
         'KF2286RT','Some random Part','200','10','2000','Update');
        $this->table->add_row(
         'KF2299PT','Some random Part','50','25','1250','Update');
        $this->table->add_row(
         'KB3200RT','Some random Part','150','10','1500','Update');
        $this->table->add_row(
         'FF3200QT','Some random Part','25','40','1000','Update');
        ?>
<?php echo $this->table->generate();?>
</div>
<?php 
$this->load->view('footer');
?>

