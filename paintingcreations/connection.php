<?php



$username = "root";
$password = "";
$server = 'localhost';
$db = 'paintingcreationsdata';

$con = mysqli_connect($server,$username,$password,$db);

if($con){

	?>

	<script> 
	   alert('Connected');
	</script>
	<?php
}
else{
	die("no connectivity" . mysqli_connect_error());
}

?>

