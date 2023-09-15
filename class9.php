	<?php

	session_start();

	$obj  =new mysqli("localhost","root","","hackathon");

	if (!isset($_SESSION['userid']))
	{
		header('location:index.php');
	}

	if (isset($_POST['submit']))
	{
		$s9name =$_POST['s9name'];
		$s9age=$_POST['s9age'];
		$s9gender =$_POST['s9gender'];
		$s9caste=$_POST['s9caste'];
		$s9dob =$_POST['s9dob'];
		$s9year =$_POST['s9year'];

		$e=$obj->query("insert into class9(s9name,s9age,s9gender,s9caste,s9dob,s9year) values ('$s9name','$s9age','$s9gender','$s9caste','$s9dob','$s9year')");
		if($e){
			echo"<script>alert('Data Inserted')</script>";
		}
		else{
			echo"<script>alert('Error')</script>";
		}
	}





	?>




	<!DOCTYPE html>
	<html lang="en">


	<!-- Mirrored from appstack.bootlab.io/pages-settings.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 08 Aug 2021 05:07:26 GMT -->
	<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="Responsive Bootstrap 5 Admin &amp; Dashboard Template">
		<meta name="author" content="Bootlab">

		<title>Category</title>

		<link rel="canonical" href="pages-settings.html" />
		<link rel="shortcut icon" href="img/favicon.ico">

		<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500&amp;display=swap" rel="stylesheet">

		<!-- Choose your prefered color scheme -->
		<link href="css/light.css" rel="stylesheet">
		<!-- <link href="css/dark.css" rel="stylesheet"> -->

		<!-- BEGIN SETTINGS -->
		<!-- Remove this after purchasing -->
		<link class="js-stylesheet" href="css/light.css" rel="stylesheet">
		<script src="js/settings.js"></script>
		<!-- END SETTINGS -->
		<script>
			(function(h,o,t,j,a,r){
				h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
				h._hjSettings={hjid:2120269,hjsv:6};
				a=o.getElementsByTagName('head')[0];
				r=o.createElement('script');r.async=1;
				r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
				a.appendChild(r);
			})(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
		</script><script async src="https://www.googletagmanager.com/gtag/js?id=G-Q3ZYEKLQ68"></script>
		<script>
			window.dataLayer = window.dataLayer || [];
			function gtag(){dataLayer.push(arguments);}
			gtag('js', new Date());

			gtag('config', 'G-Q3ZYEKLQ68');
		</script></head>
	<!--
	  HOW TO USE: 
	  data-theme: default (default), dark, light
	  data-layout: fluid (default), boxed
	  data-sidebar-position: left (default), right
	  data-sidebar-behavior: sticky (default), fixed, compact
	-->

	<body data-theme="default" data-layout="fluid" data-sidebar-position="left" data-sidebar-behavior="sticky">
		<div class="wrapper">
			<?php include'common/sidebar.php';?>
			<div class="main">
				<?php include'common/header.php';?>

				<main class="content">
					<div class="container-fluid p-0">

						<h1 class="h3 mb-3">Student</h1>
										<h5 class="card-title mb-0">Class 9</h5>
									</div>
									<div class="card-body">
										<form method="Post">
											<div class="row">
												<div class="col-md-8">
													<div class="mb-3">
														<label for="name" class="form-label">Name</label>
														<input type="text" class="form-control" required="" id="s9name" name="s9name" placeholder="Enter Name"></td>
													<div class="col-md-8">
													<div class="mb-3">
														<label for="name" class="form-label">Age</label>
														<input type="number" class="form-control" required="" id="s9age" name="s9age" placeholder="Enter Age"></td>
														
												<div class="mb-3">
													<label for="inputUsername" class="form-label">Gender</label>
													&nbsp &nbsp	&nbsp&nbsp &nbsp&nbsp &nbsp	&nbsp &nbsp&nbsp &nbsp	&nbsp &nbsp	&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp	&nbsp &nbsp &nbsp &nbsp &nbsp					                           
													<label for="inputUsername" class="form-label">Caste</label>
													<br><select id="s9gender" name="s9gender" required="">
														<option value="">- - -Select Category- - -</option>
														<option value="male">Male</option>
														<option value="female">Female</option>
													</select>
													&nbsp &nbsp 
													<select id="s9caste" name="s9caste" required="">
														<option value="">-Select Caste-</option>
														<option value="general">General</option>
														<option value="sc/st">SC/ST</option>
														<option value="sebc">SEBC</option>
													</select>
												</div>
												<div class="col-md-8">
													<div class="mb-3">
														<label for="name" class="form-label">Date Of Birth</label>
														<input type="date" class="form-control" required="" id="s9dob" name="s9dob" placeholder="Enter Date Of Birth"></td>
													</div>
												</div>
											</div>
											<label for="name" class="form-label">Student Year</label>
													<div class="mb-3">
													<select id="s9year" name="s9year" required="">
														<option value="">- - -Select Year- - -</option>
														<option value="2018-2019">2018-2019</option>
														<option value="2019-2020">2019-2020</option>
														<option value="2020-2021">2020-2021</option>
														<option value="2021-2022">2021-2022</option>
													</select>					
												</div>

											<input type="submit" name="submit" id="submit" value="Add" class="btn btn-lg btn-primary">
										</form>

									</div>
								</div>


							</div>

						</div>

					</div>
				</div>
			</div>

		</div>
	</main>

	<?php include'common/footer.php';?>
	</div>
	</div>

	<script src="js/app.js"></script>

	</body>


	<!-- Mirrored from appstack.bootlab.io/pages-settings.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 08 Aug 2021 05:07:26 GMT -->
	</html>