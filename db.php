<?php 

$con = mysqli_connect('localhost', 'root', '', 'phonebooks'); 

if(!$con)
{
	die('Error querying database' . mysqli_error($con)); 
	
}