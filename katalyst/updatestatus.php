<?php
require 'databasecheck.php';
require 'session.php';
echo $_POST['status'];

if($_POST['status']=="accept")
{
	$name=$_POST['mentor'];
	$r=mysqli_query($con,"update mentor_basic set mtr_status=1 where mtr_name='$name'");
	header('location:mentorreq.php');
}
if($_POST['status']=="reject")
{
	$name=$_POST['mentor'];
	$r=mysqli_query($con,"update mentor_basic set mtr_status=2 where mtr_name='$name'");
	header('location:mentorreq.php');
}