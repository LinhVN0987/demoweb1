
<div id="content">
			<?php 
			if(isset($_GET['manager'])){
				$tm=$_GET['manager'];
			}else{
				$tm='';
			}if($tm=='brandproductmanager'){
				include('modules/brandproductmanager/main.php');
			}if($tm=='brprodetailmanager'){
				include('modules/brprodetailmanager/main.php');
			}	
			 ?>
			
</div>		
<div id="clear"></div>		