<?php

$obj  =new mysqli("localhost","root","","hackathon");
session_start();

if (!isset($_SESSION['userid']))
{
	header('location:index.php');
}
$r = $obj->query("select * from category");
$rs = $obj->query("select * from subcategory");


if (isset($_POST['submit']))
{
	$schoolname =$_POST['schoolname'];
	$scity=$_POST['scity'];
	$sarea=$_POST['sarea'];
	$studentname=$_POST['studentname'];
	$sgender=$_POST['sgender'];
	$scaste =$_POST['scaste'];
	$sage=$_POST['sage'];
	$sdob =$_POST['sdob'];
	$sadhr=$_POST['sadhr'];
	$rdesc=$_POST['sdesc'];
  $phone=$_POST['phone'];	

	

		$eee =$obj->query("insert into product(schoolname,scity,sarea,studentname,sgender,scaste,sage,sdob,sadhr,sdesc,phone) values ('$schoolname','$scity'$studentname,$sgender,$scaste,$sage,$sdob,$sadhr,$sdesc,$phone)");
	
		if ($eee)
		{
			echo "<script>alert('Product Inserted') </script>";
		}
		else
		{
			echo "<script>alert('Products Not Inserted') </script>";
		}	
	}
?>




<!DOCTYPE html>
<html lang="en">


<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Bootstrap 5 Admin &amp; Dashboard Template">
	<meta name="author" content="Bootlab">

	<title>Products</title>

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

					<h1 class="h3 mb-3">Dropout</h1>

					<div class="row">
						
					</div>
				</div>

				<div class="col-md-12 ">
					<div class="tab-content">
						<div class="tab-pane fade show active" id="account" role="tabpanel">

							<div class="card">
								<div class="card-header">
									<div class="card-actions float-end">
										<div class="dropdown show">
										</div>
									</div>
									<h5 class="card-title mb-0">Fill Dropout info</h5>
								</div>
								<div class="card-body">
									<form method="post" enctype="multipart/form-data">
										<div class="row">
											<div class="col-md-8">
												<div class="mb-3">
													<label for="name" class="form-label">School Name</label>
													<input type="text" required="" class="form-control" id="schoolname" name="schoolname" placeholder="School Name"></td>
												</div>
												<div class="mb-3">
													<label for="name" class="form-label">School City</label>
													<input type="text" required="" class="form-control" id="scity" name="scity" placeholder="School City"></td>
												</div>
												<div class="mb-3">
													<label for="name" class="form-label">School Area</label>
													<input type="text" required="" class="form-control" id="sarea" name="sarea" placeholder="School Area"></td>
												</div>
												<div class="mb-3">
													<label for="name" class="form-label">Student Name</label>
													<input type="text" required="" class="form-control" id="studentname" name="studentname" placeholder="Student Name"></td>
												</div>	
												<div class="mb-3">
													<label for="name" class="form-label">Standard</label>
													<input type="text" required="" class="form-control" id="standard" name="standard" placeholder="Standard"></td>
												</div>		
												<div class="mb-3">
													<label for="inputUsername" class="form-label">Gender</label>
													&nbsp &nbsp	&nbsp&nbsp &nbsp&nbsp &nbsp	&nbsp &nbsp&nbsp &nbsp	&nbsp &nbsp	&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp	&nbsp &nbsp &nbsp &nbsp &nbsp					                           
													<label for="inputUsername" class="form-label">Caste</label>
													<br><select id="sgender" name="sgender" required="">
														<option value="">- - -Select Category- - -</option>
														<option value="Male">Male</option>
														<option value="Female">Female</option>
													</select>
													&nbsp &nbsp 
													<select id="scaste" name="scaste" required="">
														<option value="">-Select Caste-</option>
														<option value="general">General</option>
														<option value="sc/st">SC/ST</option>
														<option value="sebc">SEBC</option>
													</select>
												</div>
												<div class="mb-3">
														<label for="name" class="form-label">Age</label>
														<input type="number" class="form-control" required="" id="sage" name="sage" placeholder="Enter Age"></td>
												</div>
												<div class="col-md-8">
													<div class="mb-3">
														<label for="name" class="form-label">Date Of Birth</label>
														<input type="date" class="form-control" required="" id="sdob" name="sdob" placeholder="Enter Date Of Birth"></td>
													</div>
												</div>
											</div>
											<div class="mb-3">
														<label for="name" class="form-label">Aadhar Card</label>
														<input type="number" class="form-control" required="" id="sadhr" name="sadhr" placeholder="Enter Aadhar Card number"></td>
												</div>
												<div class="mb-3">
													<label for="inputUsername" class="form-label">Description</label>
													<textarea rows="2" class="form-control" id="rdesc" name="rdesc" placeholder="Description For Dropout" required=""></textarea>
												</div>
												<div class="mb-3">
														<label for="name" class="form-label">Phone No.</label>
														<input type="number" class="form-control" required="" id="phone" name="phone" placeholder="Enter Phone No."></td>
												</div>
												</div>
											</div>
										</div>

										<input type="submit" name="submit" id="submit" value="Add Data" class="btn btn-lg btn-primary">
										

									</div>
								</div>

								
							</div>

						</div>
					</form>
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


</html>