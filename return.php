<?php
include("connection.php");
session_start();
if(!isset($_SESSION['aid']))
{
	header("location:index.php");
}
$aid=$_SESSION['aid'];

$r=$_GET['r'];
mysqli_query($set,"DELETE FROM issue WHERE id='$r'");
header("location:issue.php");
?>