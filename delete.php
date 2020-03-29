<?php
include("connection.php");
if(isset($_GET['id']))
{
$id=$_GET['id'];
$query="Delete from visitors where id='$id'";
$run=mysqli_query($link,$query);
if($run)
{
	echo "successfully deleted";
}
else
{
	echo mysqli_error($link);
}
}
else
{
	header("location:table.php");
}






?>