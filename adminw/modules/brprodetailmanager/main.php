<div id="left">
	<?php 
	if(isset($_GET['ac'])){
		$tm=$_GET['ac'];
	}else{
		$tm='';
	}
	if($tm=='add'){
		include('modules/brprodetailmanager/add.php');
	}
	if($tm=='edit'){
		include('modules/brprodetailmanager/edit.php');
	}
	 ?>
</div>
<div id="right">
	<?php 
	include('modules/brprodetailmanager/listed.php');
	 ?>
	
</div>