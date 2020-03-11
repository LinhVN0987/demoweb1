<?php 
include('../config.php');
$id=$_GET['id'];
$bpn = $_POST['brandproductnamee'];
$sri = $_POST['seriall'];
if(isset($_POST['addd'])){
	//add brand product
	$query="insert into brandproducts (brandproductname,serial) values ('$bpn','$sri')";
	mysqli_query($con,$query);
	header('location:../../indexadminw.php?manager=brandproductmanager&ac=add');
}elseif (isset($_POST['edit'])) {
	//edit ...
	$sql="update brandproducts set brandproductname='$brandproductnamee',serial='seriall' where id_brandproduct='$id';";
	mysqli_query($sql);
	header('../../indexadminw.php?brandproductmanager&ac=edit&id='.$id);

}else{
	//delete
	$query="delete form brandproducts where id_brandproduct='$id'"; 
	mysqli_query($query);
	header('location:../../indexadminw.php?manager=brandproductmanager&ac=add');
}

 ?>