<?php session_start(); 
    // The bellow codes authenticate if a user has been signin or not
	
	if (!isset($_SESSION['username'])){
		header('Location:resultchecking.php');
		
	} 
	
$con = mysqli_connect('localhost', 'root', '', 'phonebooks');
$username = $_SESSION['username'];


// The bellow query check if the user has voted twice
		
$check_voted_query = "SELECT * FROM tbl_practice WHERE `username` = '$username' AND `voted` = 1";

$check_voted_result = mysqli_query($con, $check_voted_query);

if(mysqli_num_rows($check_voted_result) > 0){
	
	echo "<script> alert('You have to sign in before you vote and remember you can\'t vote twice!'); </script>";
	  header('Location:resultchecking.php');
}	 
		
?>

<!DOCTYPE html>
  <html> <head> <title> casting </title> 
  <link rel = "stylesheet" href = "style/casting.css">
  </head>
  <body> 
  <div id = "wrapper">  
  <h3> Vote Right </h3>
  <h4>  Cast your vote here by DOUBLE CLICKING on your your prefered party </h4>
    <div class="col-sm-3 offset-1">
	   <form method = "post" action = "casting.php"> 
		 
		   <input type ="submit" name ="PDP" value = "PDP" > <p>
		   <input type ="submit" name ="APC" value = "APC" > <p>
		 <input type ="submit" name ="ANPP" value = "ANPP" > <p>
		 <input type ="submit" name ="HDP" value = "HDP" > <p>
		 <input type ="submit" name ="UPD" value = "UPD" > <p>
		 <input type ="submit" name ="NCP" value = "NCP" > <p>
		 <input type ="submit" name ="ADC" value = "ADC" > <p>
		 <input type ="submit" name ="UPP" value = "UPP" > <p>
		  
		 </form>
	</div>
<?php 

 
if(!$con){die('Error querying database' . mysqli_error($con)); }

//checking


// The bellow lines of code updates the update database of PDP
if(isset($_POST['PDP'])){

$query_PDP = " UPDATE tbl_result SET PDP = PDP + 1 " ;

$voted_query = "UPDATE tbl_practice SET `voted` = 1 WHERE `username` = '$username'";
echo"<script> ('thank you for voting') </script>";
$voted_result = mysqli_query($con, $voted_query) or die('Invalid UPDATE query');

 $PDP_result = mysqli_query($con , $query_PDP);
 
echo '<a href = "resultchecking.php">' ; 
 //if($PDP_result){ 
 
 //header('Location : resultchecking.php');  
 //}
}


// The bellow lines of codes update database of APC


if(isset($_POST['APC'])){

$query_APC = " UPDATE tbl_result SET APC = APC + 1 " ;

$voted_query = "UPDATE tbl_practice SET `voted` = 1 WHERE `username` = '$username'";

$voted_result = mysqli_query($con, $voted_query) or die('Invalid UPDATE query');

 $APC_result = mysqli_query($con , $query_APC);
 
 if($APC_result){  
 header('Location : resultchecking.php');  
 }
}

// the below program update ANPP

if(isset($_POST['ANPP'])){

$query_ANPP = " UPDATE tbl_result SET ANPP = ANPP + 1 " ;

$voted_query = "UPDATE tbl_practice SET `vote?` = 1 WHERE `username` = '$username'";

$voted_result = mysqli_query($con, $voted_query) or die('Invalid UPDATE query');

 $ANPP_result = mysqli_query($con , $query_ANPP);
 
 if($ANPP_result){  
 header('Location : resultchecking.php');  
 }
}



// The bellow lines of code updates the update database of PDP
if(isset($_POST['HDP'])){

	$query_HDP = " UPDATE tbl_result SET HDP = HDP + 1 " ;
	
	$voted_query = "UPDATE tbl_practice SET `voted` = 1 WHERE `username` = '$username'";
	echo"<script> ('thank you for voting') </script>";
	$voted_result = mysqli_query($con, $voted_query) or die('Invalid UPDATE query');
	
	 $HDP_result = mysqli_query($con , $query_HDP);
	 
	echo '<a href = "resultchecking.php">' ; 
	 //if($HDP_result){ 
	 
	 //header('Location : resultchecking.php');  
	 //}
	}


// the below program update UPD

if(isset($_POST['UPD'])){

$query_UPD = " UPDATE tbl_result SET UPD = UPD + 1 " ;

$voted_query = "UPDATE tbl_practice SET `voted` = 1 WHERE `username` = '$username'";

$voted_result = mysqli_query($con, $voted_query) or die('Invalid UPDATE query');

 $UPD_result = mysqli_query($con , $query_UPD);
 
 if($UPD_result){  
 header('Location : resultchecking.php');  
 }
}



// The bellow lines of code updates the update database of PDP
if(isset($_POST['PDP'])){

	$query_NCP = " UPDATE tbl_result SET NCP = NCP + 1 " ;
	
	$voted_query = "UPDATE tbl_practice SET `voted` = 1 WHERE `username` = '$username'";
	echo"<script> ('thank you for voting') </script>";
	$voted_result = mysqli_query($con, $voted_query) or die('Invalid UPDATE query');
	
	 $NCP_result = mysqli_query($con , $query_NCP);
	 
	echo '<a href = "resultchecking.php">' ; 
	 //if($PDP_result){ 
	 
	 //header('Location : resultchecking.php');  
	 //}
	}

// The bellow lines of code updates the update database of ADC
if(isset($_POST['ADC'])){

	$query_ADC = " UPDATE tbl_result SET ADC = ADC + 1 " ;
	
	$voted_query = "UPDATE tbl_practice SET `voted` = 1 WHERE `username` = '$username'";
	echo"<script> ('thank you for voting') </script>";
	$voted_result = mysqli_query($con, $voted_query) or die('Invalid UPDATE query');
	
	 $_result = mysqli_query($con , $query_ADC);
	 
	echo '<a href = "resultchecking.php">' ; 
	 //if($PDP_result){ 
	 
	 //header('Location : resultchecking.php');  
	 //}
	}




// The bellow lines of code updates the update database of UPP
if(isset($_POST['UPP'])){

	$query_UPP = " UPDATE tbl_result SET UPP = UPP + 1 " ;
	
	$voted_query = "UPDATE tbl_practice SET `voted` = 1 WHERE `username` = '$username'";
	echo"<script> ('thank you for voting') </script>";
	$voted_result = mysqli_query($con, $voted_query) or die('Invalid UPDATE query');
	
	 $UPP_result = mysqli_query($con , $query_UPP);
	 
	echo '<a href = "resultchecking.php">' ; 
	 //if($PDP_result){ 
	 
	 //header('Location : resultchecking.php');  
	 //}
	}

?>
</div>		 
</div>
<?php
include('include/footer.php');
?>		 
</div>	
</body>
</html>
</html>

