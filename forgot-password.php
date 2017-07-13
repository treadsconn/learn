<?php
session_start();
require_once('connect.php');

if(isset($_SESSION['password']) & !empty($_SESSION['password'])){
  //$smsg = "Already Logged In" . $_SESSION['username'];
  header('location: login.php');
}

if(isset($_POST) & !empty($_POST)){
  $password = mysqli_real_escape_string($connection, $_POST['password']);
  $password1 = md5($_POST['password1']);
  $sql = "SELECT * FROM `registered_members` WHERE ";
  if(filter_var($password1, FILTER_VALIDATE_EMAIL)){
    $sql .= "password='$password'";
  }else{
    $sql .= "password2='$password2'";
  }
  $sql .= " AND password1='$password1' AND active=1";
  $sql;
  $res = mysqli_query($connection, $sql);
  $count = mysqli_num_rows($res);

  if($count == 1){
    $_SESSION['password2'] = $password2;
    header('location: login.php');
  }else{
    $fmsg = "User does not exist";
  }
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Reset Password - learnGH</title>
	<!-- Meta Tag -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <!-- SEO -->
    <meta name="description" content="LearnGh is an educational platform that has been developed to download what is taught in the classroom to the world wide web.LearnGH has the sole responsibility of bringing same education as well as curricula activities from cities to towns and villages. The company seeks to make learning, teaching and examination easy and simple across the global world. With this platform, students learn, share their diverse ideas, research on the various online tutorials to enrich their knowledge, search for hassle free scholarship grants, etc. LearnGh also gives the opportunities for teachers to conduct online exams, mark scripts, easily report students’ progress and allow students to check their scores online as soon as the teacher’s reports are completed.">
    <meta http-equiv="content-type">
    <meta name="author" content="Bright Agyekum">
    <meta name="url" content="http://www.learngh.treadsconn.com">
    <meta name="copyright" content="learnGH-2017">
    <meta name="robots" content="index,follow">

	<!-- ========= css files ============== -->
	<link rel="stylesheet" type="text/css" href="css/home_style.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<!-- ======== meta files ============== -->

	<!-- Favicon -->
    <link rel="shortcut icon" href="img/favicon/favicon.ico">
    <link rel="apple-touch-icon" sizes="144x144" type="image/x-icon" href="images/favicon/apple-touch-icon.png">

    <!-- Google Web Fonts  -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:400,300,500,600,700">
    
    
    <!-- HTML5 shiv and Respond.js support IE8 or Older for HTML5 elements and media queries -->
    <!--[if lt IE 9]>
	   <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	   <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
	<header class="header-main">
		<div class="row">
        	<div class="container-fluid">
        		<div class="navbar navbar-inverse">
                    <div class="container">
                    	<div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="index.php">learnGH</a>
	                    </div>
	                    <div class="navbar-collapse collapse">
	                        <ul class="nav navbar-nav navbar-right">
		                      	<li><a href="profile.php">Get Our Support</a></li>
						    </ul>
	                    </div>
                    </div>
                </div>
			</div>
        </div>
	</header>

	<section class="content">
		<div class="row">
			<div class="container">
				<div class="col-md-12">
					<div class="col-md-5">
						<ul class="menu">
							<li>Online Teaching and Learning</li>
							<li>Online Result Checking</li>
							<li>Online Examinations</li>
							<li>Career Guidance</li>
							<li>Live Broadcast of Teaching and Learning</li>
							<li>Online Library (Borrow or Buy Books)</li>
							<li>Scholarships and Grants</li>
							<li>Research Assistance</li>
							<li>Group Collaboration</li>
							<li>Admissions (Inland and Overseas)</li>
							<li>Job Placement, Advertisements and Recruitment</li>
						</ul>
					</div>

					<div class="col-md-7">
				      <?php if(isset($smsg)){ ?><div class="alert alert-success" role="alert"> <?php echo $smsg; ?> </div><?php } ?>
				      <?php if(isset($fmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div><?php } ?>
				      <form method="POST" action="">
					        <legend>Reset Password</legend>
					        <div class="form-group">
					        	<label>Email</label>
					        	<input type="email" name="email" class="form-control" minlength="8" placeholder="Enter Email" required>
					        </div>

					        <div class="form-group">
					        	<label>New Password</label>
					        	<input type="password" name="password" class="form-control" minlength="8" placeholder="New Password" required>
					        </div>
					        <br>
					        <button class="btn btn-lg btn-success btn-block" type="submit">Reset Password</button>
                          <p class="started"><a href="register.php">Register</a> | <a href="index.php"> Login</a></p>
				      </form>
					</div>
				</div>
			</div>
		</div>
	</section>

	<footer class="footer-main">
		<div class="row">
			<div class="container" id="copyright">
				<div class="col-md-12">
					<p class="copy">LearnGH &copy; 2017. All rights reserved.</p>
					<p class="design"><b>powered by:</b> <a href="http://www.treadsconn.com" target="_blank"> Treadsconn</a></p>
				</div>
			</div>
		</div>
	</footer>
	<!-- js files -->
	<script type="text/javascript" src="bootstrap.min.js"></script>
</body>
</html>