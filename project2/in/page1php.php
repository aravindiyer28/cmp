<?php

session_start();
$db = mysqli_connect("localhost","root","","proj2");
$select = @mysqli_select_db("proj2");
 if(isset($_POST['submit']))
{
	
	$type=$_POST['type'];
	$dept=$_POST['dept'];
	
	
	

	$sql = 'INSERT INTO `page1`(`id`, `type`, `dept`) VALUES (NULL,"'.$type.'","'.$dept.'")';

	$result= mysqli_query($db,$sql);
	$res = mysqli_fetch_array($result);

	

	
	header("Location:http://localhost/php/project2/in/select.html");
}

	
?>
