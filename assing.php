<?php
include "menu.php";
include "footer.php";
?>
<!doctype html>
<html lang="en">
<head>



</head>

<body>

	<!-- Page wrapper start -->

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
					<li class="breadcrumb-item">Add Assingments</li>
				</ol>
				<!-- Breadcrumb end -->

				<!-- App actions start -->
				<!-- App actions end -->

			</div>
			<!-- Page header end -->

			<!-- Row start -->
			<form method="post" enctype="multipart/form-data">
			<div class="row gutters">
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
					<div class="card m-0">
						<div class="card-header" name="question">
							<div class="card-title">Questions</div>
							<textarea class="summernote" name="question"></textarea>
						</div>
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
					
											<label class="my-1 mr-2" for="inlineFormCustomSelectPref">Batch</label>
											<select class="custom-select my-1 mr-sm-2" name="batch" id="inlineFormCustomSelectPref">
												<option selected>Choose...</option>
												<option value="B.Tech Part-I">B.Tech Part-I</option>
												<option value="B.Tech Part-II">B.Tech Part-II</option>
												<option value="B.Tech Part-III">B.Tech Part-III</option>
												<option value="B.Tech Part-IV">B.Tech Part-IV</option>
											</select>
										<div class="form-group">
											<label for="inputPwd">Due Date</label>
											<input type="date" class="form-control" name="ddate" id="inputPwd" placeholder="Date">
										</div>
											
											</div>
											<a href="assing.php">
												<button class="btn btn-secondary" type="button">Cancel</button>
												</a>
												<button type="submit" class="btn btn-primary my-1" name="submit">Submit</button>
											</div>
										</div>				
											</div>
				</div>
<?php

if(isset($_POST['submit']))
{
	$asql = "insert into assingment(question,stream,batch,duedate) values ('".$_POST['question']."','".$_POST['stream']."','".$_POST['batch']."','".$_POST['ddate']."')";
	$result = mysqli_query($link,$asql);
}

?>



			</div>
			</form>
			<!-- Row end -->
		</div>
		<!-- Main container end -->

	</div>
	<!-- Page content end -->

	</div>
	<!-- Page wrapper end -->


	<script>
		$(document).ready(function () {
			$('.summernote').summernote({
				height: '250px',
				tabsize: 2
			});
		});
	</script>
</body>

</html>