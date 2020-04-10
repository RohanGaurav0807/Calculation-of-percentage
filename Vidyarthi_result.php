<?php
$x=mysqli_connect('127.0.0.1','rohan','');
include_once('connect_database.php');
$sqlquery="Select * from marks";
$result=mysqli_query($x,$sqlquery);
?>

<!DOCTYPE html>
<html>
	<head>
		<title> Result of Student </title>
	</head>
<body background= "image.jpg">

	<table align="center" border="2px" style="width:700px; line-height:50px;">
		<tr>
			<th colspan="8"><h1>Student Record</h1></th>
		</tr>
		<t>
			<th> Reg_No </th>
			<th> Student_Name </th>
			<th> Maths </th>
			<th> English </th>
			<th> Science </th>
			<th> Hindi </th>
			<th> Percentage </th>
		</t>
		<?php
			while($rows=mysqli_fetch_assoc($result))
			{
		?>
				<tr>
					<td><?php echo $rows['Reg_No'];?></td>
					<td><?php echo $rows['Student_Name'];?></td>
					<td><?php echo $rows['Maths'];?></td>
					<td><?php echo $rows['English'];?></td>
					<td><?php echo $rows['Science'];?></td>
					<td><?php echo $rows['Hindi'];?></td>
					<td><?php echo $rows['Percentage'];?></td>
				</tr>
		<?php		
			}
		?>
		</table>
</body>
</html>
