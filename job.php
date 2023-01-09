<?php

include "menu.php";
include "footer.php";
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
							<li class="breadcrumb-item">JOB Opening's</li>
						</ol>
						<!-- Breadcrumb end -->

						<!-- App actions start -->
						<ul class="app-actions">
							<li>
								<a href="addjob.php">
									<i class="icon-add"></i>Add New Job
								</a>
							</li>
							<!-- <li>
								<a href="#">
									<i class="icon-add"></i>Remove Subject
								</a>
							</li> -->
						</ul>
						<!-- App actions end -->

					</div>
					<!-- Page header end -->
					
					<!-- Row start -->
					<div class="row gutters">
						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
							
							<div class="table-container">
								<div class="table-responsive">
									<table id="basicExample" class="table custom-table">
										<thead>
										<tr>
												<th>Position</th>
												<th>Job Discription</th>
												<th>Date of Post</th>
												<th>Stream</th>
                                                <th>Location</th>
												<th>Experience Required</th>
												<th>Image</th>
                                                <th>Batch allowed</th>
											</tr>
										</thead>
										<tbody>
								
<?php 
$sql = "select * from job_openings";
$result = mysqli_query($link,$sql);
while($data = mysqli_fetch_assoc($result)){
?>
											<tr>
												<td><?php echo $data['Position'];?></td>
												<td> <?php echo $data['JD']; ?></td>
												<td><?php echo $data['Pdate']; ?></td>
												<td> <?php echo $data['stream']; ?></td>
												<td> <?php echo $data['location']; ?></td>
												<td> <?php echo $data['Experience']; ?></td>
												<td><img src="img/<?php echo $data['image'];?>" alt="Sub Image" style="height:100px;width:100px"/></td>
                                                <td> <?php echo $data['batch']; ?></td>
                                            </tr>
											<?php } ?>
										</tbody>
									</table>
								</div>
							</div>

						
								

						

						</div>
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