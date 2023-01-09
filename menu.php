<?php

$link = mysqli_connect("localhost","root","","dets");
include "session.php";
?>

<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Meta -->
	<meta name="description" content="Responsive Bootstrap4 Dashboard Template">
	<meta name="author" content="ParkerThemes">
	<link rel="shortcut icon" href="img/fav.png" />

	<!-- Title -->
	<title>DETS-IT Admin Dashboard</title>


	<!-- Data Tables -->
	<link rel="stylesheet" href="vendor/datatables/dataTables.bs4.css" />
	<link rel="stylesheet" href="vendor/datatables/dataTables.bs4-custom.css" />
	<link href="vendor/datatables/buttons.bs.css" rel="stylesheet" />

	<!-- Bootstrap css -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- Icomoon Font Icons css -->
	<link rel="stylesheet" href="fonts/style.css">
	<!-- Main css -->
	<link rel="stylesheet" href="css/main.css">

	<link rel="stylesheet" href="vendor/summernote/summernote-bs4.css" />

	<!-- Calendar css -->
	<link rel="stylesheet" href="vendor/calendar/css/core/main.css" />
	<link rel="stylesheet" href="vendor/calendar/css/daygrid/main.css" />
	<link rel="stylesheet" href="vendor/calendar/css/list/main.css" />

</head>

<body>

	<!-- Loading starts -->
	<div id="loading-wrapper">
		<div class="spinner-border" role="status">
			<span class="sr-only">Loading...</span>
		</div>
	</div>
	<!-- Loading ends -->

	<!-- Page wrapper start -->
	<div class="page-wrapper">
	
	
	<?php
$link = mysqli_connect("localhost","root","","dets");
$asql = "select * from registration where email='".$_SESSION['sname']."'";
$result= mysqli_query($link,$asql);
$data = mysqli_fetch_assoc($result);
?>
		
		
		<!-- Sidebar wrapper start -->
		<nav id="sidebar" class="sidebar-wrapper">

			<!-- Sidebar brand start  -->
			<div class="sidebar-brand">
				<a href="index.php" class="logo">
					<img src="img/logo.png" alt="DETS-IT Dashboard" />
				</a>
			</div>
			<!-- Sidebar brand end  -->
	
			<!-- User profile start -->
			<div class="sidebar-user-details">
					<div class="user-profile">
					<img src="img/<?php echo $data['image'];?>" class="profile-thumb" alt="User Thumb">
					<h6 class="profile-name"><?php echo $data['name'];?></h6>
					<ul class="profile-actions">

						<li>
							<a href="logout.php">
								<i class="icon-exit_to_app"></i>
							</a>
						</li>
					</ul>
					</div>
			</div>
			<!-- User profile end -->

			<!-- Sidebar content start -->
			<div class="sidebar-content">

				<!-- sidebar menu start -->
				<div class="sidebar-menu">
					<ul>
						<li class="active">
							<a href="index.php" class="current-page">
								<i class="icon-home2"></i>
								<span class="menu-text">Admin Dashboard</span>
							</a>
						</li>
						<li>
							<a href="classes.php" class="current-page">
								<i class="icon-triangle"></i>
								<span class="menu-text">Schedule Class</span>
							</a>
						</li>
						<li>
							<a href="scholarship.php" class="current-page">
								<i class="icon-flag"></i>
								<span class="menu-text">Scholarship</span>
							</a>
						</li>
						<li>
							<a href="notice.php" class="current-page">
								<i class="icon-pin"></i>
								<span class="menu-text">Notice Board</span>
							</a>
						</li>
						<li class="sidebar-dropdown">
							<a href="#" class="current-page">
								<i class="icon-book-open"></i>
								<span class="menu-text">Courses</span>
							</a>
							<div class="sidebar-submenu">
								<ul>
									<li>
										<a href="btech1.php">B.Tech Part-I</a>
									</li>
									<li>
										<a href="btech2.php">B.Tech Part-II</a>
									</li>
									<li>
										<a href="btech3.php">B.Tech Part-III</a>
									</li>
									<li>
										<a href="btech4.php">B.Tech Part-IV</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="sidebar-dropdown">
							<a href="#" class="current-page">
								<i class="icon-card_travel"></i>
								<span class="menu-text">Career</span>
							</a>
							<div class="sidebar-submenu">
								<ul>
									<li>
										<a href="QNA.php">Drop Your Question</a>
									</li>
									<li>
										<a href="job.php">JOB Openings</a>
									</li>
									<li>
										<a href="course_rec.php">Course Recomended</a>
									</li>
									<li>
										<a href="skill.php">JOB & Skills</a>
									</li>
									<li>
										<a href="free_course.php">Free Courses</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="sidebar-dropdown">
							<a href="#" class="current-page">
								<i class="icon-edit1"></i>
								<span class="menu-text">Assingment</span>
							</a>
							<div class="sidebar-submenu current-page">
								<ul>
									<li>
										<a href="assing.php">Add Assingment</a>
									</li>
									<li>
										<a href="revassing.php">Review Assingment</a>
									</li>
								</ul>
							</div>
						</li>

						<li class="sidebar-dropdown current-page">
							<a href="#">
								<i class="icon-calendar1"></i>
								<span class="menu-text">Calendars</span>
							</a>
							<div class="sidebar-submenu">
								<ul>
									<li>
										<a href="calender.php">Google Calendar</a>
									</li>
								</ul>
							</div>
						</li>

						<li class="sidebar-dropdown current-page">
							<a href="#">
								<i class="icon-unlock"></i>
								<span class="menu-text">Authentication</span>
							</a>
							<div class="sidebar-submenu">
								<ul>
									<li>
										<a href="login.php">Login</a>
									</li>
									<li>
										<a href="register.php">Register</a>
									</li>
									<li>
										<a href="forgot-pwd.html">Forgot Password</a>
									</li>
								</ul>
							</div>
						</li>
					</ul>
				</div>
				<!-- sidebar menu end -->

			</div>
			<!-- Sidebar content end -->

		</nav>
		<!-- Header start -->
		<header class="header">
			<div class="toggle-btns">
				<a id="toggle-sidebar" href="#">
					<i class="icon-list"></i>
				</a>
				<a id="pin-sidebar" href="#">
					<i class="icon-list"></i>
				</a>
			</div>
			<div class="header-items">
				<!-- Header actions start -->
				<ul class="header-actions">
					<li class="dropdown selected">
						<a href="#" id="userSettings" data-toggle="dropdown" aria-haspopup="true">
							<i class="icon-user1"></i>
						</a>
						<div class="dropdown-menu dropdown-menu-right" aria-labelledby="userSettings">
							<div class="header-profile-actions">
								<div class="header-user-profile">
									<div class="header-user">
										<img src="img/<?php echo $data['image'];?>" alt="Admin Template">
									</div>
									<h5><?php echo $data['name'];?></h5>
									<p>Welcome</p>
								</div>
								<a href="setting.php"><i class="icon-settings1"></i> Account Settings</a>
								<a href="logout.php"><i class="icon-log-out1"></i> Sign Out</a>
							</div>
						</div>
					</li>
				</ul>
				<!-- Header actions end -->
			</div>
		</header>