<table>
	<tr>
		<th>ID</th>
		<th>name</th>
		<th>level</th>
	</tr>
<?php foreach ($data as $obj): ?>
  <tr>
  	<td><?= $obj->id ?></td>
  	<td><?= h($obj->name) ?></td>
  	<td><?= h($obj->level) ?></td>
  </tr>
<?php endforeach; ?>
</table>
