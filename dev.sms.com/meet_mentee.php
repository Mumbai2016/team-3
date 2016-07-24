<?php
require 'databasecheck.php';
$date=$_POST['meet_date'];
$location=$_POST['location'];
$mentor_id=$_POST['id_mentor'];
$mentee_id=$_POST['id'];
mysqli_query($con,"INSERT INTO  meetings_sche(msce_mtrid,msce_mntid,msce_date,msce_loc) 
VALUES ('$mentor_id','$mentee_id','$date','$location')");
$email_mentor=$_POST['email_mentor'];
$contact_mentor=$_POST['contact_mentor'];
$redirect='http://ec2-54-179-176-127.ap-southeast-1.compute.amazonaws.com/team-3/request_mentor.php?email='.$email_mentor.'&contact='.$contact_mentor;
header('Location:'.$redirect);
?>
