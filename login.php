<?php 
	session_start();
	require_once 'koneksi.php';

 ?>
<!DOCTYPE html>
<html>

<head>
	<title>SCHOOL DATA | Login</title>

	<link rel="stylesheet" type="text/css" href="node_modules/bootstrap/dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="node_modules/bootstrap/dist/css/bootstrap.min.css">



</head>
<body>
	

<div class="row justify-content-center mt-5">
	<div class="col-sm-5">
		<div class="card">
			<div class="card-header">
				<h3>Form Login</h3>
			</div>
			<div class="card-body">
				<form method="post">
					 <div class="form-floating mb-3 mt-3">
                        <input type="email" id="floatingInput" class="form-control" placeholder="E-mail" name="email" required>
                        <label for="floatingInput">E-mail</label>
                    </div>
                    <div class="form-floating mb-3 mt-3">
                        <input type="password" id="floatingInput" class="form-control" placeholder="Password" name="pass" required>
                        <label for="floatingInput">Password</label>
                    </div>
                    <div class="card-footer">
                    	<div class="row justify-content-center">
                    		<button type="submit" class="btn btn-primary" name="masuk">Login</button>
                    	</div>
                    </div>
				</form>
			</div>
		</div>
	</div>
</div>


</body>
</html>

<?php 

	  if (isset($_POST['masuk'])) {
   
  
    $email=$_POST['email'];
    $pass = $_POST['pass'];

    $query = mysqli_query($db,"SELECT * FROM user WHERE email='$email' and password ='$pass' ");
    $cek = mysqli_num_rows($query);

        if ($cek == 1) {
            
            $_SESSION['user'] = mysqli_fetch_assoc($query);
            echo "<script>alert('Login User Successfully');</script>";
            echo "<script>location='index.php?page=home';</script>";


        }else{
            
            echo "<script>alert('Login User failed');</script>";
            echo "<script>location='login.php';</script>";

        }

    }

 ?>

