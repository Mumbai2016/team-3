<?php


$con = mysqli_connect("http://ec2-54-179-176-127.ap-southeast-1.compute.amazonaws.com/","root","root","katalyst_team3");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?> 
