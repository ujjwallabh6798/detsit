

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
		<title>DETS-IT | Admin</title>
		

		<!-- *************
			************ Common Css Files *************
		************ -->
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="css/bootstrap.min.css" />

		<!-- Main CSS -->
		<link rel="stylesheet" href="css/main.css" />

	</head>

	<body class="authentication">

		<!-- Container start -->
		<div class="container">
			
			<form method="post" enctype='multipart/form-data'>
				<div class="row justify-content-md-center">
					<div class="col-xl-5 col-lg-6 col-md-6 col-sm-12">
						<div class="login-screen">
							<div class="login-box">
								<a href="#" class="login-logo">
									<img src="img/loginlogo.png" alt="Admin Dashboard" />
								</a>
								<h5>Welcome,<br />Create your Admin Account.</h5>

						<?php
							if(isset($_POST['name']) && isset($_POST['contact']) && isset($_POST['email']))
								{
									$image= $_FILES['image']['name'];
									$image_temp= $_FILES['image']['temp_name'];
									$path= 'img/'.$image;
									$link = mysqli_connect("localhost","root","","dets");
									move_uploaded_file($image_temp,$path);
									$msql = "INSERT INTO registration(name,contact,email,image,password)
									 values ('".$_POST['name']."','".$_POST['contact']."','".$_POST['email']."','".$image."','".$_POST['password']."')";
									$result = mysqli_query($link,$msql);
									$id = mysqli_insert_id($link); 
									if($id>0)
									{
										echo"<script>window.location='index.php';</script>";
									}
								}
						?>
								<div class="form-group">
									<div class="input-group">
										<input type="text" class="form-control" name="name" placeholder="Full Name" />
										<input type="tel" class="form-control" name="contact" placeholder="Contact No.">
									</div>
								</div>
								<div class="form-group">
									<input type="text" class="form-control" name = "email" placeholder="Email Address" />
								</div>
								<div class="form-group">
									<label>Select Image</label>
									<input type="file" class="form-control" name="image" placeholder="Upload Image" />
								</div>
								<div class="form-group">
									<div class="input-group">
										<input type="password" class="form-control" name="password" placeholder="Password" />
										<input type="password" class="form-control" placeholder="Conform Password">
									</div>
									<small id="passwordHelpInline" class="text-muted">
										Password must be 8-20 characters long.
									</small>
								</div>
								<div class="actions mb-4">
									<div class="custom-control custom-checkbox">
										<input type="checkbox" class="custom-control-input" id="remember_pwd">
										<label class="custom-control-label" for="remember_pwd">Remember me</label>
									</div>
									<button type="submit" class="btn btn-primary">Signup</button>
								</div>
								<hr>
								<div class="m-0">
									<span class="additional-link">Have an account? <a href="login.php" class="btn btn-secondary">Login</a></span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</form>

		</div>
		<!-- Container end -->

	</body>

</html>