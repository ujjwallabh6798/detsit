<?php

include "menu.php";
include "footer.php";

?>


<!doctype html>
<html lang="en">


<body>

	<!-- Page wrapper start -->
	<div class="page-wrapper">
		<!-- Page content start  -->
		<div class="page-content">

			<!-- Main container start -->
			<div class="main-container">
				<!-- Header end -->

				<!-- Page header start -->
				<div class="page-header">

					<!-- Breadcrumb start -->
					<ol class="breadcrumb">
						<li class="breadcrumb-item">Account Settings</li>
					</ol>
					<!-- Breadcrumb end -->

					<!-- App actions start -->

					<!-- App actions end -->

				</div>
				<!-- Page header end -->

				<!-- Row start -->
				<?php
$link = mysqli_connect("localhost","root","","dets");
 $asql = "select * from registration where email='".$_SESSION['sname']."'";
$result= mysqli_query($link,$asql);
$data = mysqli_fetch_assoc($result);
?>
<?php
if(!empty($_GET['status']) && $_GET['status']=='1') { ?>
<div class="alert alert-success alert-dismissible fade show" role="alert">
										<i class="icon-check_circle"></i> Record has been updated successfully!!. <button type="button" class="close pull-right" data-dismiss="alert" aria-label="Close">
											<span aria-hidden="true"></span>
										</button>
									</div>
									<?php } ?>

				<form method="post" enctype="multipart/form-data" >

				<input type="hidden" name="userid" value="<?php echo $data['id'] ?>">
					<div class="row gutters">
						<div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
							<div class="card h-100">
								<div class="card-body">
									<div class="account-settings">
										<div class="user-profile">
											<div class="user-avatar">
												<img src="img/<?php echo $data['image'];?>" alt="Admin Pic" />
											</div>
											<h5 class="user-name"><?php echo $data['name'];?></h5>
											<h6 class="user-email"><?php echo $data['email'];?></h6>
										</div>
										<div class="about">
											<h6 class="mb-2 text-primary">About</h6>
											<p><?php echo $data['aboutuser'] ?></p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
							<div class="card h-100">
								<div class="card-body">
									<div class="row gutters">
										<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
											<h6 class="mb-3 text-primary">Personal Details</h6>
										</div>
										<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
											<div class="form-group">
												<label for="fullName">Name</label>
												<input type="text" class="form-control" name="name" id="fullName"
													value="<?php echo $data['name'];?>">
											</div>
										</div>
										<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
											<div class="form-group">
												<label for="eMail">Email</label>
												<input type="email" class="form-control" name="email" id="eMail"
													value="<?php echo $data['email'];?>">
											</div>
										</div>
										<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
											<div class="form-group">
												<label for="phone">Contact</label>
												<input type="text" class="form-control" name="contact" id="phone"
													value="<?php echo $data['contact'];?>">
											</div>
										</div>
										<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
											<div class="form-group">
												<label for="website">Website URL</label>
												<input type="url" class="form-control" name="url" id="website"
													value="<?php echo $data['link'];?>">
											</div>
										</div>
									</div>
									<div class="row gutters">
										<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
											<h6 class="mb-3 text-primary">Address</h6>
										</div>
										<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
											<div class="form-group">
												<label for="Street">Street</label>
												<input type="name" class="form-control" name="street" id="Street"
													value="<?php echo $data['street'];?>">
											</div>
										</div>
										<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
											<div class="form-group">
												<label for="ciTy">City</label>
												<input type="name" class="form-control" name="city" id="ciTy"
													value="<?php echo $data['city'];?>">
											</div>
										</div>
										<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
											<div class="form-group">
												<label for="sTate">State</label>
												<input type="text" class="form-control" name="state" id="sTate"
													value="<?php echo $data['state'];?>">
											</div>
										</div>
										<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
											<div class="form-group">
												<label for="zIp">Zip Code</label>
												<input type="text" class="form-control" name="pin" id="zIp"
													value="<?php echo $data['pin'];?>">
											</div>
										</div>
									</div>
									<div class="row gutters">
										<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
											<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
												<h6 class="mb-3 text-primary">About</h6>
											</div>
											<div class="card h-200">
												<div class="card-header">
													<div class="card-title">Write About Yourself</div>
												</div>
												<div class="card-body">
													<div class="share-thoughts-container">
														<textarea class="form-control" name="about" rows="3" value="<?php echo $data['aboutuser']?>" placeholder="Do Not Leave This Section Blank!!!"></textarea>
														<div class="text-right">
															<button type="button" id="submit" name="cancel"
																class="btn btn-secondary">Cancel</button>
															<button type="submit" id="submit" name="submit"
																class="btn btn-primary">Update</button>
														</div>
													</div>
<?php

if(isset($_POST['submit']))
{
	
	//$usql = "insert into accsetting(url,state,city,street,pin,about) values('".$_POST['url']."','".$_POST['state']."','".$_POST['city']."','".$_POST['street']."','".$_POST['pin']."','".$_POST['about']."')";
	 $usql = "update registration set name='".$_POST['name']."', contact='".$_POST['contact']."',link='".$_POST['url']."', street='".$_POST['street']."', city='".$_POST['city']."', state='".$_POST['state']."', pin='".$_POST['pin']."', aboutuser='".$_POST['about' ]."' where id='".$_POST['userid']."'";
	 $info = mysqli_query($link,$usql);
	 echo "<script>window.location='setting.php?status=1';</script>";
	//  
	// $image= $_FILES['image']['name'];
	// $image_temp= $_FILES['image']['temp_name'];
	// $path= 'img/'.$image;
	// $link= mysqli_connect("localhost","root","","dets");
	// move_uploaded_file($image_temp,$path);
	// $rsql = "select * from registration where email ='".$data['email']."';
	// $update = mysqli_query($link,$rsql); 
	// $rem = mysqli_fetch_assoc($update);
	// $ursql = UPDATE 'registration' SET 'name' = '$data['name']', 'email'='$data['email']', 'contact'='$data['contact']', 'image' = '$data['image']' where 'id'='$data['id']';
}


?>



												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
				</form>
				<!-- Row end -->

			</div>
			<!-- Main container end -->

		</div>
		<!-- Page content end -->

	</div>
	<!-- Page wrapper end -->

	</body>

</html>