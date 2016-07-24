<?
include 'databasecheck.php';
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
   
  
  
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

  <style>
  select {
  position: relative;
}

/* Style by class. Effects the text of the contained options. */
.blueText {
  color: #0000FF;
}

/* Style by id. Effects position of the select drop down. */
#styledSelect {
  left: 10px;
}
</style>
  
  
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
                        <a href="home.html">HOME</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#about">ABOUT</a>
                    </li>
                    <li class="page-scroll">
                        <a href="userlog.html">SIGN IN</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
<body>
  <header>
  <div class="container">
  <h2>Completed Meetings</h2>
  <table class="table">
    <thead>
      <tr>
    <th><center>Sr. No</center></th>
        <th><center>Mentor ID</center></th>
    <th><center>Mentee ID</center></th>
    <th><center>Date</center></th>   
    <th><center>Location</center></th>
      </tr>
      <tr>
      <?php
      $i=1;
      $con =mysqli_connect("localhost","root","","katalyst_team3");
      $res=mysqli_query($con,"Select * from meetings_comp");
      while($row=mysqli_fetch_row($res))
      //var_dump($row);
      {
        echo ' <tr>
     <td style="width:10%"><center>'.$i.'</center></td>
        <td style="width:20%"><center>'.$row[1].'</center></td>
    <td style="width:20%"><center>'.$row[2].'</center></td>
    <td style="width:20%"><center>'.$row[3].'</center></td>
    <td style="width:20%"><center>'.$row[5].'</center></td>
        <td style="width:30%"><center>
    </tr>';
      $i++;
      }
      ?>
    </thead>
  <tbody>
  <br/>
</header>

</body>

</html>
