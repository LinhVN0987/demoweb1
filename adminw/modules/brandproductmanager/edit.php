<?php 
$sql="select * form brandproducts where id_brandproduct=$_GET['id']";
$run=mysql_query($sql);
$row=mysql_fetch_array($run);
 ?>

<form action="modules/brandproductmanager/handling.php?id=<?php echo $row['id_brandproduct'] ?>" method="post" enctype="multipart/form-data">
	<table width="100%" border="1">
		<tr>
			<td colspan="2" rowspan="" headers="">
				<div align="center">
					EDIT BRAND PRODUCT
				</div>
			</td>
		</tr>
	
	
		<tr>
			<td>Name Product</td>
			<td><input type="text" name="brandproductnamee" value="<?php echo $row['brandproductnamee']?>"></td>
		</tr>
		<tr>
			<td>Serial</td>
			<td><input type="text" name="seriall" value="<?php echo $row['seriall']?>"></td>
		</tr>
		<tr>
			<td colspan="2">
				<div align="center">
				<input type="submit" name="editt" id="editt" value="Edit">	
				</div>
			</td>
		</tr>
	
	</table>
</form>