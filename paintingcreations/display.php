<?php



include 'connection.php';

$selectquery = "select * from userinfodata ";
$query = mysqli_query($con,$selectquery);
$nums = mysqli_num_rows($query);
$res = mysqli_fetch_array($query);

while($i<10){
	echo $i . "<br>";
	$i++;
}

?>