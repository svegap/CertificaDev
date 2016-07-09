<?php // Change the css classes to suit your needs    

$attributes = array('class' => '', 'id' => '');
echo form_open('Postulante_ct', $attributes); ?>

<p>
        <label for="rut">Rut <span class="required">*</span></label>
        <?php echo form_error('rut'); ?>
        <br /><input id="rut" type="text" name="rut" maxlength="10" value="<?php echo set_value('rut'); ?>"  />
</p>

<p>
        <label for="fechaNacimiento">Fecha Nacimiento <span class="required">*</span></label>
        <?php echo form_error('fechaNacimiento'); ?>
        <br /><input id="fechaNacimiento" type="text" name="fechaNacimiento"  value="<?php echo set_value('fechaNacimiento'); ?>"  />
</p>

<p>
        <label for="sexo">Sexo <span class="required">*</span></label>
        <?php echo form_error('sexo'); ?>
        <br />
                <?php // Change or Add the radio values/labels/css classes to suit your needs ?>
                <input id="sexo" name="sexo" type="radio" class="" value="option1" <?php echo $this->form_validation->set_radio('sexo', 'option1'); ?> />
        		<label for="sexo" class="">Radio option 1</label>

        		<input id="sexo" name="sexo" type="radio" class="" value="option2" <?php echo $this->form_validation->set_radio('sexo', 'option2'); ?> />
        		<label for="sexo" class="">Radio option 2</label>
</p>


<p>
        <label for="telefono">Telefono</label>
        <?php echo form_error('telefono'); ?>
        <br /><input id="telefono" type="text" name="telefono" maxlength="10" value="<?php echo set_value('telefono'); ?>"  />
</p>

<p>
        <label for="email">E-Mail</label>
        <?php echo form_error('email'); ?>
        <br /><input id="email" type="text" name="email" maxlength="50" value="<?php echo set_value('email'); ?>"  />
</p>

<p>
        <label for="direccion">Direccion <span class="required">*</span></label>
        <?php echo form_error('direccion'); ?>
        <br /><input id="direccion" type="text" name="direccion" maxlength="100" value="<?php echo set_value('direccion'); ?>"  />
</p>

<p>
        <label for="experiencia">Experiencia <span class="required">*</span></label>
        <?php echo form_error('experiencia'); ?>
        <br /><input id="experiencia" type="text" name="experiencia" maxlength="1" value="<?php echo set_value('experiencia'); ?>"  />
</p>

<p>
        <label for="anos">Años <span class="required">*</span></label>
        <?php echo form_error('anos'); ?>
        <br /><input id="anos" type="text" name="anos" maxlength="2" value="<?php echo set_value('anos'); ?>"  />
</p>

<p>
        <label for="idComuna">Comuna <span class="required">*</span></label>
        <?php echo form_error('idComuna'); ?>
        
        <?php // Change the values in this array to populate your dropdown as required ?>
        <?php $options = array(
                                                  ''  => 'Please Select',
                                                  'example_value1'    => 'example option 1'
                                                ); ?>

        <br /><?php echo form_dropdown('idComuna', $options, set_value('idComuna'))?>
</p>                                             
                        
<p>
        <label for="idEducacion">Educacion <span class="required">*</span></label>
        <?php echo form_error('idEducacion'); ?>
        
        <?php // Change the values in this array to populate your dropdown as required ?>
        <?php $options = array(
                                                  ''  => 'Please Select',
                                                  'example_value1'    => 'example option 1'
                                                ); ?>

        <br /><?php echo form_dropdown('idEducacion', $options, set_value('idEducacion'))?>
</p>                                             
                        
<p>
        <label for="idModalidad">Modalidad <span class="required">*</span></label>
        <?php echo form_error('idModalidad'); ?>
        
        <?php // Change the values in this array to populate your dropdown as required ?>
        <?php $options = array(
                                                  ''  => 'Please Select',
                                                  'example_value1'    => 'example option 1'
                                                ); ?>

        <br /><?php echo form_dropdown('idModalidad', $options, set_value('idModalidad'))?>
</p>                                             
                        
<p>
        <label for="idCurso">Curso <span class="required">*</span></label>
        <?php echo form_error('idCurso'); ?>
        
        <?php // Change the values in this array to populate your dropdown as required ?>
        <?php $options = array(
                                                  ''  => 'Please Select',
                                                  'example_value1'    => 'example option 1'
                                                ); ?>

        <br /><?php echo form_dropdown('idCurso', $options, set_value('idCurso'))?>
</p>                                             
                        
<p>
        <label for="idEstado">Estado <span class="required">*</span></label>
        <?php echo form_error('idEstado'); ?>
        
        <?php // Change the values in this array to populate your dropdown as required ?>
        <?php $options = array(
                                                  ''  => 'Please Select',
                                                  'example_value1'    => 'example option 1'
                                                ); ?>

        <br /><?php echo form_dropdown('idEstado', $options, set_value('idEstado'))?>
</p>                                             
                        
<p>
        <label for="idPerfil">Perfil <span class="required">*</span></label>
        <?php echo form_error('idPerfil'); ?>
        
        <?php // Change the values in this array to populate your dropdown as required ?>
        <?php $options = array(
                                                  ''  => 'Please Select',
                                                  'example_value1'    => 'example option 1'
                                                ); ?>

        <br /><?php echo form_dropdown('idPerfil', $options, set_value('idPerfil'))?>
</p>                                             
                        

<p>
        <?php echo form_submit( 'submit', 'Submit'); ?>
</p>

<?php echo form_close(); ?>