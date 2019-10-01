
<?php
require('db.php');
$status = "";
if(isset($_POST['new']) && $_POST['new']==1){
    $name =$_REQUEST['name'];
    $age = $_REQUEST['age'];
    $ins_query="insert into new_record (`name`,`age`)values ('$name','$age')";
    mysqli_query($con,$ins_query)
    or die(mysql_error());
    $status = "New Record Inserted Successfully.
    </br></br>";
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Insert New Record</title>
</head>
<body>
<div class="form">
<p><a href="dashboard.php">Back</a> 
| <a href="view.php">View Records</a> 
<div>
<h1>Insert New Record</h1>
<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" />
<p><input type="text" name="name" placeholder="Enter Name" required /></p>
<p><input type="text" name="age" placeholder="Enter Age" required /></p>
<p><input name="submit" type="submit" value="Submit" /></p>
</form>
<p style="color:#FF0000;"><?php echo $status; ?></p>
</div>
</div>
</body>
</html>