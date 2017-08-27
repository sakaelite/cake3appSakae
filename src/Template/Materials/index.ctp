<table>
	<tr>
		<th>NAME</th>
		<th>level1</th>
		<th>level2</th>
	</tr>
<?php foreach ($data as $obj): ?>
  <tr>
  	<td><?= h($obj->name) ?></td>
  	<td><?= h($obj->level1) ?></td>
  	<td><?= h($obj->level2) ?></td>
  </tr>
<?php endforeach; ?>
</table>