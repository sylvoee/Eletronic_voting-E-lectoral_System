<?php
include('include/header.php');
?>
<div class="container col-sm-12">
<h3 style= "padding-bottom:2em; color:#67654; text-align:center"> WELCOME TO INEC ELECTRONIC VOTING SYSTEM (POLL) </h3>
<hr>
<div id = "wrapper"> 



<?php
$con = mysqli_connect('localhost', 'root', '', 'phonebooks'); 
if(!$con){die('Error querying database' . mysqli_error($con)); }

$query_result = "SELECT * FROM tbl_result";
$result = mysqli_query($con, $query_result);
$row = mysqli_fetch_array($result);
?>





<?php
$PDP_count = $row['PDP']; 
$APC_count = $row['APC']; 
$ANPP_count = $row['ANPP'];
$HDP_count = $row['HDP'];
$UPD_count = $row['UPD'];
$NCP_count = $row['NCP'];
$ADC_count = $row['ADC'];
$UPP_count = $row['UPP'];
$total_vote = $PDP_count + $APC_count + $HDP_count + $UPD_count + $NCP_count + $ADC_count + $UPP_count; 
?>

<div class="col-sm-6">
<h3 class ="btn btn-success">Table Showing Result</h3>
<table class = "table table-striped">
<tr><td>Party</td> <td>Count</td></tr>
<tr><td>PDP</td><td><?php echo $row['PDP'];  ?> </td></tr>
<tr><td>APC</td><td><?php echo $row['APC'];  ?> </td></tr>
<tr><td>ANPP</td><td><?php echo $row['ANPP'];  ?> </td></tr>
<tr><td>UPD</td><td><?php echo $row['UPD'];  ?> </td></tr>
<tr><td>NCP</td><td><?php echo $row['NCP'];  ?> </td></tr>
<tr><td>ADC</td><td><?php echo $row['ADC'];  ?> </td></tr>
<tr><td>UPP</td><td><?php echo $row['UPP'];  ?> </td></tr>
<tr class = "danger"><td>Total Vote</td><td><?php echo $total_vote?> </td></tr>
</table>

<?php
// The bellow codes calculate the percentage of each party
$total = $PDP_count + $ANPP_count + $APC_count + $ANPP_count + $HDP_count + $UPD_count + $NCP_count + $ADC_count + $UPP_count;

$PDP_count = round($PDP_count/$total *100). "%";
$ANPP_count = round($ANPP_count/$total *100). "%";
$APC_count = round($APC_count/$total *100). "%";
$HDP_count = round($HDP_count/$total *100). "%";
$UPD_count = round($UPD_count/$total *100). "%";
$NCP_count = round($NCP_count/$total *100). "%";
$ADC_count = round($ADC_count/$total *100). "%";
$UPP_count = round($UPP_count/$total *100). "%";


?>

</div>

<div class="col-sm-6">
<h3>Chart Showing Result</h3>

PDP<div class="progress">
  <div class="progress-bar progress-bar-striped progress-bar-success" role="progressbar" aria-valuenow="<?php echo $PDP_count ?>"
  aria-valuemin="0" aria-valuemax="100"  style ="width:<?php echo $PDP_count ?>">
 <?php echo $PDP_count ?> 
  </div>
</div>

APC
<div class="progress">
  <div class="progress-bar progress-bar-striped progress-bar-info" role="progressbar" aria-valuenow="<?php echo $APC_count ?>"
  aria-valuemin="0" aria-valuemax="100"  style ="width:<?php echo $APC_count ?> ; background-color:#123">
 <?php echo $APC_count ?> 
  </div>
</div>

ANPP
<div class="progress">
  <div class="progress-bar progress-bar-striped progress-bar-active" role="progressbar" aria-valuenow="<?php echo $APC_count ?>"
  aria-valuemin="0" aria-valuemax="100"  style ="width:<?php echo $ANPP_count ?>; background-color:green">
 <?php echo $ANPP_count ?> 
  </div>
</div>

UPD
<div class="progress">
  <div class="progress-bar progress-bar-striped progress-bar-warning" role="progressbar" aria-valuenow="<?php echo $UPD_count ?>"
  aria-valuemin="0" aria-valuemax="100"  style ="width:<?php echo $UPD_count ?> ; background-color:#8267">
 <?php echo $UPD_count ?> 
  </div>
</div>


HDP
<div class="progress">
  <div class="progress-bar progress-bar-striped progress-bar-danger" role="progressbar" aria-valuenow="<?php echo $HDP_count ?>"
  aria-valuemin="0" aria-valuemax="100"  style ="width:<?php echo $HDP_count ?> ; background-color:red">
  <?php echo $HDP_count ?> 
  </div>
</div>

UPP
<div class="progress">
  <div class="progress-bar progress-bar-striped progress-bar-success" role="progressbar" aria-valuenow="<?php echo $UPP_count ?>"
  aria-valuemin="0" aria-valuemax="100"  style ="width:<?php echo $UPP_count ?> ; background-color:grey">
  <?php echo $UPP_count ?> 
  </div>
</div>

ADC
<div class="progress">
  <div class="progress-bar progress-bar-striped progress-bar-info" role="progressbar" aria-valuenow="<?php echo $ADC_count ?>"
  aria-valuemin="0" aria-valuemax="100"  style ="width:<?php echo $ADC_count ?> ; background-color:orange">
  <?php echo $ADC_count ?> 
  </div>
</div>

</div>
<hr>

<a href ="testinglogin.php" class = "btn btn-success col-sm-offset-4"> LOGIN TO VOTE </a>

<div id ="footer">
<?php
include('include/footer.php');
?>
</div>
</div>

</div>
 </body>

</html>