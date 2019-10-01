<?php
require('db.php');
?>
<!DOCTYPE html>
<html>
<head>
	<style>
		th{
			background-color:#ADD8E6
		}
	</style>
<meta charset="utf-8">
<title>View Records</title>
</head>
<body>
<div class="form">
<p><a href="dashboard.php">Back</a> 
| <a href="insert.php">Insert New Record</a> 
<h2>View Records</h2>
<table align="center" width="50%" border="1" style="border-collapse:collapse;">
<thead>
<tr>
<th><strong>ID</strong></th>
<th><strong>Name</strong></th>
<th><strong>Age</strong></th>
<th><strong>Edit</strong></th>
<th><strong>Delete</strong></th>
</tr>
</thead>
<tbody>
<?php
$count=1;
$sel_query="Select * from new_record where is_active=1 ORDER BY id desc";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr><td align="center"><?php echo $count; ?></td>
<td align="center"><?php echo $row["name"]; ?></td>
<td align="center"><?php echo $row["age"]; ?></td>
<td align="center">
<a href="edit.php?id=<?php echo $row["id"]; ?>">Edit</a>
</td>
<td align="center">
<a href="delete.php?id=<?php echo $row["id"]; ?>">Delete</a>
</td>
</tr>
<?php $count++; } ?>
</tbody>
</table>
</div>
</body>
</html>