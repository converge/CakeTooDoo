<?php echo $form->create('Task'); ?>
<fieldset>

	<legend>Create New Task</legend>
	<?php
		echo $form->input('title');
		echo $form->input('done');
	?>
	
</fieldset>	
	
<?php echo $form->end('Add Task'); ?>