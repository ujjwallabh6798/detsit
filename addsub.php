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
							<li class="breadcrumb-item">Add Subject</li>
						</ol>
						<!-- Breadcrumb end -->

						<!-- App actions start -->
						<!-- App actions end -->

					</div>
					<!-- Page header end -->
					
					<!-- Row start -->
					<div class="row gutters">

						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
							<div class="card">
								<div class="card-body">
									<form method="post" enctype="multipart/form-data" required>
									<div class="row gutters">
										<div class="col-xl-4 col-lglg-4 col-md-4 col-sm-4 col-12">
											<div class="form-group">
												<label for="inputName">Subject</label>
												<input type="text" class="form-control" id="inputName" name="subname" placeholder="Enter Subject name">
											</div>
										</div>
										<div class="col-xl-4 col-lglg-4 col-md-4 col-sm-4 col-12">
											<div class="form-group">
												<label for="inputEmail">Teacher's Name</label>
												<input type="text" class="form-control" id="inputEmail" name="tname" placeholder="Teacher's Name">
											</div>
										</div>
										<div class="col-xl-4 col-lglg-4 col-md-4 col-sm-4 col-12">
											<div class="form-group">
												<label for="inputEmail">subject code</label>
												<input type="text" class="form-control" id="inputEmail" name="subcode" placeholder="subject code">
											</div>
										</div>
										<div class="col-xl-4 col-lglg-4 col-md-4 col-sm-4 col-12">
											<div class="form-group">
												<label for="inputPwd">Teacher's Contact</label>
												<input type="tel" class="form-control" id="inputPwd" name="tphone" placeholder="Mobile No.">
											</div>
										</div>
										<div class="col-xl-4 col-lglg-4 col-md-4 col-sm-4 col-12">
											<div class="form-group">
												<label for="inputEmail">Syllabus</label>
												<input type="file" class="form-control" id="inputEmail" name="syllabus1" placeholder="Upload Sallybus">
											</div>
										</div>
										<div class="col-xl-4 col-lglg-4 col-md-4 col-sm-4 col-12">
											<div class="form-group">
												<label for="inputEmail">Subject Image</label>
												<input type="file" class="form-control" id="inputEmail" name="subimg" placeholder="Upload Image">
											</div>
										</div>
										<div class="col-xl-4 col-lglg-4 col-md-4 col-sm-4 col-12">
											<div class="form-group">
											</div>
										</div>
									<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
									<div class="card-body">
									<div class="form-inline">
									    <label for="inputPwd">Start Date</label>
										<input type="date" class="form-control" id="inputPwd" name="sdate" placeholder="Date">
											
										<label class="my-1 mr-2" for="inlineFormCustomSelectPref">Stream</label>
										<select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref" name="stream">
											<option selected>Choose...</option>
											<option value="IT">IT</option>
											<option value="EIE">EIE</option>
											<option value="ECE">ECE</option>
											<option value="CSE">CSE</option>
										</select>
										<label class="my-1 mr-2" for="inlineFormCustomSelectPref">Batch</label>
											<select class="custom-select my-1 mr-sm-2" name="batch" id="inlineFormCustomSelectPref">
												<option selected>Choose...</option>
												<option value="B.Tech Part-I">B.Tech Part-I</option>
												<option value="B.Tech Part-II">B.Tech Part-II</option>
												<option value="B.Tech Part-III">B.Tech Part-III</option>
												<option value="B.Tech Part-IV">B.Tech Part-IV</option>
											</select>
										<button type="submit" name="submit" class="btn btn-primary my-1">Submit</button>
									</div>
									<?php

if(isset($_POST['submit']))
{ 
	$image = $_FILES['subimg']['name'];
	$image_tmp = $_FILES['subimg']['tmp_name'];
	$path = "img/".$image;

	$pdf_1 = $_FILES['syllabus1']['name'];
	$pdf_tmp = $_FILES['syllabus1']['tmp_name'];
	$location = "img/".$pdf_1;
	
	$link = mysqli_connect("localhost","root","","dets");
	move_uploaded_file($image_tmp,$path);
	move_uploaded_file($pdf_tmp,$location);
	 $sql = "insert into part1 (subject,teacher,contact,batch,syllabus,stream,sdate,subcode,subimg) values
	('".$_POST['subname']."','".$_POST['tname']."','".$_POST['tphone']."','".$_POST['batch']."','".$pdf_1."','".$_POST['stream']."','".$_POST['sdate']."','".$_POST['subcode']."','".$image."')";
	$result = mysqli_query($link,$sql);
	//$id = mysqli_insert_id($link);
	// if($result){
	// 	echo"code";
	// }
	// else{
	// 	echo"fail ailed to load!!!";
	// }
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