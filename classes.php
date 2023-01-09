<?php

include "menu.php";

?>



<!-- Sidebar wrapper end -->

<!-- Page content start  -->
<div class="page-content">

	<!-- Main container start -->
	<div class="main-container">


		<!-- Header start -->

		<!-- Header end -->

		<!-- Page header start -->
		<div class="page-header">

			<!-- Breadcrumb start -->
			<ol class="breadcrumb">
				<li class="breadcrumb-item">Schedule Class</li>
			</ol>
			<!-- Breadcrumb end -->

			<!-- App actions start -->
			<!-- App actions end -->

		</div>
		<!-- Page header end -->

		<!-- Row start -->
		<div class="row gutters">
<form method="post" enctype="multipart/form-data" require>
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
				<div class="card">
					<div class="card-body">

						<div class="row gutters">
							<div class="col-xl-4 col-lglg-4 col-md-4 col-sm-4 col-12">
								<div class="form-group">
									<label for="inputName">Subject</label>
									<input type="text" class="form-control" name="sub" id="inputName"
										placeholder="Enter Subject name" require>
								</div>
							</div>
							<div class="col-xl-4 col-lglg-4 col-md-4 col-sm-4 col-12">
								<div class="form-group">
									<label for="inputEmail">Teacher's Name</label>
									<input type="text" class="form-control" name="teacher" id="inputEmail"
										placeholder="Teacher's Name">
								</div>
							</div>
							<div class="col-xl-4 col-lglg-4 col-md-4 col-sm-4 col-12">
								<div class="form-group">
									<label for="inputEmail">Teacher's Email</label>
									<input type="email" class="form-control" name="mail" id="inputEmail" placeholder="Email">
								</div>
							</div>
							<div class="col-xl-4 col-lglg-4 col-md-4 col-sm-4 col-12">
								<div class="form-group">
									<label for="inputPwd">Teacher's Contact</label>
									<input type="tel" class="form-control" name="contact" id="inputPwd" placeholder="Mobile No.">
								</div>
							</div>
							<div class="col-xl-4 col-lglg-4 col-md-4 col-sm-4 col-12">
								<div class="form-group">
									<label for="inputEmail">Study Material</label>
									<input type="file" class="form-control" name="material" id="inputEmail"
										placeholder="Upload Sallybus">
								</div>
							</div>
							<div class="col-xl-4 col-lglg-4 col-md-4 col-sm-4 col-12">
								<div class="form-group">
									<label for="inputPwd">Start Date</label>
									<input type="date" class="form-control" name="sdate" id="inputPwd" placeholder="Date">
								</div>
							</div>
							<div class="col-xl-12 col-lglg-12 col-md-12 col-sm-12 col-12">
								<div class="form-group">
									<label for="inputEmail">Time</label>
									<input type="time" class="form-control" name="time" id="inputEmail" placeholder="Time">
								</div>
							</div>
							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
								<div class="card-body">
									<div class="form-inline">
										<label class="my-1 mr-2" for="inlineFormCustomSelectPref">Stream</label>
										<select class="custom-select my-1 mr-sm-2" name="stream" id="inlineFormCustomSelectPref">
											<option selected>Choose...</option>
											<option value="IT">IT</option>
											<option value="EIE">EIE</option>
											<option value="ECE">ECE</option>
											<option value="CSE">CSE</option>
										</select>
									</div>
									<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="padding-left:0;">
										<div class="form-inline">
											<label class="my-1 mr-2" for="inlineFormCustomSelectPref">Batch</label>

											<select class="custom-select my-1 mr-sm-2" name="batch" id="inlineFormCustomSelectPref">
												<option selected>Choose...</option>
												<option value="B.Tech Part-I">B.Tech Part-I</option>
												<option value="B.Tech Part-II">B.Tech Part-II</option>
												<option value="B.Tech Part-III">B.Tech Part-III</option>
												<option value="B.Tech Part-IV">B.Tech Part-IV</option>
											</select>
											<button type="submit" class="btn btn-primary my-1" name="submit">Submit</button>
										</div>
									</div>

<?php
if(isset($_POST['submit']))
{	
	$pdf = $_FILES['material']['name'];
	$pdf_tmp = $_FILES['material']['tmp_name'];
	$path = "img/".$pdf;
	$link = mysqli_connect("localhost","root","","dets");
	move_uploaded_file($pdf_tmp,$path);
	$csql = "insert into schedule(subject,teacher,email,contact,studymaterial,sdate,time,stream,batch) values 
	('".$_POST['sub']."','".$_POST['teacher']."','".$_POST['mail']."','".$_POST['contact']."','".$pdf."','".$_POST['sdate']."','".$_POST['time']."','".$_POST['stream']."','".$_POST['batch']."')";
	$result = mysqli_query($link,$csql);
}


?>


								</div>
							</div>
			</form>
						</div>
						<!-- Row end -->

					</div>
					<!-- Main container end -->
				</div>
				<!-- Page content end -->

			</div>
			<!-- Page wrapper end -->


			</body>

			</html>

			<?php
include "footer.php";
?>