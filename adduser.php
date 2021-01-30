<?php 

    require_once 'koneksi.php';


?>

<div class="row justify-content-center">
    <div class="col-sm-8">
        <div class="card mt-5">
            <div class="card-header bg-dark text-center">
                <h3 style="color:white;">Form Add User</h3>
            </div>
            <div class="card-body">
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="form-floating mb-3 mt-3">
                        <input type="text" id="floatingInput" class="form-control" placeholder="Full Name" name="name" required>
                        <label for="floatingInput">Full Name</label>
                    </div>
                    <div class="form-floating mb-3 mt-3">
                        <input type="email" id="floatingInput" class="form-control" placeholder="NPSN" name="email" required>
                        <label for="floatingInput">E-mail</label>
                    </div>
                    <div class="form-floating mb-3 mt-3">
                        <input type="Password" id="floatingInput" class="form-control" placeholder="Password" name="pass" required>
                        <label for="floatingInput">Password</label>
                    </div>
                    <div class="card-footer text-center">
                        <button type="submit" name="simpan" class="btn btn-success" >Save</button>
                        <a href="index.php?page=home" class="btn btn-danger">Back</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php 
      if (isset($_POST['simpan'])) {
   
    $nama = $_POST['name'];
    $email=$_POST['email'];
    $pass = $_POST['pass'];

    mysqli_query($db, " INSERT INTO user (name,email,password) VALUES ('$nama','$email','$pass')");
      echo "<Script>alert('User Added Successfully')</script>";
        echo "<Script>location='index.php?page=home'</script>";
    }
 ?>