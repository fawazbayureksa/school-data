<?php require_once 'koneksi.php';


?>

<div class="row mt-5">
    <?php

    $query = mysqli_query($db, "SELECT * FROM school_tb");
    while ($data = mysqli_fetch_assoc($query)) {


    ?>
        <div class="col-sm-4">
            <div class="card">
                <div class="card-body">
                    <div style="text-align:center;">
                        <img src="assets/<?= $data['logo_school'] ?>" width="200px" alt="">
                    </div>

                    <h5 class="card-title"><?= $data['name_school'] ?></h5>
                    <span style=color:gray><?= $data['status_school'] ?></span>
                </div>
                <div class="card-footer text-center">
                    <a href="index.php?page=details-school&id=<?= $data['id'] ?>" class="btn btn-primary btn-sm">Details</a>
                </div>
            </div>
        </div>
    <?php

    }

    ?>
</div>