<?php
include '../../../backend/config/db.php';
include "../master/header.php";
include "../../public/fonts/fonts.php";

if (isset($_GET['editid'])) {
    $id = $_GET['editid'];
    $query = "SELECT * FROM brands WHERE id='$id'";
    $connect = mysqli_query($db_connect, $query);
    $brands = mysqli_fetch_assoc($connect);
}

?>

<div class="row">
    <div class="col">
        <div class="page-description">
            <h1>Edit ( <?= $brands['name'] ?> ) Brands</h1>
        </div>
    </div>
</div>


<div class="row">
    <div class="col-12">
        <div class="card d-flex gap-3">
            <div class="card-header">
                <h3>Brand</h3>
            </div>
            <form action="store.php?editid=<?= $brands['id'] ?>" method="POST" enctype="multipart/form-data">
                <div class="card-body">
                    <h5 class="form-label">Brand Name</h5>
                    <input type="text" name="name" class="form-control" value="<?= $brands['name'] ?>">
                    <div class="card my-3">
                        <div class="card-header">
                            <h5>Brand Logo</h5>
                        </div>
                        <picture class="d-block my-4 d-flex justify-content-center">
                            <img id="displayImg" src="../../public/uploads/brands/<?= $brands['logo'] ?>"
                                alt="Demo Image" style="width: 100%; height:150px; object-fit:contain;">
                        </picture>
                        <input type="file" name="image" class="form-control" id="inputImg"
                            onchange="document.getElementById('displayImg').src = window.URL.createObjectURL(this.files[0])"
                            aria-describedby="emailHelp">
                    </div>

                    <button type="submit" name="update" class="btn btn-primary mt-3"><i
                            class="material-icons">add</i>Update</button>
                </div>
            </form>
        </div>
    </div>
</div>


<script>

    let input = document.querySelector('#inputIcon');
    function myFun(e) {
        input.value = e.target.classList.value;
    }
</script>

<?php

include "../master/footer.php";

?>