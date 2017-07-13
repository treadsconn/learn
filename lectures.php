<!DOCTYPE html>
<html>
<head>
	<title>Your Lectures - learnGH</title>
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
                        <a class="navbar-brand" href="user-account.php">learnGH</a>
	                    </div>
	                    <form class="navbar-form navbar-left">
						  <div class="input-group">
						    <input type="text" id="search" class="form-control" placeholder="search names and emails">
						    <div class="input-group-btn">
						      <button class="btn btn-default" type="submit">
						        <i class="glyphicon glyphicon-search"></i>
						      </button>
						    </div>
						  </div>
						</form>
	                    <div class="navbar-collapse collapse">
	                        <ul class="nav navbar-nav navbar-right">
                                <li><a href="admissions.php">Admissions</a></li>
                                <li><a href="assignments.php">Assignments</a></li>
                                <li><a href="lectures.php">Lectures</a></li>
                                <li><a href="notices.php">Notice</a></li>
                                <li><a href="research.php">Research</a></li>
                                <li><a href="career-guidance.php">Career Guidance</a></li>
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
					<div class="col-md-3">
						<div class="profile-wrapper">
							<div class="profile_pic">
                                <img src="#" class="img-circle" width="" height="" alt="profile_pic">
                                <span><a href="#" pull-right>edit profile <span class="glyphicon glyphicon-edit"></span></a></span>
                            </div>
                            <div class="dspfname">
                                <article><?php echo "$fname"; ?></article>
                            </div>

                            <hr>

                            <div class="search-m-2">
                                <form action="" method="get">
                                    <input type="search" name="search" value="" placeholder="filter lectures list">
                                </form>
                            </div>
                            <div class="lecture-list">
                                <p class="cat-m-2">Your Lectures List</p>
                                <ul>
                                    <li><a href="#"></a></li>
                                </ul>
                            </div>

                            <hr>

                            <form action="" method="get">
                                <button class="btn btn-sm btn-success btn-block" href="logout.php" name="logout" type="submit">LOGOUT</button>
                            </form>
						</div>
					</div>

					<div class="col-md-6">
				      	<div class="feeds_wrapper">
                            <div class="main-feeds">
                                <div class="user_feeds">
                                    <?php

                                    ?>
                                </div>
                            </div>
				      	</div>
					</div>

					<div class="col-md-3">
				      	<div class="adverts-section">
				      		<p><img src="img/ads/ad.jpg" class="img-responsive"></p>
				      	</div>
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
					<p class="design"><b>powered by:</b> <a href="#"> Treadsconn</a></p>
				</div>
			</div>
		</div>
	</footer>
	<!-- js files -->
	<script type="text/javascript" src="js/gallery.js"></script>
	<script type="text/javascript" src="bootstrap.min.js"></script>
</body>
</html>