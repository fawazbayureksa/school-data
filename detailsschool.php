
<?php 

$id = $_GET['id'];
require_once 'koneksi.php'; 

$query = mysqli_query($db,"SELECT * FROM school_tb WHERE id='$id'");
 $data=mysqli_fetch_assoc($query)

 
?>
<style>
    th{
        font-weight: bold;
    }
</style>

<div class="row mt-5 mb-5">
    <div class="card">
        <h3><?=$data['name_school']?></h3>
    </div>
</div>
<div class="row justify-content-start  mt-5">
    <div class="col-sm-3">

        <div class="card">
            <div class="card-body">
                <img src="assets/<?=$data['logo_school']?>" class="rounded mx-auto d-block" width="200px" alt="">
                <h4 class="text-center mt-5">Picture</h4>
            </div>
        </div>
    </div>
    <div class="col-sm-9">
        <div class="card">
            <div class="card-header bg-dark text-center">
                <h3 style="color:white;">Details School</h3>
            </div>
            <div class="card-body">
                <div class="card-title">
                    <h3 class="text-center">Profil</h3>
                </div>
                <div class="row justify-content-center">
                    <div class="col-sm-3">
                        <th>NPSN</th>
                    </div>
                    <div class="col-sm-1">
                        <td>:</td>
                    </div>
                    <div class="col-sm-5">
                        <td><?=$data['NPSN']?></td>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-sm-3">
                        <th>Address</th>
                    </div>
                    <div class="col-sm-1">
                        <td>:</td>
                    </div>
                    <div class="col-sm-5">
                        <td><?=$data['address']?></td>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-sm-3">
                        <th>School Level</th>
                    </div>
                    <div class="col-sm-1">
                        <td>:</td>
                    </div>
                    <div class="col-sm-5">
                        <td><?=$data['school_level']?></td>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-sm-3">
                        <th>Status School</th>
                    </div>
                    <div class="col-sm-1">
                        <td>:</td>
                    </div>
                    <div class="col-sm-5">
                        <td><?=$data['status_school']?></td>
                    </div>
                </div>
            </div>
            <div class="card-footer bg-dark">
                <a href="index.php?page=edit-school&id=<?=$data['id']?>" class="btn btn-warning">Edit Profil</a>
            </div>
        </div>
    </div>
</div>
