
<!doctype html>
<html lang="en">
<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Meta -->
	
		<link rel="shortcut icon" href="img/fav.png" />

		<!-- Title -->
		<title>DETS-IT Login</title>
		
		<!-- *************
			************ Common Css Files *************
		************ -->
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="css/bootstrap.min.css" />

		<!-- Master CSS -->
		<link rel="stylesheet" href="css/main.css" />

	</head>

	<body class="authentication">

		<!-- Container start -->
		<div class="container">
			
			<form method="post">
				<div class="row justify-content-md-center">
					<div class="col-xl-4 col-lg-5 col-md-6 col-sm-12">
						<div class="login-screen">
							<div class="login-box">
								<a href="#" class="login-logo">
									<img src="img/loginlogo.png" alt=" Admin Dashboard" />
								</a>
								<h5>Welcome back,<br />Please Login to your Account.</h5>
								<div class="form-group">
									<input type="text" class="form-control" name="useremail" placeholder="Email Address" />
								</div>
								<div class="form-group">
									<input type="password" class="form-control"  name="userpass" placeholder="Password" />
								</div>
								<div class="actions mb-4">
									<div class="custom-control custom-checkbox">
										<input type="checkbox" class="custom-control-input" id="remember_pwd">
										<label class="custom-control-label" for="remember_pwd">Remember me</label>
									</div>
									<button type="submit" class="btn btn-primary" value="login">Login</button>
								</div>


                                <?php
                                        session_start();
                                    if(isset($_POST['useremail'])  && isset($_POST['userpass']))
                                    {   
                                        $link = mysqli_connect("localhost","root","","dets");
                                        $ssql = "select * from registration where email='".$_POST['useremail']."' and password='".$_POST['userpass']."'";
                                        $row = mysqli_query($link,$ssql);
                                        if(mysqli_num_rows($row) > 0){
                                            $arr = mysqli_fetch_assoc($row);
                                            // print_r($arr);
                                            // die;
                                            $_SESSION['sname'] = $arr['email'];
                                            // print_r($_SESSION['sname']);
                                            // die;
                                            echo"<script>window.location='index.php';</script>";
                                        }else{
                                            echo"<script>alert('Please check the email and password again and login');window.location='login.php';</script>";
                                        }
                                    }
                                ?>


								<div class="forgot-pwd">
									<a class="link" href="forgot-pwd.html">Forgot password?</a>
								</div>
								<hr>
								<div class="actions align-left">
									<span class="additional-link">New here?</span>
									<a href="register.php" class="btn btn-secondary">Create an Account</a>
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