<!DOCTYPE html>
<html>
<head>
	<title>Congratulations!</title>
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
                        <a class="navbar-brand" href="profile_update_levels.php">learnGH</a>
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
					<div class="profile-update">

                      <p>Congratulations! <?php echo "$fname"; ?></p>
                      <p>Your registration has been successful, please spend few seconds to update your user profile or
                      click on <a href="user-account.php">Skip Update</a> to update it later.</p>

                      <hr>

				      <form method="POST" action="profile_update_levels.php">
                          <div class="form-group">
                              <label>Date Of Birth</label>
                              <input type="date" value="" name="dateB">
                          </div>

                          <div class="form-group">
                                <label>Academic Level</label>
                                <select id="level" name="level">
                                    <option selected>--- Select your academic level ---</option>
                                    <option value="crech">Crech</option>
                                    <option value="nursery">Nursery</option>
                                    <option value="kindergarten">Kindergarten</option>
                                    <option value="primary">Primary</option>
                                    <option value="jhs">J.H.S</option>
                                    <option value="shs">S.H.S</option>
                                    <option value="nvti">N.V.T.I/Vocational</option>
                                    <option value="apprenticeship">Apprenticeship</option>
                                    <option value="technical">Technical</option>
                                    <option value="theology">Theology</option>
                                    <option value="training">Training (Nursing,Teaching)</option>
                                    <option value="poly">Polytechnic</option>
                                    <option value="technical-university">Technical University</option>
                                    <option value="university">University</option>
                                </select>
                          </div>

                          <div class="form-group">
                              <label>Profession</label>
                              <input type="text" name="profession" class="form-control" minlength="0" placeholder="Your Profession">
                          </div>

                          <div class="form-group">
					        	<label>Position</label>
					        	<input type="text" name="position" class="form-control" minlength="0" placeholder="Your Position">
                          </div>
                          <br>
                          <button class="btn btn-lg btn-success btn-block" name="submit" type="submit">Update Profile</button>
                          <p class="started"><a href="user-account.php">Skip Update</a></p>
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