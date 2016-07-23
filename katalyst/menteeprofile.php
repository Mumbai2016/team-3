<?php
require 'session.php';
require 'databasecheck.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Katalyst</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="css/freelancer.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
	

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" class="index">

    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="#page-top">Katalyst</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class="page-scroll">
                        <a href="home.html">Profile</a>
                    </li>
                    <li class="page-scroll">
                        <a href="mymentor.php">Mentor</a>
                    </li>
                    <li class="page-scroll">
                        <a href="feedbackall.html">Feedback</a>
                    </li>
					<li class="page-scroll">
                        <a href="LogOut.php">LogOut</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
	
	<div>
	<table width="100%" style="margin-top:100px;">
	<tr>
	<td height="300px" width="100%" bgcolor="#0f0f2b">
	<table>
	<td style="padding-left:20px;"><img src="img/propic.jpg" height="200px"></td>
	<td style="font-size:50px;color:white;padding-left:10px;">
	<table>
 <?php 
 $cur_user=$_SESSION['username'];
 $res=mysqli_query($con,"Select mnt_id,mnt_name,mnt_email,mnt_college,mnt_dob from mentee_basic where mnt_email='$cur_user'");
 $check_user = mysqli_num_rows($res);
 $row = mysqli_fetch_array($res);
 $id=$row['mnt_id'];
 echo "<tr><td><center><b>".$row['mnt_name']."</b></center> </td></tr>
 <tr>
 <td style='font-size:15px;'>Email:   ".$row['mnt_email']."</td></tr>
 <tr>
 <td style='font-size:15px;'>College:   ".$row['mnt_college']."</td></tr>
 <tr>
 <td style='font-size:15px;'>DOB:   ".$row['mnt_dob']."</td></tr></table>";

	?>

	</td>
	<td style="padding-left:170px;color:white;padding-top:0px;">
	<table style="border-color:white;" border="0" height="250px" width="250px">
	<td>
	<p>Target achieved(meetings):
	<div class="progress">
  <div class="progress-bar" role="progressbar" aria-valuenow="70"
  aria-valuemin="0" aria-valuemax="100" style="width:70%" >
    <span>70% Complete</span>
  </div>
	</td>
	</table>
	</td>
	</td>
	</table>
	</td>
 </tr>
 </table>
 </div>
 <div style="padding-top:20px;">
 <form action="meet_mentee.php" method="post">
 
 <label>Date:</label>   <input type="date" name="meet_date"><br/><br/>
 <label>Location:</label><input type="text" name="location"><br/><br/>
 <input type="submit" value="Request Meeting">
 </form>
 </div>
 <?php 
  $res1=mysqli_query($con,"Select meet from meeting_comp where mnt_id='$id'");
  $row1 = mysqli_fetch_array($res1);
 echo "<marquee>".$row['meet']."</marquee>";
 