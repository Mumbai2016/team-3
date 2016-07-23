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
                <a class="navbar-brand" href="#page-top">Start Bootstrap</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class="page-scroll">
                        <a href="mentorreq.php">Mentor Request</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#about">Mapping Mentors</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#contact">Outcome</a>
                    </li>
					<li class="page-scroll">
                        <a href="#contact">Feedbacks</a>
                    </li>

					</ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>


 

	<div class="container">
  
  <table class="table" style="margin-top:150px;">
    <thead>
      <tr>
	  <th><center>Sr. No</center></th>
        <th><center>Name</center></th>
		<th><center>Sex</center></th>
		
		<th><center>Work Ex.</center></th>
        <th><center>Accept/Reject</center></th>
        
      </tr>
    </thead>
	<tbody>

	<?php
	$res=mysqli_query($con,"Select mtr_name, mtr_sex, mtr_workex from mentor_basic where mtr_status=0") ;
	if(!$res){die('Error' . mysqli_error($con));}
$check_user = mysqli_num_rows($res);
	if(is_null($check_user)){
		echo "$check_user empty";
	}
$i=1;

	if($check_user>0){

	while($row = mysqli_fetch_array($res)) {
	$name=$row['mtr_name'];
	
	
	
         echo ' <tr class="success">
		 <td style="width:10%"><center>'.$i.'</center></td>
        <td style="width:20%"><center>'.$name.'</center></td>
		<td style="width:20%"><center>'.$row['mtr_sex'].'</center></td>
		
		<td style="width:20%"><center>'.$row['mtr_workex'].'</center></td>
        <td style="width:30%"><center>
		<form action="updatestatus.php" method="post">
		<input type="hidden" value="'.$name.'" name="name">
		<input type="submit" name="accept" value="Accept">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<form action="updatestatus.php" method="post">
		<input type="hidden" value="'.$name.'" name="name">
		<input type="submit" name="reject" value="Reject">
		</center></td>
        
      </tr>';
	$i++;
	}}?>
    </tbody>
  </table>
</div>
