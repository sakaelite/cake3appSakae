<table>
	<tr>
		<th>ID</th>
		<th>品番</th>
		<th>品名</th>
		<th>単価</th>
	</tr>
<?php foreach ($data as $obj): ?>
  <tr>
  	<td><?= $obj->id ?></td>
  	<td><?= h($obj->product_id) ?></td>
  	<td><?= h($obj->product_name) ?></td>
  	<td><?= h($obj->price) ?></td>
  </tr>
<?php endforeach; ?>
</table>
