<?php
	require_once('db_con.php');
	$sql = 'SELECT productCode, productName, buyPrice FROM products';
	$result = $mysqli->query($sql, MYSQLI_USE_RESULT);
?>
<table align="center" width="640" cellpadding="10" rules="all" border="1">
	<thead>
		<tr>
			<th>Product Code</th>
			<th>Product Name</th>
			<th>Product Price</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		<?php WHILE(list($productCode, $productName, $buyPrice) = $result->fetch_row()){ ?>
			<tr>
				<td><?= $productCode; ?></td>
				<td><?= $productName; ?></td>
				<td><?= $buyPrice; ?></td>
				<td><a href="delete-product.php?id=<?= $productCode;?>">Delete</a></td>
			</tr>
		<?php }; ?>
	</tbody>
</table>