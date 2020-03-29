<?php
include("connection.php");
if(isset($_GET['search'])&& $_GET['name']!='')
{
$name=$_GET['name'];
$query="select*from visitors where name='$name'";
}
else
{
	$name='';
$query="select*from visitors";
}
$run=mysqli_query($link,$query);

?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>table</title>
</head>

<body>
<form>
<input type="text" name="name" value="<?php echo $name;?>">
<input type="submit" name="search" value="search">
</form><br><br>
<table border="1">
<tr>
<td>id</td>
<td>name</td>
<td>mobileno</td>
<td>email</td>
<td>vehicleno</td>
<td>company</td>
<td>remarks</td>
<td>intime</td>
<td>outtime</td>
<td>storage</td>
<td>accessories</td>
<td>photo</td>
<td>action</td>
</tr>
<?php
while($array=mysqli_fetch_assoc($run))
{
?>
<tr>	
<td><?php echo $array['id']?></td>
<td><?php echo $array['name']?></td>
<td><?php echo $array['mobileno']?></td>
<td><?php echo $array['email']?></td>
<td><?php echo $array['vehicleno']?></td>
<td><?php echo $array['company']?></td>
<td><?php echo $array['remarks']?></td>
<td><?php echo $array['intime']?></td>
<td><?php echo $array['outtime']?></td>
<td><?php echo $array['storage']?></td>
<td><?php echo $array['accessories']?></td>
<td> 
<img src="<?php echo $array['path'];?>" height="100">
</td>
<td>
<a href="delete.php?id=<?php echo $array['id'];?>">
delete</a><br>
<a href="update.php?id=<?php echo $array['id'];?>">
update</a>




</td>
</tr>
<?php	
}






?>
</table>
</body>
</html>