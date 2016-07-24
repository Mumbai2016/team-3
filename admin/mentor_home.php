
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>mentor_home</title>

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
                        <a href="mentor_home.php">Home</a>
                    </li>
                    <li class="page-scroll">
                        <a href="mentor_php.php">Profile</a>
	          </li>
                    <li class="page-scroll">
                        <a href="feedback1.php">Personal Feedback Form</a>
                    </li>
					<li class="page-scroll">
                        <a href="mentor_registration.php">Registration</a>
                    </li>
					
                </ul>
				
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
	<br>
	<br>
	<br>

<!-- Portfolio Grid Section -->
    <section id="portfolio">
        <div class="container" style="padding:20;font-size:40px;text-decoration:bold">
          <span style="color:#007100"> Mentor Name:</span><p>Retrive The query from Database</p>
        </div>
		
		<div class="container" style="padding:20;font-size:40px;text-decoration:bold">
          <span style="color:#007100"> Mentee Assigned:</span><p>Retrive The query from Database</p>
        </div>
		
		<div class="container" style="padding:20;font-size:40px;text-decoration:bold">
          <span style="color:#007100"> Hours Completed:</span><p>Retrive The query from Database</p>
        </div>
		
		<div class="container" style="padding:20;font-size:40px;text-decoration:bold">
          <span style="color:#007100"> Hours Left:</span><p>Retrive The query from Database</p>
        </div>
		
		<div class="container" style="padding:20;font-size:40px;text-decoration:bold">
          <span style="color:#007100"> No.of Meetings Conducted:</span><p>Retrive The query from Database</p>
        </div>
    </section>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Monthly Progress Bar</h2>

  <div class="progress">
    <div class="progress-bar progress-bar-success" role="progressbar" style="width:60%">
      Fantastic(>2)
    </div>
    <div class="progress-bar progress-bar-warning" role="progressbar" style="width:10%">
    Good(=1)
    </div>
    <div class="progress-bar progress-bar-danger" role="progressbar" style="width:20%">
     Average(=0)
    </div>
  </div>
</div>

</body>
</html>


    <h1>Pikaday</h1>

    <p class="large">A refreshing JavaScript Datepicker — lightweight, no dependencies, modular CSS.</p>

    <p><a href="https://github.com/dbushell/Pikaday"><strong>Pikaday source on GitHub</strong></a></p>

    <label for="datepicker">Date:</label>
    <br>
    <input type="text" id="datepicker">

    <h2>What is this?</h2>

    <p>Since version 1.0 Pikaday is a stable and battle tested date-picker. Feel free to use it however you like but please report any bugs or feature requests to the <a href="https://github.com/dbushell/Pikaday/issues">GitHub issue tracker</a>, thanks!</p>

    <p class="small">Copyright © 2014 <a href="http://dbushell.com/">David Bushell</a> | BSD &amp; MIT license</p>


    <script src="pikaday.js"></script>
    <script>

    var picker = new Pikaday(
    {
        field: document.getElementById('datepicker'),
        firstDay: 1,
        minDate: new Date(),
        maxDate: new Date(2020, 12, 31),
        yearRange: [2000,2020]
    });

    </script>
   
</body>

</html>
