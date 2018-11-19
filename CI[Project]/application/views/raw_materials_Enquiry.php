<?php
$this->load->view('header');
$template = array(
        'table_open' => '<table border="1" cellpadding="2" cellspacing="1" class="mytable" style="text-align: center;">'
);

$this->table->set_template($template);
?>

<h1>Raw Materials Enquiry</h1>
<?php  
        $this->table->set_heading(
         'Part Number','Item Description',
         'Item Price','In Stock');
        
        $this->table->add_row(
         'KF2200RT','Some random Part','100','Yes');
        $this->table->add_row(
         'KF2286RT','Some random Part','200','No');
        $this->table->add_row(
         'KF2299PT','Some random Part','50','Yes');
        $this->table->add_row(
         'KB3200RT','Some random Part','150','Yes');
        $this->table->add_row(
         'FF3200QT','Some random Part','25','Yes');
        ?>
       
<?php echo $this->table->generate();?>
</div>
<?php 
$this->load->view('footer');
?>
