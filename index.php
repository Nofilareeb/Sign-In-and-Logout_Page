<?php
session_start();
if(isset($_SESSION["Uname"]))
{
   echo "<h1 align='center'>you are already login </h1>";
   exit();
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>session in php</title>
</head>
<body style="background-color:aqua";>
<form method="post" >
<table align="center" style="margin-top: 200px">
	<tr>
     <th>User Name </th>
     <td><input type="text" name="username"> </td>
	</tr>
<tr>
     <th>Password </th>
     <td><input type="password" name="password"> </td>
	</tr>
<tr>
	<td colspan="2" align="center"><input type="submit" value="submit"> </td>
</tr>
</table>
</form>
</body>
</html>

<?php

$_SESSION["Uname"] = $_POST['username'];


?>