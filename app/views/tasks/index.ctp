<h2>Tasks</h2>
<?php if (empty($tasks)): ?>
There are no tasks in this list
<?php else: ?>
<table>
	<tr>
		<th>Title</th>
		<th>Status</th>
		<th>Created</th>
		<th>Modified</th>
		<th>Actions</th>
	</tr>
	<?php foreach ($tasks as $task): ?>
	<tr>
		<td><?php echo $task['Task']['title'] ?></td>
		<td>
			<?php
	  			if ($task['Task']['done']) echo "Done";
      			else echo "Pending";
        	?>
        </td>
		<td><?php echo $task['Task']['created'] ?></td>
		<td><?php echo $task['Task']['modified'] ?></td>
		<td><?php echo $html->link('Edit', array('action' => 'edit', $task['Task']['id'])); ?></td>
	</tr>
	<?php endforeach; ?>
</table>
<?php endif; ?>

<p><?php echo $html->link('Add task', array('action'=>'add')); ?></p>
<p><?php echo $html->link('List all tasks', array('action'=>'index')); ?></p>