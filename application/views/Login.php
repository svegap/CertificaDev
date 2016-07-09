
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href= "<?php base_url('assets/img/educacion.png') ?>">

        <title>Signin Template for Bootstrap</title>

        <link href= "<?php echo base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">

        <link href="<?php echo base_url('assets/css/ie10-viewport-bug-workaround.css') ?>" rel="stylesheet">

        <link href="<?php echo base_url('assets/css/signin.css') ?>" rel="stylesheet">

        <script src="<?php echo base_url('assets/js/ie-emulation-modes-warning.js') ?>"></script>

    </head>       

    <body>
       
        <div style="width: 30%" class="container">

            <form action="<?php echo base_url('index.php/Login_ct/login') ?>" method="POST" >
                <?php
                $txtRut = array('type' => 'text',
                    'name' => 'txtRut',
                    'id' => 'txtRut',
                    'class' => 'form-control',
                    'placeholder' => 'Ingrese Rut',
                    'value' => '',
                    'style' => 'margin-bottom: 7px' ,
                    'required' => 'required' ,
                    'autofocus' => 'true');
                ?>
                <?php echo form_input($txtRut); ?>    
                                
                <?php
                $iptPassword = array('type' => 'password',
                    'name' => 'iptPassword',
                    'id' => 'iptPassword',
                    'class' => 'form-control',
                    'placeholder' => 'Password',
                    'style' => 'margin-bottom: 7px' ,
                    'value' => '',
                    'required'=> 'required');
                ?>
                <?php echo form_input($iptPassword); ?> 
                
                                
                <div>
                    <input style="width: 47%;float: left; " class="btn btn-sm btn-warning " name ="btnRegistrar" id ="btnRegistrar" type="button" value="Registrar" />
                    <input style="width: 47%;float: right; " class="btn btn-sm btn-primary " name ="btnLogin" id ="btnLogin" type="submit" value="Ingresar" />
                </div>
            </form>          

            <?php
            if (isset($mensaje)) {
                echo '<div id="mensaje" class="container text-center animated bounceIn">';
                echo '<h4 class="text-success" >' . $mensaje . '</h4>';
                echo '</div>';
            }
            ?>
        </div> 
        <script src="<?php echo base_url('assets/js/ie10-viewport-bug-workaround.js') ?>"></script>
    </body>
</html>