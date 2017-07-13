<?php
require_once('connect.php');
include('config.php');
include('recaptchalib.php');
$response = null;
$reCaptcha = new ReCaptcha($secret);
if(isset($_POST) & !empty($_POST)){

	if($_POST['g-recaptcha-response']){
		$response = $reCaptcha->verifyResponse(
				$_SERVER['REMOTE_ADDR'],
				$_POST['g-recaptcha-response']
			);

	}

	if($response != null && $response->success){
		$username = mysqli_real_escape_string($connection, $_POST['username']);
		$verification_key = md5($username);
		$email = mysqli_real_escape_string($connection, $_POST['email']);
		$password = md5($_POST['password']);
		$passwordagain = md5($_POST['passwordagain']);
		if($password == $passwordagain){
			$fmsg = "";
			
			$usernamesql = "SELECT * FROM `registered_members` WHERE username='$username'";
			$usernameres = mysqli_query($connection, $usernamesql);
			$count = mysqli_num_rows($usernameres);
			if($count == 1){
				$fmsg .= "Username exists in Database, please try different user name";
			}

			$emailsql = "SELECT * FROM `registered_members` WHERE email='$email'";
			$emailres = mysqli_query($connection, $emailsql);
			$emailcount = mysqli_num_rows($emailres);
			if($emailcount == 1){
				$fmsg .= "Email exists in Database, please reset your password";
			}


			echo $sql = "INSERT INTO `registered_members` (username, email, password, verification_key) VALUES ('$username', '$email', '$password', '$verification_key')";
			$result = mysqli_query($connection, $sql);
			if($result){
				$smsg = "User Registered succesfully";
				$id = mysqli_insert_id($connection);
					require 'PHPMailer/PHPMailerAutoload.php';

					$mail = new PHPMailer;

					$mail->isSMTP();
					$mail->Host = $smtphost;
					$mail->SMTPAuth = true;
					$mail->Username = $smtpuser;
					$mail->Password = $smtppass;
					$mail->SMTPSecure = 'ssl';
					$mail->Port = 465;

					$mail->setFrom('info@pixelw3.com', 'PixelW3 Technologies');
					$mail->addAddress('vivek@codingcyber.com', 'Vivek Vengala'); 

					$mail->Subject = 'Verify Your Email';
					$mail->Body    = "http://localhost/user-management/verify.php?key=$verification_key&id=$id";
					$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

					if(!$mail->send()) {
					    echo 'Message could not be sent.';
					    echo 'Mailer Error: ' . $mail->ErrorInfo;
					} else {
					    echo 'Message has been sent';
					}

			}else{
				$fmsg .= "Failed to register user";
			}
		}else{
			$fmsg = "Password not matching";
		}
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>User Registration - learnGH</title>
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
    <!-- Favicon -->

    <!-- Google Web Fonts  -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:400,300,500,600,700">
    
    
    <!-- HTML5 shiv and Respond.js support IE8 or Older for HTML5 elements and media queries -->
    <!--[if lt IE 9]>
	   <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	   <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script   src="https://code.jquery.com/jquery-3.1.1.js" ></script>
	<script src='https://www.google.com/recaptcha/api.js'></script>
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script type="text/javascript">

	$(document).ready(function() {
		$('#usernameLoading').hide();
		$('#username').keyup(function(){
		  $('#usernameLoading').show();
	      $.post("check.php", {
	        username: $('#username').val()
	      }, function(response){
	        $('#usernameResult').fadeOut();
	        setTimeout("finishAjax('usernameResult', '"+escape(response)+"')", 400);
	      });
	    	return false;
		});
	});

	function finishAjax(id, response) {
	  $('#usernameLoading').hide();
	  $('#'+id).html(unescape(response));
	  $('#'+id).fadeIn();
	} //finishAjax
	</script>
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
					        <legend>Please Complete the Form to Get Registered</legend>
					        <div class="form-group">
					        	<label>Full Name</label>
					        	<input type="text" name="fname" class="form-control" required="required" <?php if(isset($fname) & !empty($fname)){ echo $fname; } ?> placeholder="Your Full Name">
					        </div>

					        <div class="form-group">
					        	<label>Email</label>
					        	<input type="text" name="email" class="form-control" required="required" <?php if(isset($email) & !empty($email)){ echo $email; } ?> placeholder="Your Email">
					        </div>

					        <div class="form-group">
					        	<label>Password</label>
					        	<input type="password" name="password" minlength="8" class="form-control" required="required" placeholder="Your Password">
					        </div>

					        <div class="form-group">
					        	<label>Cellphone</label>
					        	<input type="tel" name="cellphone" class="form-control" required="required" <?php if(isset($cellphone) & !empty($cellphone)){ echo $cellphone; } ?> placeholder="Your Cellphone">
					        </div>
        					<div class="">
        						<button class="btn btn-lg btn-success btn-block" type="submit">Get Registered</button>
					        	<p class="started">Already Registered? <a href="index.php">Login</a></p>
        					</div>
					        
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