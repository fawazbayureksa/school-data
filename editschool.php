
<?php

    
    $id = $_GET['id'];
    require_once 'koneksi.php';

$query = mysqli_query($db,"SELECT * FROM school_tb WHERE id='$id'");
 $data=mysqli_fetch_assoc($query);


    if ($_SESSION['user']['id'] != $data['user_id']  ) {
            
         echo "<script>alert('You Cannot change this school')</script>";
         echo "<script>location='index.php?page=home';</script>";
    };

 
?>

<div class="row justify-content-center">
    <div class="col-sm-8">
        <div class="card mt-5">
            <div class="card-header bg-dark text-center">
                <h3 style="color:white;">Form Edit School</h3>
            </div>
            <div class="card-body">
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="form-floating mb-3 mt-3">
                        <input type="text" id="floatingInput" value="<?=$data['NPSN']?>" class="form-control" placeholder="NPSN" name="npsn" required>
                        <label for="floatingInput">NPSN</label>
                    </div>
                    <div class="form-floating mb-3 mt-3">
                        <input type="text" id="floatingInput" value="<?=$data['name_school']?>" class="form-control" placeholder="School Name" name="nm_school" required>
                        <label for="floatingInput">School Name</label>
                    </div>
                    <div class="form-floating mb-3 mt-3">
                        <textarea type="text" id="floatingInput" value="" class="form-control" style="height: 100px;" placeholder="Address" name="address" required><?=$data['address']?></textarea>
                        <label for="floatingInput">Address</label>
                    </div>
                    <label for="floatingInput">Logo School</label>
                    <div class="form-floating mb-3 mt-3">
                        <input type="file" id="floatingInput" class="form-control" placeholder="Logo School" name="logo">
                        <div class="text-center p-2 mt-2">
                            <img src="assets/<?=$data['logo_school']?>" width="200px" class="rounded">
                        </div>
                        
                    </div>
                   <div class="form-floating mb-3 mt-3">
                       <select  name="level" class="form-control" id="floatingInput">
                            <option value="<?=$data['school_level']?>"><?=$data['school_level']?></option>
                            <option value="Elementary School">Elementary School</option>
                            <option value="Junior High School">Junior High School</option>
                            <option value="Senior High School">Senior High School</option>
                       </select>
                        <label for="floatingInput">School Level</label>
                    </div>
                    <div class="form-floating mb-5 mt-3">
                    <select  name="status" class="form-control" id="floatingInput">
                            <option value="<?=$data['status_school']?>"><?=$data['status_school']?></option>
                            <option value="Negeri">Negeri</option>
                            <option value="Swasta">Swasta</option>
                    </select>
                        <label for="floatingInput">Status School</label>
                    </div>
                    <div class="card-footer bg-dark">
                        <button type="submit" class="btn btn-success" name="simpan">Save</button>
                        <a href="index.php?page=details-school&id=<?=$data['id']?>" class="btn btn-danger">Back</a>
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

        
        $d = $_POST['level'];
        $e = $_POST['status'];

      

    if (empty($_FILES['logo']['tmp_name'])) {

        mysqli_query($db, "UPDATE school_tb SET NPSN='$a',school_name='$b',address='$c',school_level='$d',status_school='$e' WHERE id = '$id'");

       
          echo "<Script>alert('School Successfully change')</script>";
        echo "<Script>location='index.php?page=details-school&id=<?=$id?>'</script>";
    } else {

        $lok = $_FILES['logo']['name'];
        $gambar = $_FILES['logo']['tmp_name'];
        move_uploaded_file($gambar, "./assets/" . $lok);

      
        mysqli_query($db, "UPDATE school_tb SET NPSN='$a',school_name='$b',address='$c',logo_school='$lok',school_level='$d',status_school='$e' WHERE id = '$id'");

          echo "<Script>alert('School Successfully change')</script>";
        echo "<Script>location='index.php?page=home'</script>";
    }

    }


?>