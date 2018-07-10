<?php

session_start();

$db = mysqli_connect("localhost","root","","proj2");
$select = @mysqli_select_db("proj2");





if(isset($_GET['submit']))
{
	
	$cutoff=$_GET['cutoff'];
	$caste=$_GET['caste'];
	$mob=$_GET['mob'];
	
	
	
	$sql = 'INSERT INTO `enter`(`id`, `cutoff`, `caste`,`mob`) VALUES (NULL,"'.$cutoff.'","'.$caste.'","'.$mob.'")';
	$result= mysqli_query($db,$sql);
	
	
	

	

header("location:http://localhost/php/project2/in/page1.html");
	
}
?>