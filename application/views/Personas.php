<?php // Change the css classes to suit your needs    

$attributes = array('class' => '', 'id' => '');
echo form_open('Persona_ct', $attributes); ?>

<p>
        <label for="rut">rut <span class="required">*</span></label>
        
        <?php
        $data = array('type' => 'text',
            'name' => 'txtRut',
            'id' => 'rut',
            'value' => '',
            'class' => 'form-control input-sm',
            'maxlength' => '10'
        );
        echo form_input($data);
        ?>

        <?php echo form_error('rut'); ?>
        <!--<br /><input id="rut" type="text" name="rut" maxlength="10" value="<?php echo set_value('rut'); ?>"  />-->
</p>

<p>
        <label for="dv">dv <span class="required">*</span></label>
        <?php echo form_error('dv'); ?>
        <br /><input id="dv" type="text" name="dv" maxlength="1" value="<?php echo set_value('dv'); ?>"  />
</p>

<p>
        <label for="nombre">nombre <span class="required">*</span></label>
        <?php echo form_error('nombre'); ?>
        <br /><input id="nombre" type="text" name="nombre" maxlength="50" value="<?php echo set_value('nombre'); ?>"  />
</p>

<p>
        <label for="apellidoPaterno">Apellido Paterno <span class="required">*</span></label>
        <?php echo form_error('apellidoPaterno'); ?>
        <br /><input id="apellidoPaterno" type="text" name="apellidoPaterno" maxlength="50" value="<?php echo set_value('apellidoPaterno'); ?>"  />
</p>

<p>
        <label for="apellidoMaterno">Apellido Materno <span class="required">*</span></label>
        <?php echo form_error('apellidoMaterno'); ?>
        <br /><input id="apellidoMaterno" type="text" name="apellidoMaterno" maxlength="50" value="<?php echo set_value('apellidoMaterno'); ?>"  />
</p>

<p>
        <label for="contrasena">Contraseña <span class="required">*</span></label>
        <?php echo form_error('contrasena'); ?>
        <br /><input id="contrasena" type="text" name="contrasena" maxlength="15" value="<?php echo set_value('contrasena'); ?>"  />
</p>


<p>
        <?php echo form_submit( 'submit', 'Submit'); ?>
</p>

<?php echo form_close(); ?>
