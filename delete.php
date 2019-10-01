<?php
require('db.php');
$id=$_REQUEST['id'];
$query = "UPDATE new_record SET is_active = 0 where id='".$id."'"; 
$result = mysqli_query($con,$query) or die ( mysqli_error());
header("Location: view.php"); 
?>