

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" />
        <title>login</title>
        <link rel="stylesheet" type="text/css" 
              href="<?php echo base_url();?>/assets/css/base.css">
    </head>

    <body>

        <h1>Log into your account</h1>
            <?php echo form_open('login/loginuser'); ?>

            <div id="wrap">
                

           <p><label for="emailAddress">Email:</label>
                <input name="emailAddress" type="email" id="emailAddress"  
                       placeholder="Enter Email"
                       value="<?php echo $this->input->post('emailAddress') ?>"/></p>

         <p><label for="password">Password:</label>
                <input name="password" type="password" id="password"  
                       placeholder="Enter Password"
                       value="<?php echo $this->input->post('password') ?>"/></p>
                

                <p>
                    <input type="submit" name="login" id="submit" value="Enter"></p>
                <p>
                    <a href="<?php echo base_url();?>index.php/HomeController/Register">
                        <button type="button" name="reg" id="reg">Register</button></a></p>
            </div>
        </form>

    </body>
</html>
