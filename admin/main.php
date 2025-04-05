<?php include 'header.php'; ?>
	<div class="row">
		<div class="col-md-6 col-lg-3 grid-margin stretch-card">
			<div class="card">
				<div class="card-body">
				  	<h1 class="font-weight-light mb-4">
					    <?php
					    	$sql = "SELECT * FROM users";
					    	$res = mysqli_query($con,$sql);
					    	echo $row = mysqli_num_rows($res);
					    ?>
				  	</h1>
				 	<div class="d-flex flex-wrap align-items-center">
						<div>
						  <h4 class="font-weight-normal">Users</h4>
						  <p class="text-muted mb-0 font-weight-light">Total Users</p>
						</div>
						<i class="mdi mdi-shopping icon-lg text-danger ml-auto"></i>
				  	</div>
				</div>
			</div>
		</div>

		<div class="col-md-6 col-lg-3 grid-margin stretch-card">
			<div class="card">
				<div class="card-body">
				  	<h1 class="font-weight-light mb-4">
					    <?php
					    	$sql = "SELECT * FROM genres";
					    	$res = mysqli_query($con,$sql);
					    	echo $row = mysqli_num_rows($res);
					    ?>
				  	</h1>
				 	<div class="d-flex flex-wrap align-items-center">
						<div>
						  <h4 class="font-weight-normal">Genres</h4>
						  <p class="text-muted mb-0 font-weight-light">Total Genres</p>
						</div>
						<i class="mdi mdi-shopping icon-lg text-danger ml-auto"></i>
				  	</div>
				</div>
			</div>
		</div>

		<div class="col-md-6 col-lg-3 grid-margin stretch-card">
			<div class="card">
				<div class="card-body">
				  	<h1 class="font-weight-light mb-4">
					    <?php
					    	$sql = "SELECT * FROM artists";
					    	$res = mysqli_query($con,$sql);
					    	echo $row = mysqli_num_rows($res);
					    ?>
				  	</h1>
				 	<div class="d-flex flex-wrap align-items-center">
						<div>
						  <h4 class="font-weight-normal">Artists</h4>
						  <p class="text-muted mb-0 font-weight-light">Total Artists</p>
						</div>
						<i class="mdi mdi-shopping icon-lg text-danger ml-auto"></i>
				  	</div>
				</div>
			</div>
		</div>

		<div class="col-md-6 col-lg-3 grid-margin stretch-card">
			<div class="card">
				<div class="card-body">
				  	<h1 class="font-weight-light mb-4">
					    <?php
					    	$sql = "SELECT * FROM albums";
					    	$res = mysqli_query($con,$sql);
					    	echo $row = mysqli_num_rows($res);
					    ?>
				  	</h1>
				 	<div class="d-flex flex-wrap align-items-center">
						<div>
						  <h4 class="font-weight-normal">Albums</h4>
						  <p class="text-muted mb-0 font-weight-light">Total Albums</p>
						</div>
						<i class="mdi mdi-shopping icon-lg text-danger ml-auto"></i>
				  	</div>
				</div>
			</div>
		</div>

		<div class="col-md-6 col-lg-3 grid-margin stretch-card">
			<div class="card">
				<div class="card-body">
				  	<h1 class="font-weight-light mb-4">
					    <?php
					    	$sql = "SELECT * FROM songs";
					    	$res = mysqli_query($con,$sql);
					    	echo $row = mysqli_num_rows($res);
					    ?>
				  	</h1>
				 	<div class="d-flex flex-wrap align-items-center">
						<div>
						  <h4 class="font-weight-normal">Songs</h4>
						  <p class="text-muted mb-0 font-weight-light">Total Songs</p>
						</div>
						<i class="mdi mdi-shopping icon-lg text-danger ml-auto"></i>
				  	</div>
				</div>
			</div>
		</div>
	</div>
<?php include 'fotter.php'; ?>