<html>
<head><title>Percentage Calculator of Marks of Students</title></head>
<body background="image.jpg">
<form id="form1" name="form1" method="post" action="data_insertion.php">
  <table width="300" heigth="190" border="2" cellpadding="15" cellspacing="15" align="center">
  	<tr>
  		<td width="123">Registration Number.</td>
  		<td width="155"><input type="text" name="reg" id="reg" /></td>
  	</tr>
  	<tr>
  		<td>Student Name</td>
  		<td><input type="text" name="stname" id="stname" /></td>
  	</tr>
  	<tr>
  		<td>Maths</td>
  		<td><input type="text" name="mat" id="mat" /></td>
  	</tr>
  	<tr>
  		<td>English</td>
  		<td><input type="text" name="eng" id="eng" /></td>
  	</tr>
  	<tr>
  		<td>Science</td>
  		<td><input type="text" name="sci" id="sci" /></td>
  	</tr>
  	<tr>
  		<td>Hindi</td>
  		<td><input type="text" name="hin" id="hin" /></td>
  	</tr>
  	<tr>
  		<td>&nbsp;</td>
  		<td><input type="submit" name="submit" id="button" value="Submit"/>
  		<input type="reset" name="reset" id="reset" value="Reset"</td>
  	</tr>
  </table>  	
</form>
</body>
</html>

<?php
$reg = $stname = $mat = $eng = $sci = $hin = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $reg = test_input($_POST["reg"]);
  $stname = test_input($_POST["stname"]);
  $mat = test_input($_POST["mat"]);
  $eng = test_input($_POST["eng"]);
  $sci = test_input($_POST["sci"]);
  $hin = test_input($_POST["hin"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
