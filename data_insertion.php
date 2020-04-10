<?php
	
	$connect = mysqli_connect('127.0.0.1','rohan','');

	if(!$connect)
	{
		echo 'Unable to connect to server';
	}

	if(!mysqli_select_db($connect,'percentcal'))
	{
		echo 'Database is not Selected';
	}

	$Reg_No = $_POST['reg'];
	$Student_Name = $_POST['stname'];
	$Maths = $_POST['mat'];
	$English = $_POST['eng'];
	$Science = $_POST['sci'];
	$Hindi = $_POST['hin'];
    $Percentage=($Maths+$English+$Science+$Hindi)/4;
	$sql = "insert into marks (Reg_No,Student_Name,Maths,English,Science,Hindi,Percentage) VALUES ('$Reg_No','$Student_Name','$Maths','$English','$Science','$Hindi','$Percentage')";

	if(!mysqli_query($connect,$sql))
	{
		echo 'Data is not inserted';
	}
	else
	{
		echo 'Data is Inserted';
	}

	header("refresh:1; url=Vidyarthi.php");




?>
