<?php
include('../connection.php');
if (isset($_POST['submit'])) {

	//print_r($_POST);

	$email = $_POST["email"];
	$phone = $_POST["phone"];
	$address = $_POST["address"];

	$mon_to = $_POST["mon_to"];
	$tues_to = $_POST["tues_to"];
	$wed_to = $_POST["wed_to"];
	$thurs_to = $_POST["thurs_to"];
	$fri_to = $_POST["fri_to"];
	$sat_to = $_POST["sat_to"];
	$sun_to = $_POST["sun_to"];


	$mon_from = $_POST["mon_from"];
	$tues_from = $_POST["tues_from"];
	$wed_from = $_POST["wed_from"];
	$thurs_from = $_POST["thurs_from"];
	$fri_from = $_POST["fri_from"];
	$sat_from = $_POST["sat_from"];
	$sun_from = $_POST["sun_from"];

	$sql = "SELECT * FROM amrex_detail WHERE id='1'";
	// $query=mysqli_query($conn,$query);
	$query = mysqli_query($conn, $sql);
	if (mysqli_num_rows($query) > 0) {
		$sql = "UPDATE amrex_detail SET email='$email',phone='$phone',address='$address',mon_to='$mon_to',mon_from='$mon_from',tues_from='$tues_from',tues_to='$tues_to',wed_from='$wed_from',wed_to='$wed_to',thurs_to='$thurs_to',thurs_from='$thurs_from',fri_from='$fri_from',fri_to='$fri_to',sat_from='$sat_from',sat_to='$sat_to',sun_from='$sun_from',sun_to='$sun_to' WHERE id='1'";
	} else {

		$sql = "INSERT INTO amrex_detail (email,phone,address,mon_from,mon_to,tues_from,tues_to,wed_from,wed_to,thurs_from,thurs_to,fri_from,fri_to,sat_from,sat_to,sun_from,sun_to) VALUES('$email','$phone','$address','$mon_from','$mon_to','$tues_from','$tues_to','$wed_from','$wed_to','$thurs_from','$thurs_to','$fri_from','$fri_to','$sat_from','$sat_to','$sun_from','$sun_to')";
	}

	$query = mysqli_query($conn, $sql);
	if ($query) {
		echo '<script>alert("Data inserted successfully.");</script>';
	} else {
		echo '<script>alert("Error. Try again");</script>' . mysqli_error($conn);
		exit();
	}
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<title>Admin Panel</title>
	<!-- Favicon -->
	<link rel="shortcut icon" href="favicon.ico">
	<link rel="icon" href="favicon.ico" type="image/x-icon">
	<!-- Data table CSS -->
	<link href="vendors/bower_components/datatables/media/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />

	<!-- Custom CSS -->
	<link href="dist/css/style.css" rel="stylesheet" type="text/css">
</head>

<body>
	<div class="wrapper theme-1-active pimary-color-green">
		<!-- Top Menu Items -->
		<nav class="navbar navbar-inverse navbar-fixed-top">
			<div class="mobile-only-brand pull-left">
				<div class="nav-header pull-left">
					<div class="logo-wrap">
						<a href="index.html">
							<img class="brand-img" src="dist/img/logo.png" alt="brand" />
							<span class="brand-text">Amrex</span>
						</a>
					</div>
				</div>
				<a id="toggle_nav_btn" class="toggle-left-nav-btn inline-block ml-20 pull-left" href="javascript:void(0);"><i class="zmdi zmdi-menu"></i></a>
				<a id="toggle_mobile_search" data-toggle="collapse" data-target="#search_form" class="mobile-only-view" href="javascript:void(0);"><i class="zmdi zmdi-search"></i></a>
				<a id="toggle_mobile_nav" class="mobile-only-view" href="javascript:void(0);"><i class="zmdi zmdi-more"></i></a>
			</div>
		</nav>
		<!-- /Top Menu Items -->

		<!-- Left Sidebar Menu -->
		<div class="fixed-sidebar-left">
			<ul class="nav navbar-nav side-nav nicescroll-bar">
				<li class="navigation-header">
					<span>Main</span>
					<i class="zmdi zmdi-more"></i>
				</li>
				<li>
					<a href="admin_book.php">
						<div class="pull-left"><i class="zmdi zmdi-flag mr-20"></i><span class="right-nav-text">Book Demo</span></div>
						<div class="clearfix"></div>
					</a>
				</li>
				<li>
					<a href="admin_contact.php">
						<div class="pull-left"><i class="zmdi zmdi-assignment-account mr-20"></i><span class="right-nav-text">Contact Requests</span></div>
						<div class="clearfix"></div>
					</a>
				</li>
				<li>
					<a href="admin_settings.php">
						<div class="pull-left"><i class="zmdi zmdi-settings mr-20"></i><span class="right-nav-text">Settings</span></div>
						<div class="clearfix"></div>
					</a>
				</li>
			</ul>
		</div>
		<!-- /Left Sidebar Menu -->
		<!-- Main Content -->
		<div class="page-wrapper">
			<div class="container-fluid">

				<!-- Title -->
				<div class="row heading-bg">
					<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
						<h5 class="txt-dark">Settings</h5>
					</div>
					<!-- Breadcrumb -->
					<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
						<ol class="breadcrumb">
							<li><a href="index.html">Settings</a></li>
						</ol>
					</div>
					<!-- /Breadcrumb -->
				</div>
				<!-- Row -->
				<div class="row">
					<div class="col-md-12">
						<div class="panel panel-default card-view">
							<div class="panel-heading">
								<div class="pull-left">
									<h6 class="panel-title txt-dark">Settings</h6>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="panel-wrapper collapse in">
								<div class="panel-body">
									<div class="row">
										<div class="col-md-12">
											<div class="form-wrap">
												<form action="" class="form-horizontal" method="POST">
													<div class="form-body">
														<h6 class="txt-dark capitalize-font"><i class="zmdi zmdi-account mr-10"></i>Information</h6>
														<?php


														$sql = "SELECT * FROM amrex_detail WHERE id='1'";
														$query = mysqli_query($conn, $sql);
														$row = mysqli_fetch_assoc($query);

														?>
														<hr class="light-grey-hr" />
														<div class="row">
															<div class="col-md-6">
																<div class="form-group">
																	<label class="control-label col-md-3">Email</label>
																	<div class="col-md-9">
																		<input type="email" class="form-control" placeholder="Email" name="email" value="<?php echo $row["email"]; ?>">
																	</div>
																</div>
															</div>
															<!--/span-->
															<div class="col-md-6">
																<div class="form-group">
																	<label class="control-label col-md-3">Phone</label>
																	<div class="col-md-9">
																		<input type="text" class="form-control" placeholder="Phone" name="phone" value="<?php echo $row["phone"]; ?>">
																	</div>
																</div>
															</div>
															<!--/span-->
														</div>
														<div class="row">
															<div class="col-md-6">
																<div class="form-group">
																	<label class="control-label col-md-3">Address</label>
																	<div class="col-md-9">
																		<input type="text" class="form-control" placeholder="Address" name="address" value="<?php echo $row["address"]; ?>">
																	</div>
																</div>
															</div>
														</div>
														<div class="row">
															<div class="col-md-6">
																<div class="row">
																	<div class="col-md-2">
																		<label class="control-label">Monday></label>
																	</div>
																	<div class="col-md-5">
																		<div class="form-group">
																			<label class="control-label col-md-3">From:</label>
																			<div class="col-md-9">
																				<input type="time" class="form-control" name="mon_from" value="<?php echo $row["mon_from"]; ?>">
																			</div>
																		</div>
																	</div>
																	<div class="col-md-5">
																		<div class="form-group">
																			<label class="control-label col-md-3">To:</label>
																			<div class="col-md-9">
																				<input type="time" class="form-control" name="mon_to" value="<?php echo $row["mon_to"]; ?>">
																			</div>
																		</div>
																	</div>
																</div>
															</div>
															<div class="col-md-6">
																<div class="row">
																	<div class="col-md-2">
																		<label class="control-label">Tuesday></label>
																	</div>
																	<div class="col-md-5">
																		<div class="form-group">
																			<label class="control-label col-md-3">From:</label>
																			<div class="col-md-9">
																				<input type="time" class="form-control" name="tues_from" value="<?php echo $row["tues_from"]; ?>">
																			</div>
																		</div>
																	</div>
																	<div class="col-md-5">
																		<div class="form-group">
																			<label class="control-label col-md-3">To:</label>
																			<div class="col-md-9">
																				<input type="time" class="form-control" name="tues_to" value="<?php echo $row["tues_to"]; ?>">
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<div class="row">
															<div class="col-md-6">
																<div class="row">
																	<div class="col-md-2">
																		<label class="control-label">Wednesday></label>
																	</div>
																	<div class="col-md-5">
																		<div class="form-group">
																			<label class="control-label col-md-3">From:</label>
																			<div class="col-md-9">
																				<input type="time" class="form-control" name="wed_from" value="<?php echo $row["wed_from"]; ?>">
																			</div>
																		</div>
																	</div>
																	<div class="col-md-5">
																		<div class="form-group">
																			<label class="control-label col-md-3">To:</label>
																			<div class="col-md-9">
																				<input type="time" class="form-control" name="wed_to" value="<?php echo $row["wed_to"]; ?>">
																			</div>
																		</div>
																	</div>
																</div>
															</div>
															<div class="col-md-6">
																<div class="row">
																	<div class="col-md-2">
																		<label class="control-label">Thursday></label>
																	</div>
																	<div class="col-md-5">
																		<div class="form-group">
																			<label class="control-label col-md-3">From:</label>
																			<div class="col-md-9">
																				<input type="time" class="form-control" name="thurs_from" value="<?php echo $row["thurs_from"]; ?>">
																			</div>
																		</div>
																	</div>
																	<div class="col-md-5">
																		<div class="form-group">
																			<label class="control-label col-md-3">To:</label>
																			<div class="col-md-9">
																				<input type="time" class="form-control" name="thurs_to" value="<?php echo $row["thurs_to"]; ?>">
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<div class="row">
															<div class="col-md-6">
																<div class="row">
																	<div class="col-md-2">
																		<label class="control-label">Friday></label>
																	</div>
																	<div class="col-md-5">
																		<div class="form-group">
																			<label class="control-label col-md-3">From:</label>
																			<div class="col-md-9">
																				<input type="time" class="form-control" name="fri_from" value="<?php echo $row["fri_from"]; ?>">
																			</div>
																		</div>
																	</div>
																	<div class="col-md-5">
																		<div class="form-group">
																			<label class="control-label col-md-3">To:</label>
																			<div class="col-md-9">
																				<input type="time" class="form-control" name="fri_to" value="<?php echo $row["fri_to"]; ?>">
																			</div>
																		</div>
																	</div>
																</div>
															</div>
															<div class="col-md-6">
																<div class="row">
																	<div class="col-md-2">
																		<label class="control-label">Saturday></label>
																	</div>
																	<div class="col-md-5">
																		<div class="form-group">
																			<label class="control-label col-md-3">From:</label>
																			<div class="col-md-9">
																				<input type="time" class="form-control" name="sat_from" value="<?php echo $row["sat_from"]; ?>">
																			</div>
																		</div>
																	</div>
																	<div class="col-md-5">
																		<div class="form-group">
																			<label class="control-label col-md-3">To:</label>
																			<div class="col-md-9">
																				<input type="time" class="form-control" name="sat_to" value="<?php echo $row["sat_to"]; ?>">
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<div class="row">
															<div class="col-md-6">
																<div class="row">
																	<div class="col-md-2">
																		<label class="control-label">Sunday></label>
																	</div>
																	<div class="col-md-5">
																		<div class="form-group">
																			<label class="control-label col-md-3">From:</label>
																			<div class="col-md-9">
																				<input type="time" class="form-control" name="sun_from" value="<?php echo $row["sun_from"]; ?>">
																			</div>
																		</div>
																	</div>
																	<div class="col-md-5">
																		<div class="form-group">
																			<label class="control-label col-md-3">To:</label>
																			<div class="col-md-9">
																				<input type="time" class="form-control" name="sun_to" value="<?php echo $row["sun_to"]; ?>">
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<!--/span-->
											</div>
										</div>
										<div class="form-actions mt-10">
											<div class="row">
												<div class="col-md-6">
													<div class="row">
														<div class="col-md-offset-3 col-md-9">
															<button type="submit" class="btn btn-success  mr-10" name="submit">Submit</button>
															<button type="button" class="btn btn-default">Cancel</button>
														</div>
													</div>
												</div>
												<div class="col-md-6"> </div>
											</div>
										</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /Row -->
	</div>
	</div>
	<!-- /Main Content -->
	</div>
	<!-- /#wrapper -->

	<!-- JavaScript -->

	<!-- jQuery -->
	<script src="vendors/bower_components/jquery/dist/jquery.min.js"></script>
	<!-- Bootstrap Core JavaScript -->
	<script src="vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

	<!-- Data table JavaScript -->
	<script src="vendors/bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
	<script src="dist/js/dataTables-data.js"></script>

	<!-- Slimscroll JavaScript -->
	<script src="dist/js/jquery.slimscroll.js"></script>

	<!-- Owl JavaScript -->
	<script src="vendors/bower_components/owl.carousel/dist/owl.carousel.min.js"></script>

	<!-- Switchery JavaScript -->
	<script src="vendors/bower_components/switchery/dist/switchery.min.js"></script>

	<!-- Fancy Dropdown JS -->
	<script src="dist/js/dropdown-bootstrap-extended.js"></script>

	<!-- Init JavaScript -->
	<script src="dist/js/init.js"></script>

</body>

</html>