
<?php
$sel_query = "Select * form brandproducts ORDER BY id_brandproduct desc;";
$run = mysqli_query($con,$sel_query);
 ?>

<table width="100%" border="1">
	<tr>
		<td>ID</td>
		<td>Name Product</td>
		<td>Serial</td>
		<td colspan="2">Manager</td>
	</tr>

	<?php
	//lay du lieu tu sql
	$count=1;
	while($row = mysqli_fetch_assoc($run)){  ?>
	 

	<tr>
		<td><?php echo $count; ?></td>
		<td><?php echo $row['brandproductname'] ?></td>
		<td><?php echo $row['serial'] ?></td>
		<td><a href="indexadminw.php/manager=brandproductmanager&ac=edit&id=<?php echo $row['id_brandproduct']?>" title="">Edit</a></td>

		<td><a href="modules/brandproductmanager/handling.php?id=<?php echo $row['id_brandproduct'] ?>">Delete</a></td>
	</tr>

	<?php $count++; } ?>
	
	  
	 

</table>
