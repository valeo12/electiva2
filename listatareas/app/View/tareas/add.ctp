<?php echo $this->form->create('Tarea'); ?>
<fieldset>
<legend>Añadir Nueva Tarea</legend>
<?php
	echo $this->form->input('titulo');
	echo $this->form->input('hecha');
?>
</fieldset>
<?php echo $this->form->end('Añadir Tarea'); ?>
<?php echo $this->html->link('List All Tasks', array('action'=>'index')); ?>