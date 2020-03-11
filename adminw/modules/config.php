<?php 

// Enter your Host, username, password, database below.
$con = mysqli_connect("localhost","root","","webasm2");
    if (mysqli_connect_errno()){
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
 die('Error connecting to server');
 }

 /* 
$namedb='localhost';
$nameaccount='root';
$pass='';
$db='webasm2';
$conn=mysqli_connect($namedb,$nameaccount,$pass,$db) or die('Error connecting to server!!!');

mysqli_select_db($conn);
*/
 ?>