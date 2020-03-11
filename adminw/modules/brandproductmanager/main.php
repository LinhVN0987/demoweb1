<div id="left">
	<?php 
	if(isset($_GET['ac'])){
		$tm=$_GET['ac'];
	}else{
		$tm='';
	}
	if($tm=='add'){
		include('modules/brandproductmanager/add.php');
	}
	if($tm=='edit'){
		include('modules/brandproductmamager/edit.php');
	}
	 ?>
</div>
<div id="right">
	<?php 
	include('modules/brandproductmanager/listed.php');
	 ?>
	
</div>