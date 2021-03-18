<?php

include 'contact.php';

$res = mysqli_fetch_array($query);

echo $res[1];

?>