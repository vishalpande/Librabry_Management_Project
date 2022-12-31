<?php
include("connection.php");
session_start();
if(!isset($_SESSION['sid']))
{
	header("location:index.php");
}
$sid=$_SESSION['sid'];
$a=mysqli_query($set,"SELECT * FROM students WHERE sid='$sid'");
$b=mysqli_fetch_array($a);
$name=$b['name'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Library Management System</title>
<link href="stylesheet.css" rel="stylesheet" type="text/css" />
</head>
<style>
.table{
justify-content:center;


}


</style>
<body>
<div id="banner">
<span class="head">Library Management System</span><br />
</div>
<br />

<div align="center">
<div id="wrapper">
<br />
<br />

<span class="SubHead">Welcome <?php echo $name;?></span>
<br />
<br />
<table border="0" class="table" cellpadding="10" cellspacing="10">
<tr>
	
<td><a href="issuebooks.php" class="Command">Issue Book</a></td>
</tr>

<td><a href="request.php" class="Command">Request New Books</a></td>

<td><a href="logout.php" class="Command">Logout</a></td></tr>
</table>
<br />
<br />

<br />
<br />

</div>
</div>
</body>
</html>