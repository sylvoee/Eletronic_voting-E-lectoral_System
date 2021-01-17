<?php 

if(isset($_POST['submit'])){
	
	
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$username = $_POST['username']; 
	$national_id = $_POST['national_id'];




	$password = sha1($_POST['password']); 
	
	

$con = mysqli_connect('localhost', 'root', '', 'phonebooks'); 

if(!$con)
{
	die('Error querying database' . mysqli_error($con)); 
	
}

	
	$query = "INSERT INTO tbl_practice VALUES('', '$firstname', '$lastname',  '$username', '$national_id' , '$password', '')";
	
	$result = mysqli_query($con, $query); 
	
	if($result){
		
		echo "<script>alert('registration successful');</script>";
		
		$firstname = $lastname = $usernname = $password = $national_id = ""; 
		 
	}else {
	
		
		echo "<script>alert('Failed to insert record , your voter's ID or password should be more than 5 characters');</script>";
	}
	
}

header('Location:resultchecking.php');

?>


