

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
     <br>
	 <br>
	 <br>
    <title>Mentor Registration Form</title>

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


 
</body>

</html>

	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>Registration Form</title>
	<script src="feedbackformvalidation.js"></script>
	<script>
	required.add('Name','NOT_EMPTY','Name');
	required.add('DOB','NOT_EMPTY','DOB');
	required.add('Location','NOT_EMPTY','Location');
	required.add('Contact No.','NOT_EMPTY','Contact No.');
	required.add('Email-id','NOT_EMPTY','Email-id');
	required.add('Password','NOT_EMPTY','Password');
	required.add('Confirm-Password','NOT_EMPTY','Confirm-Password');
	
	
	function checkMessageCount() {
		var maxlen = 1000;
		var len = document.getElementById('Message').value.length;
		document.getElementById('charsleft').innerHTML = 'You have ' + (maxlen - len) + ' characters remaining';
	}

	</script>
	<link rel="stylesheet" type="text/css" href="feedbackform.css">
	</head>
	<body>
	<br>
	<br>
	<br>
<center><div class="registration" style="padding:20px"><div class="registration-default">
<form accept-charset="utf-8" name="feedbackform" method="post" action="feedbackformprocess.php" onsubmit="return validate.check(this)">
<table border="0" padding=20px>
<tr>
 <td colspan="2">
  <h2>Mentor registration form</h2>
  <p class="feedback_comments">An asterisk (<span class="required_ar"> * </span>) indicates a mandatory field.</p><br />
 </td>
</tr>
<tr>
 <td valign="top">
  <label style="font-size:25px;color:#007100" for="Name">Name<span class="required_star" style="font-size:25px;color:#007100"> * </span></label>
 </td>
 <td valign="top">
  <input class="feedback_text" type="text" name="Name" id="Name" maxlength="100" />
 </td>
</tr>
<tr>
 <td valign="top">
  <label style="font-size:25px;color:#007100" for="Email">DOB<span class="required_star" style="font-size:25px;color:#007100"> * </span></label>
 </td>
 <td valign="top">
  <input class="feedback_textbig" type="text" name="Email" id="Email" maxlength="100" />
 </td>
</tr>
<tr>
 <td valign="top">
  <label style="font-size:25px;color:#007100" for="Email">Skills<span class="required_star" style="font-size:25px;color:#007100"> * </span></label>
 </td>
 <td valign="top">
  <input class="feedback_textbig" type="text" name="Email" id="Email" maxlength="100" />
 </td>
</tr>
<tr>
 <td valign="top">
  <label style="font-size:25px;color:#007100" for="Telephone">Location</label>
 </td>
 <td valign="top">
  <input class="feedback_text" type="text" name="Telephone" id="Telephone" maxlength="20" />
 </td>
</tr>
<tr>
 
 <td valign="top">
  <label style="font-size:25px;color:#007100" for="Any other Issues">Contact No.<span style="font-size:25px;color:#007100" class="required_star"> * </span></label>
 </td>
 <td valign="top">
  <input class="feedback_text" type="text" id="Subject" maxlength="50" />
 </td>
</tr>
<tr>
 <td valign="top">
  <label style="font-size:25px;color:#007100" for="Message">Email-id<span style="font-size:25px;color:#007100" class="required_star"> * </span></label>
 </td>
 <td valign="top">
  <textarea class="feedback_textarea" name="Message" id="Message" maxlength="1000" onKeyUp="checkMessageCount()" /></textarea>
  <br />
  <div id="charsleft" class="feedback_comments"></div>
 </td>
</tr>
<tr>
<td valign="top">
  <label style="font-size:25px;color:#007100" for="Message">Password<span style="font-size:25px;color:#007100" class="required_star"> * </span></label>
 </td>
 <td valign="top">
  <textarea class="feedback_textarea" name="Message" id="Message" maxlength="1000" onKeyUp="checkMessageCount()" /></textarea>
  <br />
  <div id="charsleft" class="feedback_comments"></div>
 </td>
</tr>
<tr>
<td valign="top">
  <label style="font-size:25px;color:#007100" for="Message">Confirm-Password<span style="font-size:25px;color:#007100" class="required_star"> * </span></label>
 </td>
 <td valign="top">
  <textarea class="feedback_textarea" name="Message" id="Message" maxlength="1000" onKeyUp="checkMessageCount()" /></textarea>
  <br />
  <div id="charsleft" class="feedback_comments"></div>
 </td>
</tr>
</table>
<div style="font-size:25px>
<form action="upload.php" method="post" enctype="multipart/form-data">
    <span style="font-size:25px;color:#007100">Select image to upload:</span>
    <input type="file" name="fileToUpload" id="fileToUpload">
	<br>
    <input type="submit" value="Upload Image" name="submit">
</form>
</div></center>
<br>
<input type = "Submit" name="Submit">
</html>