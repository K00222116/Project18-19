<?php
$this->load->view('header');
$template = array(
        'table_open' => '<table border="1" cellpadding="2" cellspacing="1" class="mytable" style="text-align: center;">'
);

$this->table->set_template($template);
?>

<h1>Prepare scrap note.</h1>
<div>
<?php echo form_open('#'); ?>
<legend>Prepare Scrap Note</legend>
<input type="text" name="Job_number" placeholder="Job number" text size="30" maxlength ="20"/><br /><?php echo form_error('job_number'); ?><br />
        <input type="text" name="part_number" placeholder="Part number" text size="30" maxlength ="40"/><br /><?php echo form_error('part_number'); ?><br />
        <input type="text" name="price" placeholder="Price" text size="30" maxlength ="15"/><br /><?php echo form_error('price'); ?><br />
        <input type="text" name="reason_for_scrap" placeholder="Reason for Scrap" text size="30" maxlength ="300"/><br /><?php echo form_error('reason_for_scrap'); ?><br />
        <input type="text" name="supplier" placeholder="Supplier" text size="30" maxlength ="255"/><br /><?php echo form_error('supplier'); ?><br />
        <br />
    <input type="submit" value="Submit" />
        
    <?php echo form_close(); ?>
</div>
</div>
<?php 
$this->load->view('footer');
?>

