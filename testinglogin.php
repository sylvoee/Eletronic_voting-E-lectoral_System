<?php
session_start();
 $con = mysqli_connect("localhost", "root", "" ,"phonebooks");
 // Another way of writng if else 
 if(!$con)
	echo "unable to connect "  .  mysqli_error($con);
//else 
#	var_dump($con);

		
		if(isset($_POST['submit']))
		{
		 $username = $_POST['username'];
		 $national_id = $_POST['national_id'];
		 $password = sha1($_POST['password']);
			
			
			$query = "SELECT * FROM tbl_practice  WHERE username = '$username' AND national_id = '$national_id' AND password = '$password'   " ;
			
			$res = mysqli_query($con, $query);
			if(!$res){
				echo "error querying database" .  mysqli_error($con);
			} else {
			 /*The bellow codes is just for test running or debugging
				$data = mysqli_fetch_assoc($res);
				var_dump($data);
				
				 The bellow is an if statement in an else statement*/
				 
				if(mysqli_num_rows($res)==0){
					echo "Voter's IDs and/or password not found";
				}
				else {
					
					$_SESSION['username'] = $username; 
					header('Location: casting.php');
				}
		
		}
		}

		
?>	

<?php
include('include/header.php');
?>

<form method="post" class ="col-sm-7 col-sm-offset-4" action="testinglogin.php">
<h3>Login To Vote</h3> <hr>
		<div class="form-group col-sm-7 ">
		<input type="text" name="username" class = "form-control" placeholder ="Enter BVN" required>
	</div>

	<div class="form-group col-sm-7 ">
		<input type="text" name="national_id" class = "form-control" placeholder ="Enter National ID" required>
	</div>
		
	<div class="form-group col-sm-7">
	 <label for="Password"></label>
		<td><input type="password" name="password" class = "form-control"  required></td>
		</div>
	
		
		<div class ="col-sm-6">
		<input type="reset" value="Reset" name = "reset" class = "btn btn-info"> 
		<input type="submit" value="Login To Register" name="submit" class = "btn btn-success">
		</div>
		
	</form>
		
	</form>
</div> 
<div class ="col-sm-12">
<?php
include('include/footer.php');
?>

</div>
</body>
</html>