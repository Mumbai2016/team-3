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
	$session=0;
	

if($check_user>0){
	while($row = mysqli_fetch_array($run_user)) {
		
	
        if($row['log_role']=="admin")
		{$_SESSION['username']=$username;
		
			header('location:adminhome.php');
			$session=1;
				}
		else if($row['log_role']=="mentor")
		{
			header('location:mentorhome.php');
			$session=1;
		}
		else
		{
			header('location:menteeprofile.php');
			$session=1;
		}
    }


}
else
{
	echo "Wrong credentils";
}

}
?>