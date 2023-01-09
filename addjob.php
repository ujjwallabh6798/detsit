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
							<li class="breadcrumb-item">Add New Job</li>
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
												<label for="inputName">Position</label>
												<input type="text" class="form-control" id="inputName" name="subname" placeholder="Enter Subject name">
											</div>
										</div>
										<div class="col-xl-4 col-lglg-4 col-md-4 col-sm-4 col-12">
											<div class="form-group">
												<label for="inputEmail">Job Discription</label>
												<textarea rows="10" type="text" class="form-control" id="inputEmail" name="tname" placeholder="Job Details"></textarea>
											</div>
										</div>
										<div class="col-xl-4 col-lglg-4 col-md-4 col-sm-4 col-12">
											<div class="form-group">
												<label for="inputEmail">Batch</label>
												<input type="text" class="form-control" id="inputEmail" name="bat" placeholder="Batch's Allowed">
											</div>
										</div>
										<div class="col-xl-4 col-lglg-4 col-md-4 col-sm-4 col-12">
											<div class="form-group">
												<label for="inputPwd">Stream</label>
												<input type="text" class="form-control" id="inputPwd" name="stream" placeholder="Streams allowed">
											</div>
										</div>
										<div class="col-xl-4 col-lglg-4 col-md-4 col-sm-4 col-12">
											<div class="form-group">
												<label for="inputEmail">URL</label>
												<input type="text" class="form-control" id="inputEmail" name="link" placeholder="Link to the official website">
											</div>
										</div>
										<div class="col-xl-4 col-lglg-4 col-md-4 col-sm-4 col-12">
											<div class="form-group">
												<label for="inputEmail">Company Image</label>
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
									    <label for="inputPwd">Posting Date</label>
										<input type="date" class="form-control" id="inputPwd" name="sdate" placeholder="Date">
                                        <label for="inputPwd1">Experience Required</label>
										<input type="text" class="form-control" id="inputPwd1" name="exp" placeholder="Experience Req.(Ex: 2-3 Yrs)">
                                        <label for="inputPwd2">Job Location</label>
										<input type="text" class="form-control" id="inputPwd2" name="loc" placeholder="Job Location">
                                        <button type="submit" name="submit" class="btn btn-primary my-1">Submit</button>
									</div>
									<?php

if(isset($_POST['submit']))
{ 
	$image = $_FILES['subimg']['name'];
	$image_tmp = $_FILES['subimg']['tmp_name'];
	$path = "img/".$image;

	// $pdf_1 = $_FILES['syllabus1']['name'];
	// $pdf_tmp = $_FILES['syllabus1']['tmp_name'];
	// $location = "img/".$pdf_1;
	
	$link = mysqli_connect("localhost","root","","dets");
	move_uploaded_file($image_tmp,$path);
	// move_uploaded_file($pdf_tmp,$location);
	 $sql = "insert into job_openings (Position,JD,Pdate,Experience,batch,stream,image,link,location) values
	('".$_POST['subname']."','".$_POST['tname']."','".$_POST['sdate']."','".$_POST['exp']."','".$_POST['bat']."','".$_POST['stream']."','".$image."','".$_POST['link']."','".$_POST['loc']."')";
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