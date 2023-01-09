<?php

include_once "menu.php";
include_once "footer.php";
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
							<li class="breadcrumb-item">Notice Board</li>
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
							<div class="card">
								<div class="card-body">
									
									<div class="row gutters">
										<div class="col-xl-4 col-lglg-4 col-md-4 col-sm-4 col-12">
											<div class="form-group">
												<label for="inputName">Title</label>
												<input type="text" class="form-control" name="title" id="inputName" placeholder="Title of notice">
												<label>Attachment</label>
												<input type="file" class="form-control" name="pdf"/>
											</div>
										</div>
										</div>
                                        <div class="card-body">
										<div class="share-thoughts-container">
											<textarea class="form-control" rows="10" name="message">Hello, </textarea>
											<div class="share-thoughts-footer">
												<button class="btn btn-primary" name="post">Post</button>
											</div>
										</div>
									</div>
									</div>
<?php
if(isset($_POST['post']))
{
	$file = $_FILES['pdf']['name'];
	$file_tmp = $_FILES['pdf']['tmp_name'];
	$path = "img/".$file;
	move_uploaded_file($path,$file_tmp);
	$nsql = "insert into notice(title,message,pdf) values ('".$_POST['title']."','".$_POST['message']."','".$file."')";
	$result = mysqli_query($link,$nsql);
}
?>
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

