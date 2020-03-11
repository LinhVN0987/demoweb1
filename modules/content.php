<div id="content">
<div id="left">
	<?php
	include('modules/left/menuleft.php') 
	 ?>
</div>
	<div id="right">
				<?php 
				if (isset($_GET['xm'])) {
					$tm=$_GET['xm'];
				}
				else{
					$tm='';
				}
				if($tm=='productbranddetails'){
					include('modules/right/productbranddetails.php');
				}
				elseif($tm=='productdetails'){
					include('modules/right/productdetails.php');
				}
				elseif($tm=='tablets'){
					include('modules/right/tablets.php');
				}elseif($tm=='accessories'){
					include('modules/right/accessories.php');
				}elseif($tm=='applewatch'){
					include('modules/right/applewatch.php');
				}elseif($tm=='repair'){
					include('modules/right/repair.php');
				}elseif($tm=='samsung'){
					include('modules/right/samsung.php');
				}elseif($tm=='lg'){
					include('modules/right/lg.php');
				}elseif($tm=='nokia'){
					include('modules/right/nokia.php');
				}elseif($tm=='sony'){
					include('modules/right/sony.php');
				}elseif($tm=='xiaomi'){
					include('modules/right/xiaomi.php');
				}elseif($tm=='applee'){
					include('modules/right/applee.php');
				}
				else{
					include('modules/right/allproducts.php');
				}

				 ?>
	</div>
</div>
		<div id = "clear"></div>