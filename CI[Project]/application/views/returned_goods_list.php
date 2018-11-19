<?php
$this->load->view('header');
$template = array(
        'table_open' => '<table border="1" cellpadding="2" cellspacing="1" class="mytable" style="text-align: center;">'
);

$this->table->set_template($template);
?>

<h1>Returned Goods List.</h1>
<?php  
        $this->table->set_heading(
         'Part Number','Reason for return',
         'Customer','Price','Paid','Refund or Replace','Supplier','Action');
        $this->table->add_row(
         'KF2200RT','Damage to pins','JCR Lidliker','200','60','Replace','Custom build','Update, Delete');
        $this->table->add_row(
         'KF2286RT','Damage to door','Aldi','180','180','Refund','Components.ie','Update, Delete');
        $this->table->add_row(
         'KF2299PT','Damage to CPU','J.P Thomas','250','50','Refund','Component.ie','Update, Delete');
        $this->table->add_row(
         'KB3200RT','Damage to Wheels','Liam Dowry','100','80','Replace','Custom build','Update, Delete');
        $this->table->add_row(
         'FF3200QT','Damage to Base','Erin Ahern','40','0','Replace','RandomElectical.uk','Update, Delete');
        ?>
<?php echo $this->table->generate();?>
<?php
$this->load->view('footer');
?>
