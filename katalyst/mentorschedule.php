<?php
require "databasecheck.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Freelancer - Start Bootstrap Theme</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="css/freelancer.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="css/reset.css">

    <link rel="stylesheet" href="css/style.css" media="screen" type="text/css" />


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<script>

function myfunction(name,status)
{
	document.getElementById('mentor').value=name;
	document.getElementById('status').value=status;
	var theForm=document.getElementById("frm_mentor");
  theForm.action = 'updatestatus.php';
  theForm.submit();
}
</script>
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
                <a class="navbar-brand" href="adminhome.php">KATALYST</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class="page-scroll">
                        <a href="mentorreq.php">Meeting Request</a>
                    </li>
                    <li class="page-scroll">
                        <a href="mapping.php">Mapping Mentors</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#contact">Outcome</a>
                    </li>
					<li class="page-scroll">
                        <a href="adminfbreview.php">Feedbacks</a>
                    </li>
					<li class="page-scroll">
                        <a href="logout.php">Logout</a>
                    </li>

					</ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
<table class="table" style="margin-top:150px;">
    <thead>
      <tr>
	  <th><center>Sr. No</center></th>
        <th><center>Name</center></th>
		<th><center>Date</center></th>
		<th><center>Location</center></th>
		<th><center>Approve/Reject<center><th>
		
		</tr>
		</thead>
	<tbody>
	<?php
	
	$res2=mysqli_query($con,"Select msce_mntid,msce_date, msce_loc from meetings_sche where status=1");
	$row2=mysqli_fetch_array($res2);
	$id=$row2['msce_mntid'];
	echo $id;
	$date=$row2['msce_date'];
	$loc=$row2['msce_loc'];
	$res3=mysqli_query($con,"Select mnt_name from mentee_basic where mnt_id='$id'");
	
	$row3=mysqli_fetch_array($res3);
	$name=$row3['mnt_name'];
	?><tr class="success">
		 <td style="width:10%"><center>1</center></td>
        <td style="width:20%"><center><?php echo $name; ?></center></td>
		<td style="width:20%"><center><?php echo $date; ?></center></td>
		
		<td style="width:20%"><center><?php echo $loc; ?></center></td>
        <td style="width:50%"><center>
		<input type="submit" name="accept"  value="Accept">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp
		<input type="submit"  name="reject" value="Reject">
		</center></td>
        
      </tr>
	
}
	?>
