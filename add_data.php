<?php
     include("connection.php");
	 if(isset($_POST['save']))
	 {
      $name=$_POST['name'];
	  $mobileno=$_POST['mobileno'];
	  $email=$_POST['email'];
	  $vehicleno=$_POST['vehicleno'];
	  $company=$_POST['company'];
	  $remarks=$_POST['remarks'];
	  $intime=$_POST['intime'];
	  $outtime=$_POST['outtime'];
	  $storage=$_POST['storage'];
	  $accessories=$_POST['accessories'];
		 $chk="";
		 foreach($accessories as $chk1)
		 {
			 $chk.=$chk1.",";
		 }
	  $photo=$_FILES['photo']['name'];
	  $temp=$_FILES['photo']['tmp_name'];
	  $path="uploads/".$photo;
	 $query="Insert into visitors
	 (id,name,mobileno,email,vehicleno,company,remarks,intime,outtime,storage,accessories,path)value
	 ('','$name','$mobileno','$email','$vehicleno','$company','$remarks','$intime','$outtime','$storage','$chk','$path')";
	echo $query;
	$run=mysqli_query($link,$query);
	if($run)
	{
		move_uploaded_file($temp,$path);
		echo "successfully inserted";
	}
	else
	{
		echo mysqli_error($link);
	}

	 }
     else
	 {
		header("location:home.php"); 
		 
	 }


?>