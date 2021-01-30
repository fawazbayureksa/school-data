
<?php 

    require_once 'koneksi.php';


?>

<div class="row justify-content-center">
    <div class="col-sm-8">
        <div class="card mt-5">
            <div class="card-header bg-dark text-center">
                <h3 style="color:white;">Form Add School</h3>
            </div>
            <div class="card-body">
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="form-floating mb-3 mt-3">
                        <input type="text" id="floatingInput" class="form-control" placeholder="NPSN" name="npsn" required>
                        <label for="floatingInput">NPSN</label>
                    </div>
                    <div class="form-floating mb-3 mt-3">
                        <input type="text" id="floatingInput" class="form-control" placeholder="School Name" name="nm_school" required>
                        <label for="floatingInput">School Name</label>
                    </div>
                    <div class="form-floating mb-3 mt-3">
                        <textarea type="text" id="floatingInput" class="form-control" style="height: 100px;" placeholder="Address" name="address" required></textarea>
                        <label for="floatingInput">Address</label>
                    </div>
                    <label for="floatingInput">Logo School</label>
                    <div class="form-floating mb-3 mt-3">
                        <input type="file" id="floatingInput" class="form-control" placeholder="Logo School" name="logo" required>
                    </div>
                    <div class="form-floating mb-3 mt-3">
                       <select  name="level" class="form-control" id="floatingInput">
                            <option value="">-- Choose -- </option>
                            <option value="Elementary School">Elementary School</option>
                            <option value="Junior High School">Junior High School</option>
                            <option value="Senior High School">Senior High School</option>
                       </select>
                        <label for="floatingInput">School Level</label>
                    </div>
                    <div class="form-floating mb-3 mt-3">
                    <select  name="status" class="form-control" id="floatingInput">
                            <option value="">-- Choose --</option>
                            <option value="Negeri">Negeri</option>
                            <option value="Swasta">Swasta</option>
                    </select>
                        <label for="floatingInput">Status School</label>
                    </div>
                    <div class="card-footer bg-dark">
                        <button type="submit" class="btn btn-success" name="simpan">Save</button>
                        <a href="" class="btn btn-danger">Back</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<?php

    if  (isset($_POST['simpan'])){

        $a = $_POST['npsn'];
        $b = $_POST['nm_school'];
        $c = $_POST['address'];

        $lok = $_FILES['logo']['name'];
	    $gambar = $_FILES['logo']['tmp_name'];
	    move_uploaded_file($gambar,"./assets/" . $lok);
        
        $d = $_POST['level'];
        $e = $_POST['status'];

        $f = 1;

        mysqli_query($db,"INSERT INTO school_tb (NPSN,name_school,address,logo_school,school_level,status_school,user_id) 
        VALUES ('$a','$b','$c','$lok','$d','$e','$f')");

        echo "<Script>alert('School Added Successfully')</script>";
        echo "<Script>location='index.php?page=home'</script>";

    }


?>