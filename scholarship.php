<?php

include_once "menu.php";

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
				<li class="breadcrumb-item">Scholarship News</li>
			</ol>
			<!-- Breadcrumb end -->

			<!-- App actions start -->
			<!-- App actions end -->

		</div>
		<!-- Page header end -->

		<!-- Row start -->
		<div class="row gutters">
<form method="post" enctype="multipart/form-data" required>
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
				<div class="card">
					<div class="card-body">

						<div class="row gutters">
							<div class="col-xl-4 col-lglg-4 col-md-4 col-sm-4 col-12">
								<div class="form-group">
									<label for="inputName">Scholarship Name</label>
									<input type="text" class="form-control" id="inputName" name="mname"
										placeholder="Scholarship Name">
								</div>
							</div>
							<div class="col-xl-4 col-lglg-4 col-md-4 col-sm-4 col-12">
								<div class="form-group">
									<label for="inputEmail">Link</label>
									<input type="url" class="form-control" id="inputEmail" name="url"
										placeholder="URL of scholarship application">
								</div>
							</div>
							<div class="col-xl-4 col-lglg-4 col-md-4 col-sm-4 col-12">
								<div class="form-group">
									<label for="inputPwd">Last Date To Apply</label>
									<input type="date" class="form-control" id="inputPwd" name="ldate"
										placeholder="Last Date To Apply">
								</div>
							</div>
							<div class="card-body">
								<div class="share-thoughts-container">
									<textarea class="form-control" rows="3" name="detail">Hello, </textarea>
									<div class="share-thoughts-footer">
										<button class="btn btn-primary" name="post">Post</button>
									</div>
								</div>
							</div>
						</div>
					</div>
<?php
if(isset($_POST['post']))
{
	$link = mysqli_connect("localhost","root","","dets");
	$msql = "insert into scholarship (meritname,link,ldate,disc) values ('".$_POST['mname']."','".$_POST['url']."','".$_POST['ldate']."','".$_POST['detail']."')";
	$result = mysqli_query($link,$msql);
	if($result){
		echo"code is ok";
	}else{
		echo"code failed";
	}
}



?>



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