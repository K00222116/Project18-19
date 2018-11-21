<?php
$this->load->view('header');
$template = array(
        'table_open' => '<table border="1" cellpadding="2" cellspacing="1" class="mytable" style="text-align: center;">'
);



$this->table->set_template($template);
?>

<h1>Prepare Production Materials Requirements Plan</h1>

<p><label for="search">Search:</label><input type="search" id="search"></p>
<input type="submit" value="search">

<?php  
        $this->table->set_heading(
         'Product name',
         'Product description','Price','Add to plan');
        
        $this->table->add_row('somthing','somthing somthing','€20','add');
        ?>
<?php echo $this->table->generate();?>
</div>
<?php 
$this->load->view('footer');
?>

