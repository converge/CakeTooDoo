<?php echo $form->create('Task'); ?>

<fieldset>

	<legend>Edit Task</legend>
	<?php 
		echo $form->hidden('id');
		echo $form->input('title');
		echo $form->input('done');
	?>

</fieldset>

<?php echo $form->end('Save'); ?>

<p><?php echo $html->link('List all tasks', array('action' => 'index', null, true)); ?></p>
<p><?php echo $html->link('Add tasks', array('action' => 'add', null, true)); ?></p>