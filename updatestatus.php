<?php
require 'databasecheck.php';
if(isset($_POST['accept']))
{
	$name=$_POST['name'];
	$r=mysqli_query($con,"update mentor_basic set mtr_status=1 where mtr_name='$name'");
	header('location:mentorreq.php');
}
if(isset($_POST['reject']))
{
	$name=$_POST['name'];
	$r=mysqli_query($con,"update mentor_basic set mtr_status=2 where mtr_name='$name'");
	header('location:mentorreq.php');
}