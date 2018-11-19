<?php
$this->load->view('header');
?>

<h1>Supplier Purchase Order.</h1>
<?php echo form_open('#'); ?>
<legend>Supplier Purchase Order</legend>
        <input type="text" name="supplier" placeholder="Supplier" text size="30" maxlength ="55"/><br /><?php echo form_error('supplier'); ?><br />
        <input type="text" name="supplier_address" placeholder="Supplier Address" text size="30" maxlength ="300"/><br /><?php echo form_error('supplier_address'); ?><br />
        <input type="text" name="part_number" placeholder="Part number" text size="30" maxlength ="40"/><br /><?php echo form_error('part_number'); ?><br />
        <input type="text" name="price" placeholder="Price" text size="30" maxlength ="30"/><br /><?php echo form_error('price'); ?><br />
        <input type="text" name="quantity" placeholder="Quantity" text size="30" maxlength ="30"/><br /><?php echo form_error('quantity'); ?><br />
        
        <br />
    <input type="submit" value="Submit" />
        
    <?php echo form_close(); ?>
</div>
</div>
<?php 
$this->load->view('footer');
?>
