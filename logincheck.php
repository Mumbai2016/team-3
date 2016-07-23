<?php

require "databasecheck.php";
if(isset($_POST['submit']))
{	
	$username=mysqli_real_escape_string($con,$_POST['username']);
	$password=mysqli_real_escape_string($con,$_POST['password']);
	$pass=$password;
	$sel_user = "select * from login where log_email='$username' AND log_pass='$pass'";
	$run_user = mysqli_query($con, $sel_user);
	$check_user = mysqli_num_rows($run_user);
	
	

if($check_user>0){
	while($row = mysqli_fetch_array($run_user)) {
		$_SESSION['username']=$username;
	
        if($row['log_role']=="admin")
		{
			header('location:adminhome.php');
				}
		else if($row['type']=="mentor")
		{
			header('location:mentorhome.php');
		}
		else
		{
			header('location:mentee.php');
		}
    }


}
else
{
	echo "Wrong credentils";
}

}
