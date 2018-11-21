<!doctype html>
<html>

    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" />
        <title>Sign up</title>
        <link rel="stylesheet" type="text/css" 
              href="<?php echo base_url(); ?>/assets/css/base.css">
    </head>

    <body id="body">

        <h1>Create your account</h1>
        <?php echo form_open('/HomeController/home'); ?>

        <div id="wrap">


            <p><label for="fName">First Name:</label>
                <input name="fName" type="text" id="fName" 
                       placeholder="Enter first name"
                       value="<?php echo $this->input->post('fName') ?>"></p>

            <p><label for="lName">Last Name:</label>
                <input name="lName" type="text" id="lName"  
                       placeholder="Enter last name"
                       value="<?php echo $this->input->post('lName') ?>"></p>

            <p><label for="emailAddress">Email:</label>
                <input name="emailAddress" type="email" id="emailAddress"  
                       placeholder="Enter Email"
                       value="<?php echo $this->input->post('emailAddress') ?>"/></p>

         <p><label for="password">Password:</label>
                <input name="password" type="password" id="password"  
                       placeholder="Enter Password"
                       value="<?php echo $this->input->post('password') ?>"/></p>

        <p>
            <input type="submit" name="submit" id="submit" value="Submit"></p>
        <p>
            <a href="<?php echo base_url(); ?>index.php/HomeController/login">
                <button type="button" name="reg" id="reg">login</button></a></p>
    </div>
</form>               
</body>
</html>
