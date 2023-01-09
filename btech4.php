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
							<li class="breadcrumb-item">B.Tech Part-IV</li>
						</ol>
						<!-- Breadcrumb end -->

						<!-- App actions start -->
						<ul class="app-actions">
							<li>
								<a href="addsub.php">
									<i class="icon-add"></i>Add Subject
								</a>
							</li>
							<li>
								<a href="#">
									<i class="icon-add"></i>Remove Subject
								</a>
							</li>
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
												<th>Subject</th>
												<th>Teacher</th>
												<th>Sallybus</th>
												<th>Stream</th>
                                                <th>Contact</th>
												<th>Start date</th>
												<th>Subject Image</th>
											</tr>
										</thead>
										<tbody>
								
<?php 
$sql = "select * from part1 where batch = 'B.Tech Part-IV'";
$result = mysqli_query($link,$sql);
while($data = mysqli_fetch_assoc($result)){
?>
											<tr>
												<td><?php echo $data['subject'];?></td>
												<td> <?php echo $data['teacher']; ?></td>
												<td><a href="img/<?php echo $data['syllabus']; ?>" target="_blank">Sallybus</a></td>
												<td> <?php echo $data['stream']; ?></td>
												<td>+9198745632</td>
												<td> <?php echo $data['sdate']; ?></td>
												<td><img src="img/<?php echo $data['subimg'];?>" alt="Sub Image" style="height:100px;width:100px"/></td>
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