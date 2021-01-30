<?php 

session_start();
if (!isset($_SESSION['user'])) 
{
    echo "<script>alert('You Must Log in First')</script>";
    echo "<script>location='login.php';</script>";

}

 ?>


<!DOCTYPE html>
<html>

<head>
	<title>SCHOOL DATA | Home Page</title>

	<link rel="stylesheet" type="text/css" href="node_modules/bootstrap/dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="node_modules/bootstrap/dist/css/bootstrap.min.css">



</head>

<body class="">

	<nav class="navbar nav bg-dark">
		<div class="container">
	
				<div class="col-sm-8">
					<h1 style="color: white;">School Data</h1>
				</div>

				<div class="col-sm-4">
					<a href="index.php?page=add-user" class="btn btn-outline btn-light btn-sm">Add User</a>
					<a href="index.php?page=<?php if ($_GET['page'] == 'home'){
						echo"Add-School";
					}else{
						echo "home";

					}
						?>"  
					class="btn btn-outline btn-light btn-sm">
					<?php if ($_GET['page'] == 'home'){
						echo"Add School";
					}else{
						echo "Back";

					}
						?>
					</a>
					<a href="logout.php" class="btn btn-danger btn-sm ">logout</a>
				</div>
			</div>
	
	</nav>
	<div class="container">

		<?php

		if (isset($_GET['page'])) {

			if ($_GET['page'] == "home") {
				include 'daftarsekolah.php';
			}
			if ($_GET['page'] == "add-school") {
				include 'addschool.php';
			}
			if	($_GET['page'] == "details-school"){
				include 'detailsschool.php';
			}
			if	($_GET['page'] == "edit-school"){
				include 'editschool.php';
			}if ($_GET['page'] == "add-user") {
				include 'adduser.php';
			}
		}

		?>

	</div>



</body>

</html>