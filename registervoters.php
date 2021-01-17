

<?php 
// The bellow program authenticate the admin user

$admin_user = "admin";
$admin_pass = "admin";

if (!isset($_SERVER['PHP_AUTH_USER']) || !isset($_SERVER['PHP_AUTH_PW']) ||
($_SERVER['PHP_AUTH_USER'] != $admin_user) || ($_SERVER['PHP_AUTH_PW'] != $admin_pass)) {

// header('HTTP/1.1 401 Unauthorized');
header('WWW-Authenticate: Basic realm="INEC POLLS"');
exit('<h2>INEC Polls</h2>Sorry, you are not authorized to visit this page');
}
?>
<?php
include('include/header.php');
?>

<div class="container">




<div id="register" class ="container col-sm-offset-5">
<h2 style= "padding-bottom:2em;">Register New Voter</h2>

	<hr>
	<form method="post" action="registerprocessing.php">
	
         <div class="form-group col-sm-7">
		<input type="text" name="firstname" class = "form-control" placeholder ="Enter Name" required>
        </div>

		<div class="form-group col-sm-7">
		<input type="text" name="lastname" class = "form-control" placeholder ="Enter Last Name" required>
		</div>
	    
		<div class="form-group col-sm-7">
		<input type="text" name="username" class = "form-control" placeholder ="Enter BVN" required>
	</div>

	<div class="form-group col-sm-7">
		<input type="text" name="national_id" class = "form-control" placeholder ="Enter National Card ID" required>
	</div>
		
	<div class="form-group col-sm-7">
	 <label for="Password"></label>
		<td><input type="password" name="password" class = "form-control" placeholder = "password" required></td>
		</div>
	
		
		<div class ="col-sm-6">
		<input type="reset" value="Reset" name = "reset" class = "btn btn-info"> 
		<input type="submit" value="Create" name="submit" class = "btn btn-success">
		</div>
		
	</form>
</div> 

</div>
<div>
<?php
include('include/footer.php');
?>
</div>
</body>
</html>




	




















